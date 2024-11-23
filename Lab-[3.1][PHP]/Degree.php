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