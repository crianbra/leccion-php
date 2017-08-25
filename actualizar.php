<?php
session_start();
?>

<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Actualizar</title>
</head>
<body>

<div id="main">

<?php
$nombre = $_POST["nombre"];
$idpersona= $_POST["idpersona"];
$tipo = $_POST["tipo"];
$fecha = $_POST["fecha"];
$ruta="imagenes";
$foto=$_FILES['imagen']['tmp_name'];
$nombreFoto=$_FILES['imagen']['name'];

move_uploaded_file($foto, $ruta."/".$nombreFoto);
$ruta=$ruta."/".$nombreFoto;

echo "Edicion en proceso..... </br>";

include_once("PersonaCollector.php");
$PersonaCollectorObj = new PersonaCollector();
$PersonaCollectorObj->updatePersona($idpersona, $nombre, $tipo, $fecha);



echo "id:".$idpersona." actualizando a:".$nombre. " ".$tipo." </br>";
echo "<br><img src='$ruta'>";
?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>

</body>
</html>
