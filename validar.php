<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;
include('db.php');
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
    header('Location:home.php');
}else{
    ?>
    <?php
    require('redireccion.php');
    ?>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);



