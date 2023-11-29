
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
    <title>Inicio de sesion</title>
</head>
<body class="login">
    <div class="login-box">
        
            <h1>Registro de usuario</h1>
            <img src="logo.ico" class="icono">
            <form class="form-item" action="registro.php" method="POST"><!--inicio de sesion-->

                <div>
                <input type="text" name="nombre" required="" placeholder="Usuario">
                </div>
                <p></p>
                <div>
                    <input type="email" name="email" required="" placeholder="Email">
                </div>
                <p></p>
                <div>
                <input type="password" name="contrau" required="" placeholder="Contraseña">
                <p></p>
                <input type="password" name="contrasena1" required="" placeholder="Confirmar contraseña">
                <div class="box-us">
                    <input class="btn btn-warning" type="submit" name="login" value="Registrarse">
              </div>
              <div>
              </div>
                </div>            
    
        </form>
        <form action="index.php" method="POST">
            <input class="btn btn-warning" type="submit" value="Inicio de sesion">
        </form>
            
    </div>
   
</body>
</html>
