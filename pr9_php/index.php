<?php

session_start();

?>


<!DOCTYPE html>
<html lang= en>
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Форма авторизации -->

    <form action="auth.php" method="post" enctype="multipart/form-data">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button>Войти</button>
    </form>

</body>
</html>

