<?php
session_start();

if (isset($_POST['submit']) && ($_SESSION['user']['user_type'] == $admin)) {
    $current_password = trim($_POST['current_password']);
    $new_password = trim($_POST['new_password']);
    $confirm_password = trim($_POST['confirm_password']);

    $stored_password = trim($_REQUEST['new_password']);


    if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
        echo "All fields are required!";
    } elseif ($current_password !== $stored_password) {
        echo "Current password is incorrect!";
    } elseif ($new_password !== $confirm_password) {
        echo "New passwords do not match!";
    } else {
        $_SESSION['password'] = $new_password;
        echo "Password changed successfully!";
    }
} else {
    header('location: change_password.html');
    exit;
}
?>
