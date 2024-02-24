<?php                               // Namespace declaration

class Member
{
    public $db;                                       // Holds ref to Database object

    public function __construct(Database $db)
    {
        $this->db = $db;                                 // Add ref to Database object
    }

    // Create a new member
    public function create(array $member): bool
    {
        $member['password'] = password_hash($member['password'], PASSWORD_DEFAULT);  // Hash password
        try {                                                          // Try to add member
            $sql = "INSERT INTO users (first_name, last_name, email, username, password) 
                    VALUES (:fname, :lname, :email, :username, :password);"; // SQL to add member
            $this->db->runSQL($sql, $member);                          // Run SQL
            return true;                                               // Return true
        } catch (PDOException $e) {  
            throw $e;                                               // Re-throw exception
        }
    }
    
    // Login: returns member data if authenticated, false if not
    public function login(string $username, string $password)
    {
        $sql = "SELECT id, first_name, last_name, email, password
                  FROM users 
                 WHERE username = :username;";                         // SQL to get member data
        $member = $this->db->runSQL($sql, [$username])->fetch();    // Run SQL
        if (!$member) {                                          // If no member found
            return false;                                        // Return false
        }                                                        // Otherwise
        $authenticated = password_verify($password, $member['password']); // Passwords match?
        return ($authenticated ? $member : false);               // Return member or false
    }
}