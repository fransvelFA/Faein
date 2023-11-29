<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Consultas</title>
<link rel="stylesheet" href="estilo.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
  <body>
	<nav>
        <div class="navegacion__principal"><!--navegacion principal-->
            <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                      </svg><!--icono de usuario-->
            </div>
        <ul >
            <a class="navegacion__principal btn btn-info" href="principal.php">Inicio</a>
			<a class="navegacion__principal btn btn-info" href="generar.php">Generar</a>
            <a class="navegacion__principal btn btn-info" href="consultas.php">Registro</a>
            <a class="navegacion__principal btn btn-info" href="index.php">Cerrar sesion</a>
        </ul>
        </div>
    </nav>
	<!--buscador de datos con javascript y ajax-->
	<div class="container">
    <div class="page-header text-left">
      <h1>Buscador</h1>
    </div>
    <div class="row">
      <div class="col-md-3 mx-auto">
        <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon glyphicon-search" aria-hidden="true"></span></span>
          <input type="text" class="form-control" id="search" placeholder="Buscar datos">
        </div>
      </div>
      <div class="container">
          <div class="col-md-9" id="result">
          </div>
        </div>
      </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>
   <script type="text/javascript" src="buscar.js"></script>

   <script type="text/javascript">

function tiempoReal()
{
	var tabla = $.ajax({
		url:'buscar1.php',
		dataType:'text',
		async:false
	}).responseText;

	document.getElementById("miTabla").innerHTML = tabla;
}
setInterval(tiempoReal, 1000);
</script>

	<!--registro de los docentes y materias-->
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						
						 <h2>Registro de <b>Docente</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar Docente</span></a>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>Matricula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                    </tr>
                </thead>
                <tbody>
				<?php
					include 'db.php';
					$query = "SELECT * FROM profesor";
					$result_guardar = mysqli_query($conexion, $query);
					while($row=mysqli_fetch_array($result_guardar)){?>
					<tr>
							<td><?php echo $row['matricula'];?></td>
 							<td><?php echo $row['nombre'];?></td>
 							<td><?php echo $row['apellido'];?></td>
 							<td><a href="actualizar_profesor.php?id=<?php echo $row['id']?>" class="btn btn-warning" data-toggle="modal"><i class="material-icons">&#x270f;</i> <span>Editar</span></a></td>
 							<td><a href="borrar_profesor.php?id=<?php echo $row['id']?>" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Borrar</span></a></td>
				    </tr>
 					<?php }?>
                 
            </tbody>
            </table>
		
    	</div>
    </div>
	
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="datos.php" method="POST" ><!--formulario de consultas -->
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Docente</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">			
						<div class="form-group">
							<label>Matricula</label>
							<input type="text" name="matricula" class="form-control" required>
						</div>		
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" name="nombre" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Apellido</label>
							<input type="text" name="apellido" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" name="agregar" value="Agregar">
					</div>
				</form>
			</div>
		</div>
	</div>




<!--Registro de materias-->
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						
						 <h2>Registro de <b>Materias</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal1" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar Materia</span></a>
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nombre de la materia</th>
                    </tr>
                </thead>
                <tbody>
				<?php
					include 'db.php';
					$query = "SELECT * FROM asignatura";
					$result_guardar = mysqli_query($conexion, $query);
					while($row=mysqli_fetch_array($result_guardar)){?>
					<tr>
 							<td><?php echo $row['nombre'];?></td>
 							<td><a href="actualizar.php?id=<?php echo $row['id']?>" class="btn btn-warning" data-toggle="modal"><i class="material-icons">&#x270f;</i> <span>Editar</span></a></td>
 							<td><a href="borrar.php?id=<?php echo $row['id']?>" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Borrar</span></a></td>
 					<?php }?>
                 
            </tbody>
            </table>
		
    	</div>
    </div>
	
	<div id="addEmployeeModal1" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="asignatura.php" method="POST" ><!--formulario de consultas -->
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Materia</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">			
						<div class="form-group">
							<label>Nombre de la materia</label>
							<input type="text" name="nombre" class="form-control" required>
						</div>		
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" name="agregar" value="Agregar">
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<div id="addEmployeeModal2" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="asignatura.php" method="POST" ><!--formulario de consultas -->
					<div class="modal-header">						
						<h4 class="modal-title">Editar Materia</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">			
						<div class="form-group">
							<label>Nombre de la materia</label>
							<input type="text" name="nombre" class="form-control" required>
						</div>		
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" name="agregar" value="Editar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>