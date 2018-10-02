<?php
    session_start();
    unset($_SESSION['loginerrorusr']);
    unset($_SESSION['loginerrorpwd']);
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    header("Location: login.php");
?>