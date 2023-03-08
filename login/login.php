<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="login-styles.css">

    <title>Iniciar Sesión | Puflito</title>
</head>
<body>



    <div class="back">
        <a href="../index.php">Volver</a>
    </div>

    <div class="register">
        <a href="../register/register.php">Registro</a>
    </div>
    
    <div class="login-box">
        <img class="avatar" src="../img/logo.png" alt="">
        <h1>Iniciar Sesión</h1>

        <form action="../php/loguear.php" method="POST">
            <!--USUARIO-->
            <label for="Usuario">Usuario</label>              <!--Agrega un texto-->
            <input type="text" name="username" placeholder="Usuario" require>

            <!--CONTRASEÑA-->
            <label for="Contraseña">Contraseña</label>   <!--Agrega un texto-->
            <input type="password" name="password" placeholder="Contraseña" require>

            <input class="Login" type="submit" name="login" value="Log In">

            <h1>O</h1>

            <button class="google">Sign In Using Google</button>

            <button class="facebook">Sign In Using Facebook</button>

            <div class="bottom-info">
                
            <a href="#">¿Contraseña Olvidada?</a>

            <a href="../register/register.php">Crear una cuenta</a>
            </div>
        </form>
    </div>


<?php


        if(isset($_SESSION["username"])) {
            header("Location:../index.php");
        }

        
?>

</body>
</html>