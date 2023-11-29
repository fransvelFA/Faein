<?php
require 'db.php';

$nombre=$_POST['nombre'];

if(isset($_POST['agregar'])){
    $sql_consultar = "SELECT nombre FROM asignatura WHERE nombre = '$nombre'";
    $result = mysqli_query($conexion,$sql_consultar);
    
    if(mysqli_num_rows($result)<1){
        $sql = "INSERT INTO asignatura (nombre) VALUES ('$nombre')";
        $result = mysqli_query($conexion,$sql);
        if($result){
            echo '<script> alert ("Datos guardados exitosamente")</script> 
    	<script>window.location.href = "consultas.php"</script>';
        }else{
            die("Error al registrarse");
        }
    }else{
        echo '<script> alert ("No se pudo agregar la asignatura, ya existe")</script> 
    	<script>window.location.href = "consultas.php"</script>';
    }
    
    
}
