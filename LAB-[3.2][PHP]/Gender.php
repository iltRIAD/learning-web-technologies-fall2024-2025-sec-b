<?php 

    if(isset($_POST['submit']))
    {
        if(!(isset($_POST['gender'])) && empty($_POST['gender']))
        {
            echo "At least one of them must be selected";
        }
        else echo "selected";
    }
    else
    {
        echo "Error";
        // header('location: name.html');
    }


?>