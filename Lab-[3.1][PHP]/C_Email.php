<html>
    <head>
        <title>Current Email</title>
    </head>
    <body>
        <form method="post" action="C_Email.php" enctype=""> 
			<fieldset>
				<table>
					<legend> EMAIL <legend>
					<tr>
						<td><input type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?> " placeholder="sample@example.com" required/><br/></td>
						<td><b> i </b></td>
					</tr>
				</table>
				<hr>
				<table>
					<tr>
						<td><input type="submit" name="submit" value="Submit" /></td>
					</tr>
				</table>
			</fieldset>
        </form>

        <?php 
            if(isset($_POST['submit'])){
                $email = trim($_POST['email']);

                if($email != null){
                    echo "Email is: ". $email;
                }

            }
        ?>
		
    </body>
</html>