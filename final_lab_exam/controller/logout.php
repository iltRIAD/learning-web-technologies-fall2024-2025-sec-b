<?php

    session_start();
    //unset($_SESSION['xyz']);
    //session_destroy();
    setcookie('status', 'true', time()-10, '/');
    header('location: ../view/login.html');

?>