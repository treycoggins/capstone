<?php

function login(): void
{
    $_SESSION["logged_in"] = true;  // Set logged_in key to true
    header("Location: /account");
}


function require_login(bool $logged_in = false): void  // Check if user is logged in
{
    if ($logged_in === false) {     // If not logged in
        redirect("/login");  // Send to the login page
    }
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

