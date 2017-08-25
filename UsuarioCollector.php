<?php

include_once('Usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
  
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT * FROM usuario ");        
    
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'nombre'}, $c{'clave'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }

  function showUsuario($id){
    $row = self::$db->getRows("SELECT * FROM usuario where idusuario= ? ", array("{$id}"));

    $ObjUsuario = new Usuario($row[0]{'idusuario'},$row[0]{'nombre'}, $row[0]{'clave'});
    return $ObjUsuario;

}


function updateUsuario($id,$nombre, $clave){
	$insertrow = self::$db->updateRow("UPDATE public.usuario SET nombre= ? , clave= ? WHERE idusuario= ?", array("{$nombre}", "{$clave}", $id));

}

function deleteUsuario($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.usuario WHERE idusuario= ?", array("{$id}"));

}

function createUsuario($nombre, $clave){
	$insertarrow = self::$db->insertRow("INSERT INTO public.usuario (nombre,clave) VALUES (?,?);", array ("{$nombre}", "{$clave}"));
	

}

}
?>

