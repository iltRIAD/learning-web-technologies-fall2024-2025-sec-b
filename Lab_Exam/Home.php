<html>
<head>
    <title>Welcome to Home</title>
</head>
<body>
        <h1>Welcome Home!</h1>
        <a href='Logout.php' > logout </a>
</body>
</html>

<?php
    session_start();
    if(!isset($_SESSION['xyz'])){
        header('location: Registration.html');
    }
?>