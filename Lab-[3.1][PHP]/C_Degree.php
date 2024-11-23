<html>
    <head>
        <title>Degree</title>
    </head>
    <body>
        <fieldset>
            <legend>Degree</legend>
            <form method="post">
                <table>
                    <tr>
                        <td>
                            <input type="checkbox" name="degrees[]" value="SSC" 
                                <?php echo (isset($_POST['degrees']) && in_array("SSC", $_POST['degrees'])) ? 'checked' : ''; ?> /> SSC
                            <input type="checkbox" name="degrees[]" value="HSC" 
                                <?php echo (isset($_POST['degrees']) && in_array("HSC", $_POST['degrees'])) ? 'checked' : ''; ?> /> HSC
                            <input type="checkbox" name="degrees[]" value="BSC" 
                                <?php echo (isset($_POST['degrees']) && in_array("BSC", $_POST['degrees'])) ? 'checked' : ''; ?> /> BSC
                        </td>
                    </tr>
                </table>
                <hr>
                <table>
                    <tr>
                        <td><input type="submit" name="submit" value="Submit" /></td>
                    </tr>
                </table>
            </form>
        </fieldset>
        
        <?php 
            if (isset($_POST['submit'])) {
                if (isset($_POST['degrees'])) {
                    $degrees = $_POST['degrees'];
                    if (count($degrees) >= 2) {
                        echo "Degree selected: <br>";
                        foreach ($degrees as $deg) {
                            echo $deg . "<br>";
                        }
                    } else {
                        echo "At least two of them must be selected.";
                    }
                } else {
                    echo "Nothing selected.";
                }
            }
        ?>
    </body>
</html>