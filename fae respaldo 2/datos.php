<?php
require 'db.php';
$matricula = $_POST['matricula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

if(isset($_POST['agregar'])){
    //$guardar =$_POST['agregar'];
    $sql_consultar = "SELECT matricula FROM profesor WHERE matricula = '$matricula'";
    $result = mysqli_query($conexion,$sql_consultar);
    
    if(mysqli_num_rows($result)<1){
        $sql = "INSERT INTO profesor (matricula, nombre, apellido) VALUES ('$matricula', '$nombre', '$apellido')";
        $result = mysqli_query($conexion,$sql);
        if($result){
            echo '<script> alert ("Datos guardados exitosamente")</script> 
    	<script>window.location.href = "consultas.php"</script>';
        }else{
            die("Error al registrarse");
        }
    }else{
        echo '<script> alert ("Losiento, la matricula ya existe")</script> 
    	<script>window.location.href = "consultas.php"</script>';
    }
    
    
}
