<?php                               // Namespace declaration

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
        $user['password'] = password_hash($user['password'], PASSWORD_DEFAULT);  // Hash password
        try {                                                          // Try to add user
            $sql = "INSERT INTO users (first_name, last_name, email, username, password) 
                    VALUES (:fname, :lname, :email, :username, :password);"; // SQL to add user
            $this->db->runSQL($sql, $user);                          // Run SQL
            return true;                                               // Return true
        } catch (PDOException $e) {  
            throw $e;                                               // Re-throw exception
        }
    }
    
    // Login: returns user data if authenticated, false if not
    public function login(string $username, string $password)
    {
        $sql = "SELECT id
                  FROM users 
                 WHERE username = :username;";                         // SQL to get user data
        $user = $this->db->runSQL($sql, [$username])->fetch();    // Run SQL
        if (!$user) {                                          // If no user found
            return false;                                        // Return false
        }                                                        // Otherwise
        $authenticated = password_verify($password, $user['password']); // Passwords match?
        return ($authenticated ? $user : false);               // Return user or false
    }
}

