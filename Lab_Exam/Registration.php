
<html>
<head>
    <title>Login</title>
</head>
<body>
            <form method="post" action="Home.php" enctype=""> 
            <table>
            <fieldset>
           
            <tr>
                        <td>Username: </td>
						<td><input type="text" name="username" value="" required/><br/></td>
					</tr>
                    <tr>
                        <td>Password: </td>
						<td><input type="password" name="username" value="" required/><br/></td>
					</tr>
                    <tr>
                    <td>
                            <input type="submit" name="" value="Submit"  />
                            <input type="reset" name="" value="Rest"  />
                        </td>
</tr>

</fieldset>
            </table>    
        </form>

</body>
</html>

<?php

    if(isset($_POST['submit'])){
        {
            header('location: Login.php');

        }else
        {
            echo "Error";
        }




?>


