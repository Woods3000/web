<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="admin-styles.css">

    <title>Admin Control Panel</title>
</head>
<body>
    <h1 class="title">Control Panel</h1>



    <?php 

        session_start();

        if (isset($_SESSION["username"]) && $_SESSION["username"] === "Woods") {
                ?> 
                <a class="back" href="../index.php">Inicio</a>


                 <div class="all">   


             <button type="button" class="btn" onclick="refrescar()">Borrar</button>
        <script>
            function refrescar() {
                    window.location.href = window.location.href;
                }
        </script>   


        <form action="admin.php" method="POST">
            <input type="submit" name="upload" value="Subir Datos">

            <label class="lnombre">Nombre</label>
            <input type="text" name="nombre" class="nombre" required>

            <label class="lapellido">Apellido</label>
            <input type="text" name="apellido" class="apellido" required>

            <label class="lestado">Estado</label>
            <input type="text" name="estado" class="estado" required>

            <label class="larrive">LLegada</label>
            <input type="date" name="arrive" class="arrive" required>

       
         </form>


        <h3>Codigo:</h3>
        <div class="token_border">

            <?php
                      
        if(isset($_POST['upload'])) {

       
            function tokeng($leng=10) {
                $cadena = "1234567890";
                $token = "";
    
                for ($i=0; $i < $leng; $i++) { 
                    $token .= $cadena[rand(0,9)]; # De esta manera se recorre una cadena de texto
                }
    
                return $token;
            }

            require("../php/db.php");
                       
            $tokend=tokeng();
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $estado=$_POST["estado"];
            $arrive=$_POST["arrive"];

            $consulta = "INSERT INTO token(token, nombre, apellido, estado, llegada) VALUES ('$tokend','$nombre','$apellido','$estado','$arrive')";
            $resultado = mysqli_query($conn,$consulta);
     
            ?> <p class="token_show"> <?php echo $tokend ?> </p> <?php
        }
            ?>
        </div>





    </div>
                <?php
        }
        else {
            header("location:../index.php");
        }
    ?>

<h1 style="color: #181818;" class="ll">a</h1>

</body>
</html>