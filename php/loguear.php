<?php
    require('db.php');

    session_start();

    $usuario=$_POST['username'];
    $contraseña=$_POST['password'];

    $q = "SELECT COUNT(*) as contar FROM users WHERE username='$usuario' and password='$contraseña'";
    $consulta = mysqli_query($conn,$q);
    $array = mysqli_fetch_array($consulta);

    if($array["contar"]>0) {
        $_SESSION['username'] = $usuario;
        header("Location:../index.php");
    }
    else {
        require("../login/login.php");

        ?> 

<link rel="stylesheet" href="../login/login-styles.css">
<p class="bad">Credenciales Incorrectas</p> 

<style>
.bad {
    color: white;
    font-size: 16px;
    font-family: 'Ubuntu';
    position: absolute;
    top: 330px;
    left: 640px;
}

.login-box .Login {
    margin-top: 30px;
}

.login-box {
    height: 640px;
}

</style>

        <?php
    }

























?>