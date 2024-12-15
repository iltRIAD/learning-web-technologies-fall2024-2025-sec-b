<?php
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html>
<head>
    <title>Admin Home</title>
</head>
<body>
        <h1>Welcome  <?php echo $_SESSION['name']?></h1>
        <a href="profile_admin.php">Profile</a>
        <a href="change_password.php">Change Password</a>
        <a href="view_users.php">View Users</a>
        <a href="logout.php">Logout</a>

</body>
</html>

<?php
    }else{
        header('location: login.html'); 
    }
?>