<?php
    session_start();
    if(isset($_SESSION['flag'])){
?>

<html>
<head>
    <title>Home</title>
</head>
<body>
        <h1>Welcome  <?php echo $_SESSION['name']?></h1>
        <a href="profile_user.php">Profile</a>
        <a href="change_password.php">Change Password</a>
        <a href="logout.php">Logout</a>
</body>
</html>

<?php
    }else{
        header('location: login.html'); 
    }
?>