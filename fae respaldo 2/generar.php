<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>


<link rel="canonical" href="https://codepen.io/MitchES/pen/BWxxrW">


<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>

    <title>Pagina principal</title>
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
            <a class="navegacion__principal btn btn-info" href="principal.php">Inicio</a>
            <a class="navegacion__principal btn btn-info" href="generar.php">Generar</a>
            <a class="navegacion__principal btn btn-info" href="consultas.php">Registro</a>
            <a class="navegacion__principal btn btn-info" href="index.php">Cerrar sesion</a>
        </ul>

        </div>
    </nav>

   
    <title>Document</title>
</head>
<style>
    body {
  width: 100%;
  height: 100%;
  background: radial-gradient(#ffffff, #f8f8f8);
  background-repeat: repeat-y;
}

.container {
  width: 100%;
  height: auto;
  padding: 25px;
  align-items: center;
  text-align:center;
}

.info {
  font-family: arial, sans-serif;
}

.tableContents {
  min-width: 200px;
  min-height: 50px;
  border: 2px solid #707070;
  overflow: hidden;
  border-collapse: seperate/*collapse*/
  ;
}

th,
td {
  width: auto;
  min-width: 25px;
  border-bottom: 1px solid #606060;
  border-right: 1px solid #606060;
  text-align: center;
  padding: 5px 10px;
  position: relative;
}

tr:last-child td {
  border-bottom: 0px;
}

th:last-child,
td:last-child {
  border-right: 0px;
}

th:hover {
  background-color: #9bc8ff;
  cursor: default;
}

td:hover {
  background-color: #dddddd;
}

.finalActionsCol:hover {
  background-color: #9bc8ff;
}


/*td:last-child:hover{
  background-color:transparent;
}*/

.actionsCol:hover::after {
  height: 0px;
  width: 0px;
}

.actionsCol:hover {
  background-color: transparent;
}

th:hover::after {
  content: "";
  position: absolute;
  background-color: #e5f6ff;
  left: 0;
  top: -5000px;
  height: 10000px;
  width: 100%;
  z-index: -1;
}

.finalActionsCol:hover::after {
  content: "";
  position: absolute;
  background-color: #e5f6ff;
  top: 0px;
  left: -5000px;
  height: 100%;
  width: 10000px;
  z-index: -1;
}


/*Buttons*/

.fa {
  transition: 0.1s;
  cursor: pointer;
  padding: 0px 1px;
}

.fa-plus-circle {
  color: #008e02;
}

.fa-minus-circle {
  color: #d10000;
}

.fa-pencil-square-o,
.fa-floppy-o {
  color: #0073a8;
}

.fa:hover {
  transition: 0.1s;
  color: #404040;
}
</style>
<body>
  <form action="" method="POST">
  <div class="container">
    <table class="table" id="contenteditable">
    <tr>

<th id="firstnameCol" contenteditable="false">horas</th>
<th id="firstnameCol" contenteditable="false">Lunes</th>
<th id="lastnameCol" contenteditable="false">Martes</th>
<th id="ageCol" contenteditable="false">Miercoles</th>
<th id="genderCol" contenteditable="false">Jueves</th>
<th id="heightCol" contenteditable="false">Viernes</th>

</tr>

<tr>
<td contenteditable="false">4:00-5:00</td>
</tr>
<tr>
<td contenteditable="false">5:00-6:00</td>
</tr>
<tr>
<td contenteditable="false">6:00-7:00</td>
</tr>
<tr>
<td contenteditable="false">7:00-8:00</td>
</tr>
<td contenteditable="false">8:00-9:00</td>
</tr>
    </table>
  </div>
  </form>
  

  <script>
    $(document).ready(function() {

$("tr:first-child").append('<th class="actionsCol" contenteditable="false">Acciones</th>');
$("tr:not(:first-child)").append('</td><td></td><td></td><td></td><td></td><td></td><td class="finalActionsCol"><i class="fa fa-plus-circle" aria-hidden="true"></i> <i class="fa fa-minus-circle" aria-hidden="true"></i> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>');

$("table").on("click", ".fa-plus-circle", function() {
  $(this).closest('tr').after('<tr><td class="idRow" contenteditable="false">-</td><td contenteditable="false">-</td><td contenteditable="false">-</td><td contenteditable="false">-</td><td contenteditable="false">-</td><td contenteditable="false">-</td><td contenteditable="false">-</td><td class="finalActionsCol"><i class="fa fa-plus-circle" aria-hidden="true"></i> <i class="fa fa-minus-circle" aria-hidden="true"></i> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </td></tr>');
});

$("#addRow").on("click", function() {
  $("table").append('<tr><td class="idRow" contenteditable="false"></td><td contenteditable="false"></td><td contenteditable="false"></td><td contenteditable="false"></td><td contenteditable="false"></td><td contenteditable="false"></td><td class="finalActionsCol"><i class="fa fa-plus-circle" aria-hidden="true"></i> <i class="fa fa-minus-circle" aria-hidden="true"></i> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </td></tr>');
});

$("table").on("click", ".fa-minus-circle", function() {
  if (prompt("Estas seguro de eliminar la fila? Escribe 'si' para confirmar") == "si") {
    $(this).closest('tr').remove();
  } else {}
});

$("table").on("click", ".fa-pencil-square-o, .fa-floppy-o", function() {
  var thisRow = $(this).parent().siblings();
  var editOn = $(this).hasClass("editMode");

  $('td:last-child').attr('contenteditable', 'false');
  $('td:last-child').css('background-color', 'transparent');

  if (editOn == false) {
    $(thisRow).attr('contenteditable', 'true');
    $(thisRow).css('background-color', '#ffc9c9');
    $(this).removeClass("fa-pencil-square-o");
    $(this).addClass("fa-floppy-o editMode");
  } else if (editOn == true) {
    $(thisRow).attr('contenteditable', 'false');
    $(thisRow).css('background-color', 'transparent');
    $(this).removeClass("fa-floppy-o editMode");
    $(this).addClass("fa-pencil-square-o");
  }
});

$('th', this).dblclick(function() {
  $(this).attr("contenteditable", "true");
});
$('th', this).mouseout(function() {
  $(this).attr("contenteditable", "false");
});

});




</script>


</body>
</html>
</body>
</html>