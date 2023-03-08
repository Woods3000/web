<?php 
    require('../php/db.php');
  
    if(isset($_POST['enviar'])) {
        $codigo = $_POST['codigo'];
        $q = "SELECT COUNT(*) as contar FROM token WHERE token='$codigo'";
        $consulta = mysqli_query($conn,$q);
        $array = mysqli_fetch_array($consulta);
        if($array["contar"] > 0) {

          ?>
          <a class="home" href="../index.php">Volver</a>
  
  <style>
   .home {
       border: 1px solid white;
       color: white;
       font-weight: bold;
       padding: 10px 15px;
       position: absolute;
       top: 45px;
       left: 7vh;
       background-color: black;
  
   }
  
   .home:hover {
       text-decoration: none;
       color: black;
       background-color: #fff;
   }
  </style>
  
       <!-- Bootstrap 4.3.1 CDN -->
       <link
     rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
     crossorigin="anonymous"
   />
   <!-- FontAwesome 4.7.0 CDN -->
   <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
     integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
     crossorigin="anonymous"
     referrerpolicy="no-referrer"
   />
  
        <link rel="stylesheet" href="../follow/follow-page.css"/>      
  
  
        <div class="container px-1 px-md-4 py-5 mx-auto">
     <div class="card">
       <div class="row d-flex justify-content-between px-3 top">
         <div class="d-flex">
           <h5>
             Pedido:
             <span class="text-primary font-weight-bold"><?php echo $codigo?></span>
           </h5>
         </div>
         <div class="d-flex flex-column text-sm-right">
           <p class="mb-0">
             Llega Aproximadamente: <span class="font-weight-bold">
  
         <?php 
                         
           $consult = "SELECT token, nombre, apellido, estado, DATE_FORMAT(llegada, '%d-%m-%Y') as llegada FROM token WHERE token='$codigo'";
           $result = $conn->query($consult);   
                             
           foreach($result as $fila) {
                 echo $fila["llegada"]; 
           }
      
         ?>
  
  
  
  
             </span>
           </p>
           <p>
             Cliente: <span class="font-weight-bold">
  
             <?php 
                 $consult = "SELECT * FROM token WHERE token='$codigo'";
                 $result = $conn->query($consult);   
                           
                   foreach($result as $fila) {
                     echo $fila["nombre"]; 
                     ?>  <?php
                     echo $fila["apellido"];
                            
              
                           }
         ?> 
  
  
             </span>
           </p>
         </div>
       </div>
       <!-- Add class "active" to progress -->
       <div class="row d-flex justify-content-center">
         <div class="col-12">
           <ul id="progressbar" class="text-center">
           <?php 
  
  $consult = "SELECT * FROM token WHERE token='$codigo'";
  $result = $conn->query($consult);   
     
  foreach($result as $fila) {
  
  if($fila["estado"] == 1) {
  ?><li class="active step0"></li>
   <li class="step0"></li>
   <li class="step0"></li>
   <li class="step0"></li>
  <?php                   
     
  
  }
  if($fila["estado"] == 2) {
  ?> 
   <li class="active step0"></li>
   <li class="active step0"></li>
   <li class="step0"></li>
   <li class="step0"></li>
  <?php
  }
  if($fila["estado"] == 3) {
  ?> 
   <li class="active step0"></li>
   <li class="active step0"></li>
   <li class="active step0"></li>
   <li class="step0"></li>
  <?php
  }
  if($fila["estado"] == 4) {
  ?> 
   <li class="active step0"></li>
   <li class="active step0"></li>
   <li class="active step0"></li>
   <li class="active step0"></li>
  <?php
  }
  if($fila["estado"] == 0) {
  ?> 
   <li class="step0"></li>
   <li class="step0"></li>
   <li class="step0"></li>
  <?php
  }
  
      
  
     }
  
   
           ?>
  
  
  
           </ul>
         </div>
       </div>
       <div class="row justify-content-between top">
         <div class="row d-flex icon-content">
           <img src="../follow/images/CheckList.png" alt="" class="icon" />
           <div class="d-flex flex-column">
             <p class="font-weight-bold">Pedido <br />Procesado</p>
           </div>
         </div>
         <div class="row d-flex icon-content">
           <img src="../follow/images/Delivery.png" alt="" class="icon" />
           <div class="d-flex flex-column">
             <p class="font-weight-bold">Pedido <br />despachado</p>
           </div>
         </div>
         <div class="row d-flex icon-content">
           <img src="../follow/images/Shipping.png" alt="" class="icon" />
           <div class="d-flex flex-column">
             <p class="font-weight-bold">Pedido <br />En Camino</p>
           </div>
         </div>
         <div class="row d-flex icon-content">
           <img src="../follow/images/Home.png" alt="" class="icon" />
           <div class="d-flex flex-column">
             <p class="font-weight-bold">LLegada <br />Del Pedido</p>
           </div>
         </div>
       </div>
     </div>
   </div>
   </body>
</html>
       <?php
        }
        else { 
          header("Location: ../index.php?error=codigo-incorrecto");
          exit();
        
        }
      }
      else { 
        header("Location: ../index.php");
        exit();
      }


?>
