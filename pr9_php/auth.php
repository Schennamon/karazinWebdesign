<?php
    session_start();

    $login = 'admin';
    $password = '1111';
    $_SESSION['auth'] = false;

    if($_POST['login'] == $login && $_POST['password'] == $password){
        $_SESSION['auth'] = true;
    }

    header('Location: restricted.php');
?>


