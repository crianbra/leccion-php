<html>
<head>
</head>
<body>

<div id="main">

<?php
$nombre = $_POST["nombre"];
$tipo = $_POST["tipo"];
$fecha = $_POST["fecha"];
$ruta="imagenes";
$foto=$_FILES['imagen']['tmp_name'];
$nombreFoto=$_FILES['imagen']['name'];

move_uploaded_file($foto, $ruta."/".$nombreFoto);
$ruta=$ruta."/".$nombreFoto;

echo 'Hola ' .htmlspecialchars($nombre) . '!';
include_once("PersonaCollector.php");

$PersonaCollectorObj = new PersonaCollector();
$ObjPersona = $PersonaCollectorObj->createPersona($nombre, $tipo, $fecha);

echo "Se ha guardado correctamente </br>";
echo "<br><img src='$ruta'>";

?>

<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
