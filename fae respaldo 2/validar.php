<?php

$usuario=$_POST['nombre'];
$contrasena=$_POST['contrau'];
session_start();
$_SESSION['nombre']=$usuario;

include 'db.php';
$hash = md5($contrasena);
$consulta="SELECT * FROM registro WHERE nombre='$usuario' and contrau='$hash'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo'] ==1){
	header("location:principal.php");
}
else 
if($filas['id_cargo'] ==2){
	header("location:cliente.php");
}
else
{
	echo '<script> alert ("El usuario y contraseña son incorrectos")</script> 
	<script>window.location.href = "index.php"</script>';

}
mysqli_free_result($resultado);
mysqli_close($conexion);

 ?>
