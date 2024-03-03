<?php


function authenticate($username, $password, $db)
{
    // // Write a SQL query statement to check the DB for $username_sent
    $sql = "SELECT * FROM users WHERE username = :username;";
    // // Query the database to determine if the username was found
    $user = $db->runSQL($sql, [$username])->fetch();
    // If user found, does password match hashed password? If so, go to Account page for user. If not, return to login page.
    if ($user) {
        password_verify($password, $user["password"]) ? login() : require_login();
    }
}
function login(): void
{
    $_SESSION["logged_in"] = true;  // Set logged_in key to true
    header("Location: /account");
}


function require_login(): void  // Check if user is logged in
{
    redirect("/login");  // Send to the login page
}

function logout(): void   // Terminate the session
{
    $_SESSION = [];     // Clear contents of the session super global array

    $params = session_get_cookie_params();  // Get session cookie parameters
    setcookie(
        "PPHSESSID",
        "",
        time() - 3600,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );    // Destroy the session cookie

    session_destroy();  // Destroy the session file
    require(view("login.view.php"));
}
