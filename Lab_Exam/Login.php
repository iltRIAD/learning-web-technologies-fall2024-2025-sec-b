<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
	 
		if ($username == "") {
			echo "Name cannot be empty.";
		}

		$firstChar = $username[0];
		if (!(($firstChar >= 'A' && $firstChar <= 'Z') || ($firstChar >= 'a' && $firstChar <= 'z'))) 
		{
			echo "Name must start with a letter.";
			return;
		}
		$isValid = true;
		for ($i = 0; $i < strlen($username); $i++) {
			$char = $username[$i];
			if (!(($char >= 'A' && $char <= 'Z') || ($char >= 'a' && $char <= 'z') || $char == ' ' || $char == '.' || $char == '-'))
			{
				$isValid = false;
			}
		}		

		$words = explode(" ", $username);
		$cnt = 0;
		foreach ($words as $w) {
			if ($w != "") {
				$cnt++;
			}
		}
        if (!$isValid)
		{
			echo "Name can only contain a-z, A-Z, period, dash.";
		}
			else
			{
		}

		if(isset($_POST['submit'])){
  
			if($username == $password){
				$_SESSION['xyz'] = true;
				header('location: Home.php');
			}else{
				echo "Invalid user!";
			}
		}else{
			header('location: Registration.html');
		}

	}



    
