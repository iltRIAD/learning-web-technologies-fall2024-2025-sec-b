
<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.html');
    }
?>
<html>
<head>
    <title>HOME Page</title>
</head>
<body>
        <h1>Welcome Home!</h1>
        <table style border="1">
            <tr>
                <td>
                    <a href='../user_management_admin.php' > User Management </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href='logout.php' > Logout </a>
                </td>
            </tr>
			<tr>
                <td>
                    <a href='login.html' > Back to Login  </a>
                </td>
            </tr>
			<tr>
                <td>
                    <a href='signup.html' > Back to Registration  </a>
                </td>
            </tr>

        </table>
        
</body>
</html>