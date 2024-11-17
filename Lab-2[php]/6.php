<?php
    $array = array(3 , 33 , 333);
    $Search_element = 3;
    $found = false;
    foreach ($array as $element) 
    {
        if ($element == $Search_element) 
        {
            $found = true;
            break;
        }
    }
    

    if ($found) 
    {
        echo "Element ($Search_element) is found.";
    } else 
    {
        echo "Element ($Search_element) is not found.";
    }

?>
