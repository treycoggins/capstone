<?php
namespace CMS;                                   // Namespace declaration
use CMS\Database;
class CMS
{
    protected $db        = null;                         // Stores reference to Database object
    protected $user    = null;                         // Stores reference to Member object
    protected $session   = null;                         // Stores reference to Session object

    public function __construct(string $dsn, array $options = [])
    {
        $this->db = new Database($dsn, $options); // Create Database object

    }
    public function getUser()
    {
        if ($this->user === null) {                    // If $user property null
            $this->user = new User($this->db);       // Create User object
        }
        return $this->user;                            // Return User object
    }

    public function getSession()
    {
        if ($this->session === null) {                   // If $session property null
            $this->session = new Session();             // Create Session object
        }
        return $this->session;                         // Return Session object
    }
}