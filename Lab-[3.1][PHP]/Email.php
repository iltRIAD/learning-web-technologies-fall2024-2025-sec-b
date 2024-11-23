<?php 

    if(isset($_POST['submit'])){
        $email = trim($_POST['email']);

        if($email == null){
            echo "Empty email address";
        }
        else{
            echo "Email is: ". $email;
        }    
    }
    
?>