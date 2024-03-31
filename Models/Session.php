<?php

namespace Models;

class Session
{
    public $id;
    public $fname;
    public $role;
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $this->id = $_SESSION["id"] ?? 0;
        $this->fname = $_SESSION["fname"] ?? "";
        $this->role = $_SESSION["role"] ?? "guest";
    }
    public function create($user)
    {
        $_SESSION["id"] = $user["user_id"];
        $_SESSION["fname"] = $user["fname"];
        $_SESSION["role"] = $user["role"];
    }
    public function get()
    {
        return $_SESSION;
    }
    public function set($prop, $value) {
        $_SESSION["$prop"] = $value;
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
        session_destroy();
    }
}
