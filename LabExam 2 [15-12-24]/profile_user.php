<?php
    session_start();
    if(isset($_COOKIE['flag']) && ($_SESSION['user']['user_type'] == $user){
?>

<html lang="en">
<head>
    <title>User Profile</title>
</head>
<body>
 
        <a href="home_user.php">Back</a> |
        <a href="logout.php">logout</a>

        <table border=1> 
            <tr>
            <td colspan="2" align="left"> Profile
                </td>
            </tr>
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>User Type</th>
            </tr>
            <?php 
                    for($i=0; $i< count($users); $i++){
            ?>
            <tr>
                <td><?php echo $users[$i]['id']; ?></td>
                <td><?php echo $users[$i]['name']; ?></td>
                <td><?php echo $users[$i]['user_type']; ?></td>
            </tr>

            <tr>
                <td colspan="2" align="left">
                    <a href="home_admin.php">Go Home</a>
                </td>
            </tr>

            <?php } ?>
        </table>
</body>
</html>

<?php
    }else{
        header('location: login.html'); 
    }
?>