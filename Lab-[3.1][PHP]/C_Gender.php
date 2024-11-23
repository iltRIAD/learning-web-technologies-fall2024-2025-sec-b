<html>
    <head>
        <title>Gender</title>
    </head>
    <body>
        <form method="post" action="C_Gender.php" enctype="">
            <fieldset>
                <legend>Gender</legend>
                <table>
                    <tr>
                        <td>
                            <input type="radio" name="gender" value="male" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'male') ? 'checked' : ''; ?> required /> Male
                            <input type="radio" name="gender" value="female" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'female') ? 'checked' : ''; ?> required /> Female
                            <input type="radio" name="gender" value="other" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'other') ? 'checked' : ''; ?> required /> Other    
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

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $gender = htmlspecialchars($_POST['gender']);
                echo "<h4>Your gender is: $gender</h4>";
            }

        ?>

    </body>
</html>