<?php

namespace Models;

class Session
{
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }
    public function get_session(): array
    {
        return $_SESSION;
    }
    public function set_property($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    public function get_property($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }
    public function destroy(): void
    {
        $_SESSION = [];                                  // Empty $_SESSION super global
        $param    = session_get_cookie_params();         // Get session cookie parameters
        setcookie(
            session_name(),
            '',
            time() - 2400,
            $param['path'],
            $param['domain'],
            $param['secure'],
            $param['httponly']
        );       // Clear session cookie
        session_destroy();
    }
}
