<?php
    for ($i = 1; $i <= 3; $i++) 
    {
        for ($j = 1; $j <= $i; $j++) 
        {
            echo "* ";
        }
        echo "<br>";
    }
    echo "<hr>";
    for ($i = 3; $i >=1; $i--) 
    {
        for ($j = 1; $j <= $i; $j++) 
        {
            echo "$j ";
        }
        echo "<br>";
    }
    
    echo "<hr>";
    $char = "A";
    for ($i = 1; $i <= 3; $i++) 
    {
        for ($j = 1; $j <= $i; $j++) 
        {
            echo "$char ";
            $char++;
        }
        echo "<br>";
    }

?>
