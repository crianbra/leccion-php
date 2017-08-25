<?php
  session_start();

?>
<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Editar</title>
</head>
<body>

<h1>Perfil</h1>

<?php
$id = $_GET["id"];
echo "valor de id es ". $id;
include_once("PersonaCollector.php");
include_once("Persona.php");
$PersonaCollectorObj = new PersonaCollector();
$ObjPersona = $PersonaCollectorObj->showPersona($id);
//print_r($ObjPersona);

?>

<form action="actualizar.php" method="post">
            <fieldset>
		<label>Identificacion</label>
		<input type="text" name="idpersona" value="<?php echo $ObjPersona->getIdPersona(); ?>" readonly /></br></br>
		<label>Nombre</label>
		<input type="text" name="nombre" value="<?php echo $ObjPersona->getNombre(); ?>" autofocus required /></br></br>
		<label>Tipo</label>
		<input type="text" name="tipo" value="<?php echo $ObjPersona->getTipo(); ?>" autofocus required /></br></br>
		<label>Fecha</label>
		<input type="date" name="fecha" step="1" min="1992-01-01" max="1992-12-31" value="<?php echo $ObjPersona->getFecha(); ?>" autofocus required /></br></br>
		<label>Foto</label>
		<input type="file" name="imagen" />
		</br></br>
                <button type="submit">Actualizar</button>
		</br></br>
                <a href='eliminar.php'>Eliminar</a>
        </fieldset>
	</form>

 

</body>
</html>