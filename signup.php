<?php 
require 'database.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/MeProyect/assets/css/style.css">
    <title>Document</title>
</head>
<body>
<header>
        <a href="/MeProyect">Me Services RP</a>
    </header>

    <h1>SignUp</h1>
    <span>or <a href="/MeProyect/login.php">Login</a></span>
    <form action="/MeProyect/signup.php" method="post">
        <input type="text" name="email" placeholder="Ingresa Tu correo">
        <input type="password" name="password" placeholder="Contraseña">
        <input type="password" name="Confirm_password" placeholder="Confirma Contraseña">
        <input type="submit" value="Ingresar">
</body>
</html>