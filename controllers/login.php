<?php
declare(strict_types=1);
use Core\App;
use Core\Database;
use Core\Validate;

$db = App::container()->resolve(Database::class);

require base_path("models/login.model.php");   // Bring in login logic
$_SESSION["logged_in"] = false;

$logged_in = $_SESSION["logged_in"];

$username_sent;
$password_sent;

if ($_SERVER["REQUEST_METHOD"] === "POST") {   // If the login form was submitted
    $isValidUsername = Validate::isText(htmlspecialchars($_POST["username"]));
    $isValidPassword = Validate::isPassword(htmlspecialchars($_POST["password"]));
    if ($isValidUsername && $isValidPassword) {
        $username_sent = $_POST["username"];  // Capture the username the user sent
        $password_sent = $_POST["password"];  // Capture the password the user sent
    } else {
        echo "Your credentials are not valid";
        die();
    }
    authenticate($username_sent, $password_sent, $db);
}



require_once(view("login.view.php"));