<?php

function login()  
{
    session_regenerate_id(true);    // Update session ID
    $_SESSION["logged_in"] = true;  // Set logged_in key to true
}
function logout()   // Terminate the session
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
}

function require_login($logged_in = false)  // Check if user is logged in
{
    if ($logged_in === false) {     // If not logged in
        redirect(view("login.php"));  // Send to the login page
        die();                         // Stop the rest of the page from running
    } else {
        redirect(view("account.php"));
    }
}
