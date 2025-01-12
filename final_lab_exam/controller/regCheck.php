<?php

session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.html');
    }
require_once('../model/userModel.php');

if (isset($_POST['submit'])) {
    $errors = [];

    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $contact = isset($_POST['contact']) ? trim($_POST['contact']) : '';
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $type = 'user'; // Default user type

    if (empty($name) || empty($contact) || empty($username) || empty($password)) {
        echo "<h3>All fields are required</h3>";
    } else {
        $addUser = addUser($name, $contact, $username, $password);
        if ($addUser) {
            header("Location: ../view/login.html");
            exit();
        } else {
            echo "<h3>Registration failed. Please try again.</h3>";
            header("Location: ../view/signup.html");
            exit();
        }
    }
} else {
    header("Location: ../view/signup.html");
    exit();
}
?>
