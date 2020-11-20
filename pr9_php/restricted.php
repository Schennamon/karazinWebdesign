<?php

session_start();

if($_SESSION['auth'] == true){
?>
    <p> Добро пожаловать<p>
<?php
} else{
?>
    <a href="index.php">Введите верные пароль и логин</a>
<?php
}
?>


