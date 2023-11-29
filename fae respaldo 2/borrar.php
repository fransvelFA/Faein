<?php
include("db.php");

if(isset($_GET['id'])) {
$id = $_GET['id'];
$query = "DELETE FROM asignatura WHERE id = $id";
$result = mysqli_query($conexion, $query);
if(!$result){
	die("query ha fallado");

}
$_SESSION['message']='tarea ha sido borrada';
$_SESSION['message_type']='danger';
header("Location: consultas.php");
}
 ?>