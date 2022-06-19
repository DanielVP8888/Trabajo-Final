<?php
session_start();
session_destroy();

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
    <title>Error</title>
</head>
<body>
    <div class="container-fluid cont4">
        <div class="row">
            <div class="col-sm-12 col-md-6 p-5 text-center">
                <h2 class="error">ERROR EN LA AUTENTICACION</h2>
                <p class="error">Usuario con contraseña incorrectos</p>
                <a href="index" class="btn btn-outline-danger btn-error">Regresar</a>

            </div>
            <div class="col-sm-12">
                <img src="img/undraw_safe_re_kiil.svg" alt="" class="img-fluid">
            </div>
        </div>
    </div>

</body>
</html>