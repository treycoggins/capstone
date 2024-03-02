 <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $user['fname'] = $_POST['oder_id'];
    $user['lname'] = $_POST['lname'];
    $user['email'] = $_POST['email'];
    $user['username'] = $_POST['username'];
    $user['password'] = $_POST['password'];
    $confirmed_password = $_POST['confirmed'] ?? "";


   
}

  require_once(view("orders.view.php"));
