 <?php 	
	include("db.php")?>
 <?php include("include/header.php") ?>



 <div class="container">
 	<div class="row">
 		<div class="col-md-4">
 			<?php if(isset($_SESSION['message'])) { ?>

 				<div class="alert alert-warning alert-dismissible fade show" role="alert">

				 <?= $_SESSION['message'] ?>
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
				  	<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<?php session_unset();?>

 			<?php } ?>

 			<div class="card card-body">
 				<form action="save_task.php" method="POST">
 					<div class="form-group">
 						<input type="text" name="profesor" class="form-control" required placeholder="Nombre del Profesor" autofocus>
 					</div>
					 
					 <div class="form-group">
						 <textarea name="materia" rows="1" class="form-control" required placeholder="Materia"></textarea>
					 </div>

					 <div class="form-group">
						<select class="form-select" name="carrera" id="carrera">
							<option value="Ingenieria en Computacion">Ingenieria en Computacion</option>
							<option value="Administracion">Administracion</option>
							<option value="Abogado">Abogado</option>
						</select>
 					</div>

					 <div class="form-group">
						<select class="form-select" name="semestre" id="semestre">
							<option value="1">1 semestre</option>
							<option value="2">2 semestre</option>
							<option value="3">3 semestre</option>
							<option value="4">4 semestre</option>
							<option value="5">5 semestre</option>
							<option value="6">6 semestre</option>
							<option value="7">7 semestre</option>
							<option value="8">8 semestre</option>
						</select>
					</div>

					<div class="form-group">
						<select class="form-select" name="dia" id="dia">
							<option value="Lunes">Lunes</option>
							<option value="Martes">Martes</option>
							<option value="Miercoles">Miercoles</option>
							<option value="Jueves">Jueves</option>
							<option value="Viernes">Viernes</option>
						</select>
					</div>

					 <div class="form-group">
						<select class="form-select" name="hora" id="hora">
							<option value="4:00pm - 5:00pm">4:00pm - 5:00pm</option>
							<option value="5:00pm - 6:00p">5:00pm - 6:00pm</option>
							<option value="6:00pm - 7:00pm">6:00pm - 7:00pm</option>
							<option value="7:00pm - 8:00pm">7:00pm - 8:00pm</option>
							<option value="8:00pm - 9:00pm">8:00pm - 9:00pm</option>
							<option value="9:00pm - 10:00pm">9:00pm - 10:00pm</option>
						</select>
					</div>


 					<div class="form-group">
 						<input type="submit" class="btn btn-success btn-block" name="save_task" value="Guardar">
 					</div>
 				</form>
 			</div>

 		</div>
 		<div class="col-md-8">
 			<table class="table table-bordered">
 				<thead>
 					<tr>
 				
 						<th>Nombre de profesor</th>
 						<th>Materia</th>
						<th>Carrera</th>
						<th>Día</th>
						<th>Horas</th>
 						<th>Fecha de Creacion</th>
 						<th>Accion</th>
 					</tr>
 				</thead>
 				<tbody>
 					<?php 

 					$query = "SELECT * FROM task";
 					$result_tasks = mysqli_query($conexion, $query);
 					while ($row=mysqli_fetch_array($result_tasks)) {?>
 						<tr>
 							<td><?php echo $row['profesor'];?></td>
 							<td><?php echo $row['materia'];?></td>
							<td><?php echo $row['carrera'];?></td>
							<td><?php echo $row['dia'];?></td>
							<td><?php echo $row['hora'];?></td>
 							<td><?php echo $row['created_at'];?></td>
 							<td>
 								<a class="btn btn-danger" href="borrar.php?id=<?php echo $row['id']?>"><span class="material-symbols-outlined">
delete
</span></a>
 								<a class="btn btn-secondary" href="edit.php?id=<?php echo $row['id']?>"><span class="material-symbols-outlined">
edit
</span></a>

 							</td>
 <!--<td><select class="selectpicker show-menu-arrow" 
            data-style="form-control" 
            data-live-search="true" 
            title="-- Seleccionar Hora --"
            multiple="multiple">
 								<div class="container">
 									<div class="row">
 										<div class="jumbotron">
									        <option data-tokens="Espresso">4:00-5:00 pm</option>
									      <option data-tokens="Americano">5:00-6:00 pm</option>
									      <option data-tokens="Mocha">6:00-7:00 pm</option>
									      <option data-tokens="Capuccino">7:00-8:00 pm</option>
									      <option data-tokens="Affogato">8:00-9:00 pm</option>
									      <option data-tokens="Long Black">9:00-10:00 pm</option>
 										</div>
 									</div>
 								</div>
 							</select></td>
 							<td><div class="btn-group">
  
  <div class="dropdown-menu">4:00-5:00 pm</td>

 						</tr>
					-->
 					<?php }?>

 				</tbody>
 			</table>
 		</div>
 	</div>
 </div>
 <?php include("include/footer.php") ?>

 