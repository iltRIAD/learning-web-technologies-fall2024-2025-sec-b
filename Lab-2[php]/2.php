
<?php
    $amount = 999;
    $vat_rate = 0.15;
    $vat = $vat_rate * $amount;
    $total_amount = $amount + $vat;
echo "Only Vat: " . $vat . "<br>" . "Total Amount with vat: " . $total_amount;

?>