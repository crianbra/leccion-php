<?php

include_once('Persona.php');
include_once('Collector.php');

class PersonaCollector extends Collector
{
  
  function showPersonas() {
    $rows = self::$db->getRows("SELECT * FROM persona ");        
    
    $arrayPersona= array();        
    foreach ($rows as $c){
      $aux = new Persona($c{'idpersona'},$c{'nombre'}, $c{'tipo'}, $c{'fecha'});
      array_push($arrayPersona, $aux);
    }
    return $arrayPersona;        
  }

  function showPersona($id){
    $row = self::$db->getRows("SELECT * FROM persona where idpersona= ? ", array("{$id}"));

    $ObjPersona = new Persona($row[0]{'idpersona'},$row[0]{'nombre'}, $row[0]{'tipo'}, $row[0]{'fecha'});
    return $ObjPersona;

}


function updatePersona($id,$nombre, $tipo, $fecha){
	$insertrow = self::$db->updateRow("UPDATE public.persona SET nombre= ? , tipo= ? , fecha= ? WHERE idpersona= ?", array("{$nombre}", "{$tipo}", "{$fecha}" , $id));

}

function deletePersona($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.persona WHERE idpersona= ?", array("{$id}"));

}

function createPersona($nombre, $tipo, $fecha){
	$insertarrow = self::$db->insertRow("INSERT INTO public.persona (nombre,tipo,fecha) VALUES (?,?,?)", array ("{$nombre}", "{$tipo}", "{$fecha}"));

}

}
?>

