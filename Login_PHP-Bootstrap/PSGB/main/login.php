<?php
//creamos una variable de sesion
session_start();
include 'conecta.php';
$usuario = $conecta->real_escape_string($_POST[ 'usuario']);
$password = $conecta->real_escape_string(md5($_POST[ 'contraseña']));
//consulta para extraer los datos de l abase de datos de el alumnos
$consulta = "SELECT * FROM Alumnos WHERE Usuario ='$usuario' and Contraseña ='$pass'";
if($resultado = $conecta->query($consulta)){
  while($row = $resultado->fetch_array()){
    $userok = $row [ 'Usuario'];
    $contraseñadok = $row ['Contraseña'];
  }
  $resultado->close();
}
$conecta->close();
if(isset($usuario)&& isset($password)){
  if ($usuario == $userok && $password == $contraseñadok){
    $_SESSION ['login']= TRUE;
    $_SESSION['Usuario']=$usuario;
    header("location:../principal.php");
  }
  else {
    header("location:..Aplicacion1.php");
  }
}
else {
  header("location:../Aplicacion1");
}
 ?>
