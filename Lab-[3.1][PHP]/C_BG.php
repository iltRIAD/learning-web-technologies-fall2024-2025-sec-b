<html>
    <head>
        <title>Blood Group</title>
    </head>
    <body>
		<form method="post" action="C_BG.php" enctype="">
			<fieldset>
				<table>
					<legend> BLOOD GROUP </legend>
						<tr>
							<td>
                            <select name="blood_group" required>
                                <option value="">--Select--</option>
                                <option value="A+" <?php echo (isset($_POST['blood_group']) && $_POST['blood_group'] == 'A+') ? 'selected' : ''; ?>>A+</option>
                                <option value="B+" <?php echo (isset($_POST['blood_group']) && $_POST['blood_group'] == 'B+') ? 'selected' : ''; ?>>B+</option>
                                <option value="O+" <?php echo (isset($_POST['blood_group']) && $_POST['blood_group'] == 'O+') ? 'selected' : ''; ?>>O+</option>
                                <option value="AB+" <?php echo (isset($_POST['blood_group']) && $_POST['blood_group'] == 'AB+') ? 'selected' : ''; ?>>AB+</option>
                                <option value="A-" <?php echo (isset($_POST['blood_group']) && $_POST['blood_group'] == 'A-') ? 'selected' : ''; ?>>A-</option>
                                <option value="B-" <?php echo (isset($_POST['blood_group']) && $_POST['blood_group'] == 'B-') ? 'selected' : ''; ?>>B-</option>
                                <option value="O-" <?php echo (isset($_POST['blood_group']) && $_POST['blood_group'] == 'O-') ? 'selected' : ''; ?>>O-</option>
                                <option value="AB-" <?php echo (isset($_POST['blood_group']) && $_POST['blood_group'] == 'AB-') ? 'selected' : ''; ?>>AB-</option>
                            </select>
							</td>
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
                if(isset($_POST['blood_group']))
                    {
                        $blood = $_POST['blood_group'];
                        if ($blood != null)
                            {
                                echo "Successful. You chose: ".$blood;
                            }
                        else
                            {
                                echo "Choose an option first";
                            }
                    }
                else
                    {
                        echo "Nothing was chosen";
                    }
                }
                else{
                    echo "invalid request!";
                }

            ?>

    </body>
</html>
