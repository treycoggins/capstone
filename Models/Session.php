<?php

namespace Models;

class Session
{
    public $fname;
    public $role;

    public function __construct()
    {
        session_start();
        $this->fname = $_SESSION["fname"] ?? "";
        $this->role = $_SESSION["role"] ?? "Guest";
    }
    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    public function get($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }
    public function create($user)
    {
        session_regenerate_id(true);
        $_SESSION["fname"] = $user["fname"];
        $_SESSION["role"] = $user["role"];
    }
    public function destroy()
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
        session_destroy();                               // Destroy the session
    }
}
