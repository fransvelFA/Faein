<?php
include 'db.php';
$usuario=$_POST['nombre'];
$contrasena=$_POST['contrau'];
$contrasena1=$_POST['contrasena1'];
$correo=$_POST['email'];
$ingre=$_POST['login'];

if(isset($_POST['login'])){
    $ingre =$_POST['login'];
    $hash = md5($contrasena);
    $sql = "INSERT INTO registro(nombre,contrau =$hash,email) VALUES ('$usuario','$contrasena','$correo')";
    if($conexion->query($sql) === true){
        echo "Los datos han sido guardados";
    }else{
        die("Error al registrarse");
    }
}

if($contrasena==$contrasena1){
    echo '<script> alert ("Las contraseñas han sido verificadas")</script> 
	<script>window.location.href = "index.php"</script>';
}else{
    echo '<script> alert ("Las contraseñas son incorrectas")</script> 
	<script>window.location.href = "usuario.php"</script>';
}
?>