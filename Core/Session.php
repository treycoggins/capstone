<?php
namespace Core;
class Session
{
    private $id;
    private $fname;


    public function __construct()
    {
        session_start();
        $this->id = $_SESSION['id'];
        $this->fname = $_SESSION['fname'];
    }
    public function create($user)
    {
        
    }
}
