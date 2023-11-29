<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Materia</title>
    <link rel="stylesheet" href="estilo.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
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
            <a class="navegacion__principal btn btn-info" href="principal2.php">Inicio</a>
			<a class="navegacion__principal btn btn-info" href="buscareim.php">Buscar</a>
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
</body>
</html>