<?php
    session_start();
    $email = $_POST['email'];
    $role = $_POST['role'];
    $_SESSION['email']=$email;
    $_SESSION['role']=$role;
    if($_SESSION){
        echo "Session set ".$_SESSION['email'] ;
    } else {
        echo "Session not set";
    }
?>