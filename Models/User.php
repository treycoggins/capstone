<?php

declare(strict_types=1);

namespace Models;

use Core\Database;
use PDOException;

class User
{
    public $db;                                       // Holds ref to Database object

    public function __construct(Database $db)
    {
        $this->db = $db;                                 // Add ref to Database object
    }

    // Create a new user
    public function create(array $user): bool
    {
        // Check database for chosen username
        $sql = "SELECT * FROM users WHERE username = :username;";
        $found = $this->db->runSQL($sql, [":username" => $user["username"]])->fetch();
        if (!$found) {
            $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);  // Hash password
            try {                                                          // Try to add user
                $sql = "INSERT INTO users (first_name, last_name, email, username, password) 
                        VALUES (:fname, :lname, :email, :username, :password);"; // SQL to add user
                $this->db->runSQL($sql, $user);                          // Run SQL
                return true;                                               // Return true
            } catch (PDOException $e) {
                throw $e;                                               // Re-throw exception
            }
        } else {
            return false;
        }
    }
    public function login(string $username, string $password): bool
    {
        // // Write a SQL query statement to check the DB for $username_sent
        $sql = "SELECT * FROM users WHERE username = :username;";
        // // Query the database to determine if the username was found
        $user = $this->db->runSQL($sql, [$username])->fetch();
        // If user found, does password match hashed password? If so, go to Account page for user. If not, return to login page.
        if ($user) {
            return password_verify($password, $user["password"]) ? true : false;
        } else {
            return require view("login.view.php");
        }
    }

    public function logout(): void
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
