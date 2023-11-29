
<?php
////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////
include 'db.php';
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> 
		mysqli_connect_error());
}

/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
$resprofesor=$conexion->query("SELECT * FROM profesor");


///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////
echo '<table class="table" style="font-size:15px; margin-top:-1%;">

				<tr class="active">
					<th>MATRICULA</th>
					<th>NOMBRE</th>
					<th>APELLIDO</th>
				</tr>';

				while ($filaprofesor = $resprofesor->fetch_array(MYSQLI_BOTH))
				{
					echo'<tr>
						 <td>'.$filaprofesor['matricula'].'</td>
						 <td>'.$filaprofesor['nombre'].'</td>
						 <td>'.$filaprofesor['apellido'].'</td>
						 </tr>';
				}
				echo '</table>';
?>