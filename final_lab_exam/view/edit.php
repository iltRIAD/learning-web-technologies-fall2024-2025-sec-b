<?php

    if(isset($_REQUEST['username'])){
        echo $_REQUEST['username'];
    }

?>

<html>
<head>
    <title>Edit Page</title>
</head>
<body>
        <h2>Edit Page</h2>
        <a href='home.php' > Back </a> | 
        <a href='../controller/logout.php' > logout </a>
        <br>

        <form method="post" action="../controller/editCheck.php" enctype="">
            Username: <input type="text" required name="username" value="" /> <br>
            Password: <input type="password" name="password" value="" /> <br>
            Email:   <input type="email" name="email" value="" /> <br>
            <input type="submit" name="submit" value="Submit" />
        </form>
</body>
</html>