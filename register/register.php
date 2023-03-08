<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register-styles.css">
    <title>Registro | Puflito</title>
</head>
<body>

    <div class="back">
        <a href="../login/login.php">Volver</a>
    </div>

    <div class="home">
        <a href="../index.php">Inicio</a>
    </div>

    <div class="register-box">
        <img class="avatar" src="../img/logo.png" alt="">
        <h1>Registrarse</h1>
        <form action="register.php" method="post">
            <label for="Usuario">Usuario</label>
            <input type="text" name="username" placeholder="Usuario">

            <label for="Correo Electronico">Correo Electronico</label>
            <input type="email" name="email" placeholder="Correo Electronico">

            <label for="Contraseña">Contraseña</label>
            <input type="password" name="password" placeholder="Contraseña">


            <input type="submit" name="register" value="Registrarse">

            <a href="../login/login.php">Ya tengo una cuenta.</a>

        </form>
    </div>

    <?php
        include("../php/db.php"); # Incluye la conexion con la base de datos


        if (isset($_POST['register'])) { # isset verifica que se apreto el input register en la cual esta la variable register
            
            $usuario=$_POST['username'];
            $correo=$_POST['email'];
            $q = "SELECT COUNT(*) as contar FROM users WHERE username= '{$_POST['username']}' OR email= '{$_POST['email']}'";
            $consulta = mysqli_query($conn,$q);
            $array = mysqli_fetch_array($consulta);

            if(!$array["contar"]>0) {

                if(strlen($_POST['username']) >= 6 && # Se comprueba si los campos estan vacios
                strlen($_POST['email']) >= 10 &&
                strlen($_POST['password']) >= 6) {
                  $username = $_POST['username']; # Guarda los valores ingresados en variables
                  $email = $_POST['email'];
                  $password = $_POST['password'];
                  $consulta = "INSERT INTO users(username, email, password) VALUES ('$username','$email','$password')"; #Los elementos de la db toman los valores de variables
                  $resultado = mysqli_query($conn,$consulta);
                  if ($resultado) {
                      ?> <h3>Registrado Correctamente</h3> <?php
                  } else {
                      ?> <h3>Hubo un error.</h3> <?php
                  }
                } else {
      
                  if(strlen($_POST['username']) < 1 && # Se comprueba si los campos estan vacios
                     strlen($_POST['email']) < 1 &&
                     strlen($_POST['password']) < 1) {
                      ?> <p class="log-info">Por favor, complete los campos para continuar.</p> <?php
                     }
                     else {
                      if(strlen($_POST['username']) > 1) {
                          ?>                         
                          <link rel="stylesheet" href="register-styles.css">
                          <p class="log-info">El Usuario y La Contraseña tienen <br> que tener minimo 6 caracteres</p> 
                          <style>
                              .register-box input[type="submit"] {
                                      margin-top: 50px;
                                  }
                              .log-info {
                                      left: 635px;;
                                  }
                              .register-box {
                                      height: 510px;
                                  }
                          </style><?php
                      }
                      else {
                          if(strlen($_POST['password']) > 1) {
                              ?>
                              <link rel="stylesheet" href="register-styles.css">
                              <p class="log-info">El Usuario y La Contraseña tienen <br> que minimo 6 caracteres</p> 
                              <style>
                                  .register-box input[type="submit"] {
                                          margin-top: 50px;
                                      }
      
                                      .log-info {
                                          left: 635px;;
                                      }
                                  
                                  .register-box {
                                      height: 510px;
                                  }
                              </style>
                              
                              <?php
                          }
                      }
      
      
                     }
      
      
           
                }
            }
            else {
                ?> <h1>El Usuario ya existe</h1> <?php
            }


            




        }
   
    ?>

</body>
</html>