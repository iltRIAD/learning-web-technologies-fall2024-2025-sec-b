<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    // Validate inputs
    if (empty($day) || empty($month) || empty($year)) {
        echo "All fields are required.";
    } elseif ($day < 1 || $day > 31 || $month < 1 || $month > 12 || $year < 1953 || $year > 1998) {
        echo "Please enter valid numbers for date.";
    } else {
        echo "Date is valid: $day/$month/$year";
    }
}
?>
