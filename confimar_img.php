<?php

include 'db.php'

$imagen = $_FILES['imagen'];

$query = "INSERT INTO imagenes(imagen)
           VALUES ('$imagen')";

$resultado = mysqli_query($conexion, $query);

$resultado = move_uploaded_file('imagenes/'.$imagen)




?>