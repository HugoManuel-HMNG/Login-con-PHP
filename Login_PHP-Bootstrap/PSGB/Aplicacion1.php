<?php include 'main/conecta.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js\jquery-3.5.1.min.js"></script>
    <title>Inicio Sesion</title>
  </head>
  <body>
    <div class="container">
      <h3 class="text-center py-4"> Inicio de Sesión</h3>
      <div class="card">
        <p class="text-center text-muted py-3"> Por favor ingresa tu Usuario y Contraseña</p> <hr>
        <div class="container">
          <form class="form-group" action="main/login.php" method="post">
            <input type="text" name="form-control" name="usuario" placeholder="Usuario" required>
             <br>
            <input type="password" class="form-control" name="password" id="pass" placeholder="Contraseña" required>
            <br>
            <div class="col">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="ver" onclick="verpass(this);">
                 <label class="custom-control-label" for="ver">Ver contraseña</label>
              </div>
            </div>
            <input type="submit" name="Inicio" value="Inicio" class=" btn btn-success btn-sm btn-block">
          </form>
        </div>
      </div>
    </div>
    <div class="container">
      <p class="text-center"> @desarrollo Airam y Hugo 505</p>
    </div>
    <script type="text/javascript">
    function verpass(cb){
      if(cb.checked)
      $('#pass').attr("type", "text");
      else
        $('#pass').attr("type", "password");
      }
    </script>
    <script src="js/bootstrap.main.js"> </script>
  </body>
</html>
