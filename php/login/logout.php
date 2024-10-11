<?php
session_start(); // Start the session

// Remove all session variables
session_unset();

// Destroy the session data on the server
session_destroy();

// Optionally, delete the session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
}

// Redirect the user to the login page or homepage
header("Location: LGNFRM.php"); // Change to your desired redirect URL
exit(); // Ensure no further code is executed
?>
