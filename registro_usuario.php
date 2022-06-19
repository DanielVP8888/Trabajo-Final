<?php

include 'db.php';


$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$query = "INSERT INTO usuarios(usuario, contraseña)
        VALUE('$usuario', '$contraseña')";

$ejecutar = mysqli_query($conexion, $query);

$ejecutar = header("Location: index.php")

?>