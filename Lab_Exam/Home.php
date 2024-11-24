<?php
    session_start();
    if(!isset($_SESSION['xyz'])){
        header('location: Registration.html');
    }
?>

<html>
<head>
    <title>Welcome to Home</title>
</head>
<body>
        <h1>Welcome Home!</h1>
        <a href='logout.php' > logout </a>
</body>
</html>