<?php

session_start();
$nombre = $_SESSION['usuario'];
if($nombre == null || $nombre == ''){
    echo'Usted no tiene autorización de ingreso';
    die();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos.php">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Sinapsis</title>
</head>
<body>
    <!-- inicio nav  -->
<nav class="navbar navbar-dark bg-dark navbar-expand-md">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="">
        <img src="Sinapsis_Logo.svg" width="150" class="d-inline-block align-top" alt="">
        
    </a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <div class="navbar-nav ml-auto text-left">
            <a href="home.php" class="nav-item nav-link navperfil active">Diseño</a>
            <a href="catalogo.php" class="nav-item nav-link navperfil active">Catálogo</a>
            <a href="salir.php" class="nav-item nav-link navperfil active">Cerrar sesión</a>
        </div>
    </div>
</nav>
<!-- fin nav  -->
<form action="confirmar_img.php" method="POST" enctype="multipart/form-data">

    <h2 class="my-4 pt-4">Subir imagen</h2>
    <input type="file" REQUIRED name="imagen">
    <input type="submit" value="Guardar" name="Guardar">
</form>



<!-- footer -->
<div class="container-fluid bg-dark">
  <div class="row">
    <div class="col-sm-12 col-md-3 colorp">
      <a href="#"><p>Términos y Condiciones</p></a>
    </div>
    <div class="col-sm-12 col-md-3 colorp">
      <a href="#"><p>Políticasn y Privacidad</p></a>
    </div>
    <div class="col-sm-12 col-md-3 colorp">
      <a href="#"><p>Redes sociales</p></a>
    </div>
    <div class="col-sm-12 col-md-3 colorp">
      <a href="#"><p>Contacto</p></a>
    </div>
  </div>
</div>






<script src="js/jquery-3.6.0.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/personal.js"></script>
<script src="https://kit.fontawesome.com/xxxxxx.js" crossorigin="anonymous"></script>
</body>
</html>

