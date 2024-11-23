<html>
    <head>
        <title>DOB</title>
    </head>
    <body>
        <form method="post" action="C_DOB.php" enctype=""> 
			<fieldset>
			
			<table>
				<legend> DATE OF BIRTH </legend>
				<table>
					<tr>
						<td><table>
							<tr>
								<td align='center'> dd </td>
							</tr>
							<tr>
								<td><input type="text" name="dd"  value="<?php echo isset($_POST['dd']) ? $_POST['dd'] : ''; ?> " placeholder="day" required/> / </td>
							</tr>
						</table></td>
					
					
					
						<td><table>
							<tr>
								<td align='center'>  mm </td>
							</tr>
							<tr>
								<td><input type="text" name="mm"  value="<?php echo isset($_POST['mm']) ? $_POST['mm'] : ''; ?> " placeholder="month" required/> / </td>
							</tr>
						</table></td>
					

					
						<td><table>
							<tr>
								<td align='center'>  yyyy </td>
							</tr>
							<tr>
								<td><input type="text" name="yy"  value="<?php echo isset($_POST['yy']) ? $_POST['yy'] : ''; ?> " placeholder="year" required/></td>
							</tr>
						</table></td>
					</tr>
				</table>
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

    </body>
</html>
