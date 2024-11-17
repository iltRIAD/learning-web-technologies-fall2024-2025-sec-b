<?php
    $n1 = 9;
    $n2 = 99;
    $n3 = 999;

    if ($n1 >= $n2 && $n1 >= $n3) 
    {
        $largest = $n1;
    } elseif ($n2 >= $n1 && $n2 >= $n3) 
    {
        $largest = $n2;
    } else 
    {
        $largest = $n3;
    }

echo "The most largest number of which is given by you ($n1,$n2,$n3): &nbsp;&nbsp;" . $largest;
?>
