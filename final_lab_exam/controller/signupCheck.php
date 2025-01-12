<?php
session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.html');
    }

    require_once('../model/userModel.php');

    if(isset($_POST['submit'])){
		
	//$name = trim($_POST["name"]);
	//$contact = trim($_POST['contact']);
	//$username = trim($_POST["username"]);
	//$password = trim($_POST["password"]);
	
	$name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $contact = isset($_POST['contact']) ? trim($_POST['contact']) : '';
	$username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

        if(empty($name) || empty($contact)|| empty($username) || empty($password)){
            echo "Null username/password/email";
        }else {
            $status =addUser($name, $contact, $username, $password);
            if($status){
                header('location: ../view/login.html');
            }else{
                header('location: ../view/signup.html');
            }
        }
    
    }else{
        header('location: ../view/signup.html');
    }
?>