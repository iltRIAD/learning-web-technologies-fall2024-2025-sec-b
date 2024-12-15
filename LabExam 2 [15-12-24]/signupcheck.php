<?php
    session_start();
    if(isset($_POST['submit'])){
        $id  =  trim($_REQUEST['id']);
        $password  =  trim($_REQUEST['password']);
        $confim_password  =  trim($_REQUEST['confirm_password']);
        $name = trim($_REQUEST['name']);
        $user_type = trim($_REQUEST['admin']);
        $user_type = trim($_REQUEST['user']);

        if($id == null || empty($password))
        {
            echo "Null data found!";
        }else
        {
            $user = ['id'=> $id, 'password'=> $password,'confirm_password'=> $confirm_password,'name'=> $name,'user_type'=> $admin,'user_type'=> $user];
            $_SESSION['user'] = $user;
            header('location: login.html');
        }
    }else{
        header('location: signup.html');
    }

?>
