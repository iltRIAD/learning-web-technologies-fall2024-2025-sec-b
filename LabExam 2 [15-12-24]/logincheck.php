<?php
    session_start();
    if(isset($_POST['submit'])){
        $id  =  trim($_REQUEST['id']);
        $password  =  trim($_REQUEST['password']);
        $confim_password  =  trim($_REQUEST['confirm_password']);
        $name = trim($_REQUEST['name']);
        $user_type = trim($_REQUEST['admin']);
        $user_type = trim($_REQUEST['user']);

        if($id == null || empty($password) ){
            echo "Null data found!";
        }else if ($_SESSION['user']['id'] == $id && $_SESSION['user']['confirm_password']==$password){

            setcookie('flag', 'true', time()+3600, '/');
            $_SESSION['id'] = $id;

            if($_SESSION['user']['user_type'] == $user)
            {
                header('location: home_user.php');
            }
            elseif($_SESSION['user']['user_type'] == $admin){
                header('location: home_admin.php');
            }
            
            // header('location: home_admin.php');
            
        }else{
            echo "Invalid user";
        }

    }else{
        header('location: login.html');
    }
?>