<?php

  session_start();

$_SESSION ['MiSesion']= $_POST ['Usuario'];

$usuario = $_POST['Usuario'];
$clave = $_POST['Clave'];

echo "Su usuario " . $usuario . " y su clave es ". $clave;

echo "<br /><a href = 'index.php'> Cerrar Sesión </a>"


?>



