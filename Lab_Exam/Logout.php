<?php

    session_start();
    unset($_SESSION['xyz']);
    header('location: Registration.html');

?>