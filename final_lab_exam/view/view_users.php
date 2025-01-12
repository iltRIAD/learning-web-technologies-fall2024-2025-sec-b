<?php
session_start();
require_once('../model/userModel.php');

if (!isset($_COOKIE['status'])) {
    header('location: login.html');
    exit();
}

// Fetch user data from the database
$users = getUserID(); // Assuming this function exists in userModel.php
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Users</title>
</head>
<body>
    <h2>User List</h2>
    <a href='home.php'> Back </a> | 
    <a href='../controller/logout.php'> Logout </a>
    <br><br>
    <table border="1">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?php echo htmlspecialchars($user['username']); ?></td>
                <td><?php echo htmlspecialchars($user['email']); ?></td>
                <td>********</td>
                <td>
                    <a href="edit.php?username=<?php echo urlencode($user['username']); ?>"> Edit </a> |
                    <a href="delete.php?username=<?php echo urlencode($user['username']); ?>"> Delete </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
