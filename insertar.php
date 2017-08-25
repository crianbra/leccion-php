<?php
  session_start();

?>
<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Insertar</title>
</head>
<body>

<h1>Insertar Persona</h1>


<form action="guardarPersona.php" method="post">
            <fieldset>
		<label>Nombre</label>
		<input type="text" name="nombre" autofocus required /></br>
		</br>
		<label>Tipo</label>
		<input type="text" name="tipo" autofocus required /></br>
		</br>
		<label>Fecha de Nacimiento</label>
		<input type="date" name="fecha" step="1" min="1992-01-01" max="1992-12-31" >
		</br>
		<label>Foto</label>
		<input type="file" name="imagen" />
		</br></br>

                <button type="submit">Guardar</button>
        </fieldset>
	</form>

 

</body>
</html>
