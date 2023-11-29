<?php
include("db.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM profesor WHERE id = $id";
    $result = mysqli_query($conexion, $query);
    if(!$result){
    	die("query ha fallado");
    }
}
?>

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
    
    
        <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						
						 <h2>Editar <b>Docente</b></h2>
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
                    $id = $_GET['id'];
					$query = "SELECT * FROM profesor WHERE id = '$id'";
					$result_guardar = mysqli_query($conexion, $query);
					while($row=mysqli_fetch_array($result_guardar)){?>
					
					
					<tr>
            <form action="guardar_docente.php" method="post">
							<td><input class="form-control"  type="text" name="matricula" id="matricula" value="<?php echo $row['matricula'];?>"></td>
              <td><input class="form-control"  type="text" name="nombre" id="nombre" value="<?php echo $row['nombre'];?>"></td>
              <td><input class="form-control"  type="text" name="apellido" id="apellido" value="<?php echo $row['apellido'];?>"></td>
              <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
              <td><input class="btn btn-warning" type="submit" value="Editar"></td>
              
              <!--<td><a href="guardar_docente.php?id=<?php echo $row['id']?>" class="btn btn-warning" data-toggle="modal"><i class="material-icons">&#x270f;</i> <span>Editar</span></a></td>-->
				    </tr>
          </form>
 					<?php }?>
                 
            </tbody>
            </table>
		
    	</div>
    </div>
