<?php
session_start();

    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.html');
    }

require_once('../model/userModel.php');

if (isset($_POST['submit'])) {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Corrected the if condition by closing the parenthesis
    if (empty($username) || empty($password)) {
        echo "Null username/password";
    } else {
        $user = login($username, $password); // Fetch user data during login
        if ($user) {
            $_SESSION['user_id'] = $user['id']; // Store user ID in session
            setcookie('status', 'true', time() + 3000, '/');
            header('location: ../view/home.php');
        } else {
            echo "Invalid User! or Wrong Username or Password!";
        }
    }
} else {
    header('location: ../view/login.html');
}
?>
