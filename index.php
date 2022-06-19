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
        <img src="img/Sinapsis_Logo.svg" width="280" class="d-inline-block align-top" alt="">
        
    </a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <div class="navbar-nav ml-auto text-left">
            <!-- inicio de modal -->

            <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModal">
inicio de sesión
</button>

<a href="registrar.php">Registrar</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
        <form action="validar.php" method="post">
          <h3>Iniciar sesión</h3>
          <label>Validar usuario</label>
          <input type="text" placeholder="Ingrese usuario" name="usuario">
          <input type="password" placeholder="Ingrese su contraseña" name="contraseña">
          <input type="submit" value="Ingresar">
          
        </form>

      </div>
    </div>
  </div>
</div>
        <!--  fin de modal -->
        </div>
    </div>
</nav>
<!-- fin nav  -->

<!-- Este es el cuerpo -->
<div class="container-fluid cont0">
  <div class="row calc">

  <div class="col-sm-12 col-md-6 doc ">
      <h2 class="display-2 titlepersonal">Bienvenidos todos</h2>
      <h2 class="display-2 titlepersonal">a mi portafolio.</h2>
    </div>
    <div class="col-sm-12 col-md-6 img-index">
      <img src="img/Cuervo.svg" alt="" class="img-fluid" width="500">
    </div>
    
    <div class="col-sm-12">
      <p class="para">Hoy en día, todos conocemos, visitamos y usamos sitios web. Por lo que es claro que tener un buen sitio web es esencial para el éxito de cualquier negocio. En el pasado, la pura idea de construir un sitio web era el más grande dolor de cabeza, pero los tiempos han cambiado. A medida que la tecnología avanza, crear un sitio web ahora es más fácil que nunca, y todas las marcas pueden, y deben, estar presentes en línea. 


Hay muchas formas de crear tu propio sitio web, pero una opción cada vez más popular es usar creadores de sitios web. Los creadores de sitios web como Wix son plataformas que te permiten crear tu propio sitio web a partir de plantillas o desde cero. Nuestra plataforma es una gran solución tanto para principiantes como para desarrolladores web profesionales. 


En esta guía, te mostramos cómo crear una página web paso a paso. Desde elegir la mejor plataforma para crear sitios web hasta registrar tu dominio, pasando por el contenido de tu página y la optimización para ser encontrado en Google. ¿Listo para comenzar?  Estos son todos los pasos que debes seguir para crear tu sitio web</p>

      <h2 class="display-2 titlepersonal">Programas que manejo</h2>
      <img src="img/undraw_innovative_re_rr5i.svg" alt="" class="img-fluid" width="485">
      <img src="img/undraw_innovative_re_rr5i.svg" alt="" class="img-fluid" width="485">
      <img src="img/undraw_innovative_re_rr5i.svg" alt="" class="img-fluid" width="485">
      <img src="img/undraw_innovative_re_rr5i.svg" alt="" class="img-fluid" width="485">
      
      
    </div>
  </div>

</div>
<!-- Este es el fin cuerpo -->

<!-- este es mi footer -->
<div class="container-fluid bg-dark">
  <div class="row">
    <div class="col-sm-12 col-md-3 colorp">
      <p>Términos y Condiciones</p>
    </div>
    <div class="col-sm-12 col-md-3 colorp">
      <p>Políticasn y Privacidad</p>
    </div>
    <div class="col-sm-12 col-md-3 colorp">
      <p>Redes sociales</p>
    </div>
    <div class="col-sm-12 col-md-3 colorp">
      <p>Contacto</p>
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

