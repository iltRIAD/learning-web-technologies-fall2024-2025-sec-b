<!DOCTYPE html>
<html lang="en">
<head>
    <title>Current Name</title>
</head>
<body>
    <form method="post" action="C_Name.php" enctype=""> 
        <fieldset>
            <table>
                <legend> NAME </legend>
                <tr>
                    <td><input type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?> " required/><br/></td>
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
        if(isset($_POST['submit']))
        {
            $username = trim($_POST['username']);
	 
            if ($username == "") {
                echo "Name cannot be empty.";
            }

            $firstChar = $username[0];
            if (!(($firstChar >= 'A' && $firstChar <= 'Z') || ($firstChar >= 'a' && $firstChar <= 'z'))) 
            {
                echo "Name must start with a letter.";
                return;
            }
            $isValid = true;
            for ($i = 0; $i < strlen($username); $i++) {
                $char = $username[$i];
                if (!(($char >= 'A' && $char <= 'Z') || ($char >= 'a' && $char <= 'z') || $char == ' ' || $char == '.' || $char == '-'))
                {
                    $isValid = false;
                }
            }		

            $words = explode(" ", $username);
            $cnt = 0;
            foreach ($words as $w) {
                if ($w != "") {
                    $cnt++;
                }
            }
            if (!$isValid)
            {
                echo "Name can only contain a-z, A-Z, period, dash.";
            }
            
            else if($isValid){
                if ($cnt < 2) 
                {
                    echo "Name must contain at least two words.";
                    return;
                }
                else echo "Username is: ". $username. "<br>";
            }
        }
    ?>
</body>
</html>
