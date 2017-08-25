<?php
  session_start();
?>

<!doctype html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
</head>

<body>
	

<?php
	if(isset($_SESSION['MiSesion'])){
	echo "<p> Hola usuario:(" . $_SESSION['MiSesion']. ")
			[<a href='salir.php'>Salir</a>]";
	echo "(" . $_SESSION['MiSesion']. ")
			[<a href='insertar.php'>Nuevo</a>]";
	
	include_once("PersonaCollector.php");

$id =1;

$PersonaCollectorObj = new PersonaCollector();

foreach ($PersonaCollectorObj->showPersonas() as $c){
  echo "<div>";
  echo $c->getIdPersona() . " & " .$c->getNombre() . " & "  .$c->getTipo();
  echo "<a href='perfil.php?id=".$c->getIdPersona()."'> Perfil </a>";
  //echo "<a href='eliminar.php?id=".$c->getIdPersona()."'>Eliminar</a>";                                     
  echo "</div>"; 
}


	}else{
?>

	<form action="login.php" method="post">
            <fieldset>
		<label>Usuario</label>
		<input type="text" name = "Usuario"/></br></br>
        <label>Clave</label>
		<input type="text" name = "Clave"/></br>
		</br>
                <button type="submit">Ingresar</button>
        </fieldset>
	</form> 

<?php } ?>  

</body>
</html>
