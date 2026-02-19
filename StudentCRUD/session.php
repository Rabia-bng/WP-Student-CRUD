<?php

session_set_cookie_params([
    'lifetime' => 0,        
    'path' => '/',
    'secure' => false,    
    'httponly' => true,
    'samesite' => 'Strict'
]);

session_start();


$inactive = 300; 

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $inactive)) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

$_SESSION['last_activity'] = time();


if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
