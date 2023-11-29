<?php
include 'db.php';
$nombre=$_POST['nombre'];
$telefono=$_POST['cel'];
$email1=$_POST['correo'];
$mensa=$_POST['mensaje'];


if(isset($_POST['enviar'])){
    $guardar =$_POST['enviar'];
    $sql = "INSERT INTO formulario (nombre,cel,correo,mensaje) VALUES ('$nombre','$telefono','$email1','$mensa')";
    if($conexion->query($sql) === true){
        echo '<script> alert ("Datos guardados exitosamente")</script> 
	<script>window.location.href = "principal.php"</script>';
    }else{
        die("Error");
    }
}
?>
