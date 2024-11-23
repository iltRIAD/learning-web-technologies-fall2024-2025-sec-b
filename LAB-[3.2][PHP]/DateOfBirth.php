<?php 

    if(isset($_POST['submit']))
    {
        $day = trim($_POST['dd']);
        $month = trim($_POST['mm']);
        $year = trim($_POST['yy']);

        if (empty($day) || empty($month) || empty($year)) {
            print("Date cannot be empty");
        }
        
        else {
            // $date_parts = explode('/', $date);
            // if (count($date_parts) == 3) {
            $dd = intval($day);
            $mm = intval($month);
            $yy = intval($year);
            // if (!checkdate($month, $day, $year)) {
            //     print("Invalid");
            if ($dd < 1 || $dd > 31) {
                print("Day must be between 1 and 31");
            } else if ($mm < 1 || $mm > 12) {
                print("Month must be between 1 and 12");
            } else if ($yy < 1953 || $yy > 1998) {
                print("Year must be between 1953 and 1998");
            } else {
                print("Your Date of Birth is: ". $dd. "/ ". $mm. "/ ". $yy);
            }
        }
    }


?>