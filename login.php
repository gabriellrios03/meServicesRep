<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/MeProyect/assets/css/style.css">
    <title>Login</title>
</head>

<body>

    <header>
        <a href="/MeProyect">Me Services RP</a>
    </header>

    <h1 id="login">Login</h1>
    <span>or <a href="/MeProyect/signup.php">SignUp</a></span>
    <form action="/MeProyect/login.php" method="post">
        <input type="text" name="email" placeholder="Ingresa Tu correo">
        <input type="password" name="password" placeholder="Contraseña">
        <input type="submit" value="Ingresar">

    </form>
</body>

</html>