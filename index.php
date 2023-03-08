<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title>Puflito International</title>

</head>
<body>


<div class="computer-view">
<div class="logo"><img src="img/logo.png" alt=""></div>

<div class="log-in"><a href="login/login.php">Ingresar</a></div> 


    <nav>
      <ul class="menu-horizontal">
          <li><a href="index.php">Inicio</a></li>
          <li>
              <a href="#">Enviar</a>
              <ul class="menu-vertical"> 
                  <li><a href="#">Enviar Documentación</a></li>
                  <li><a href="#">Enviar un Paquete</a></li>
                  <li><a href="#">Envio Internacional</a></li>
              </ul>
          </li>
          <li>
              <a href="#">Seguir</a>
              <ul class="menu-vertical"> 
                  <li><a href="#">Seguir Envios</a></li>
                  <li><a href="#">Internacional</a></li>
                  <li><a href="#">Sucursales de Retiro</a></li>
              </ul>
          </li>
          <li>
              <a href="#">Contacto</a>
              <ul class="menu-vertical"> 
                  <li><a href="form/form.php">Mensajes</a></li>
                  <li><a href="#">Redes Sociales</a></li>
                  <li><a href="#">Teléfono</a></li>
              </ul>
          </li>
      </ul>
  </nav>




  <div class="img-container">
      <img src="img/banner.jpg" alt="">

      <h1>¡<span>Bienvenidos</span> a  Puflito!</h1>
      <h3>Busca tu envio</h3>


    <form action="follow/follow.php" method="POST">
    <input type="text" name="codigo" placeholder="Ingresá el número de seguimiento" required> 
    <input type="submit" name="enviar" value="🔍︎" required>    
    </form>
<?php

    if(isset($_GET['error']) && $_GET['error'] == 'codigo-incorrecto') {
        ?>
        <h2 class="badcode" id="error">Código incorrecto</h2>
        <?php
}



?>

<script>
  setTimeout(function() {
    document.getElementById("error").style.display = "none";
  }, 7000); 
</script>


  </div>





<?php

session_start();

if(isset($_SESSION["username"])) {
    $usuario = $_SESSION["username"];
        ?>

        <h1 id="welcome" class="welcome">¡Welcome <?= $usuario?>!</h1>

<script>
  setTimeout(function() {
    document.getElementById("welcome").style.display = "none";
  }, 7000); 
</script>
    
        <a class="logout" href="php/exit.php" >Log Out</a>
        
        <style>
        
        .welcome {
            position: absolute;
            bottom: 800px;
            font-size: 22px;
            left: 650px;
    
        }
        
        .log-in a {
            display: none;
        }
    
        .logout {
            border: 1px solid black;
            padding: 15px 25px;
            position: absolute;
            font-weight: bold;
            top: 10px;
            right: 100px;
            text-decoration: none;
            cursor: pointer;
            background-color: #f0ecfc;
            background-image: linear-gradient(315deg, #f0ecfc 0%, #c797eb 74%);
            border: none;
        }
        </style>
        



        <?php

        
        if($usuario === "Woods") {
            ?> 
            <link rel="stylesheet" href="styles.css">
            <a  class="admin" href="admin/admin.php">Admin Control Panel</a>
            <?php
        }
  }
?>

<footer>
<h3>Seguinos en nuestras redes:</h3>
  <div class="redes">

        <ul class="ulist">
        <li>
            <a href="#">
            <i class="fab fa-instagram"></i>
            </a>
        </li>
        <li>
            <a href="#">
            <i class="fab fa-facebook"></i>
            </a>
            </li>
        <li>
            <a href="#">
            <i class="fab fa-whatsapp"></i>
            </a>
            
        </li>
        <li>
            <a href="#">
            <i class="fab fa-twitter"></i>
            </a> 
        </li>
        </ul>
  </div>

  <div class="copyright">
    <p>Copyright &copy; 2023</p>
    <p>Puflito All Rights Reserved</p>
    </div>
</footer>


</div>





<div class="mobile-view">
<header class="header">
		<div class="container">
			<div class="btn-menu">
				<label for="btn-menu">☰</label>
			</div>
		</div>
	</header>

	<input type="checkbox" id="btn-menu">
	<div class="container-menu">
		<div class="cont-menu">
			<nav>

        <a class="btn-a" href="index.php">Inicio</a>

        <input type="checkbox" id="btn-b">
        <label  for="btn-b">Enviar</label>
				<div class="sub-menu-b">
					<ul>
						<li><a href="#">Enviar Documentación</a></li>
						<li><a href="#">Enviar un Paquete</a></li>
						<li><a href="#">Envio Internacional</a></li>
					</ul>
				</div>

        <input type="checkbox" id="btn-c">
        <label for="btn-c">Seguir</label>
				<div class="sub-menu-c">
					<ul>
            <li><a href="#">Seguir Envios</a></li>
            <li><a href="#">Internacional</a></li>
            <li><a href="#">Sucursales de Retiro</a></li>
					</ul>
				</div>

        <input type="checkbox" id="btn-d">
        <label for="btn-d">Contacto</label>
				<div class="sub-menu-d">
					<ul>
            <li><a href="form/form.php">Mensajes</a></li>
            <li><a href="#">Redes Sociales</a></li>
            <li><a href="#">Teléfono</a></li>
					</ul>
				</div>
			</nav>
			<label class="label" for="btn-menu">✖️</label>
		</div>
	</div>


  <style>

@media screen and (max-width: 720px) {
    .sub-menu-a, .sub-menu-b, .sub-menu-c, .sub-menu-d {
  display: none;


}

.sub-menu-b ul li a, .sub-menu-c ul li a, .sub-menu-d ul li a {
  font-size: 20px;
  border: none;
  background-color: #1c1c1c;
}

#btn-b:checked ~ .sub-menu-b,
#btn-c:checked ~ .sub-menu-c,
#btn-d:checked ~ .sub-menu-d {
  display: block;

}

nav label {
  display: block;
  padding: 0.5em;
  background-color: #1c1c1c;
  cursor: pointer;
  font-size: 30px;
  color: white;
}

nav input[type="checkbox"] {
  display: none;
}

.cont-menu .btn-a {
  font-size: 30px;
  display: block;
  padding: 0.5em;
  background-color: #1c1c1c;
  cursor: pointer;
  font-size: 30px;
  color: white;
  border: none;
}

}
  </style>


</div>






</body>
</html>


