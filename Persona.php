<?php

class Persona
{
    private $idPersona;
    private $nombre;
    private $tipo;
    private $fecha;
    private $foto;
    
     function __construct($idPersona, $nombre, $tipo, $fecha) {
       $this->idPersona = $idPersona;
       $this->nombre = $nombre;
       $this->tipo = $tipo;
     }
    
     function setIdPersona($idPersona){
       $this->idPersona = $idPersona;
     } 
     function getIdPersona(){
       return $this->idPersona;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
     function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     }
     function setFecha($fecha){
       $this->fecha = $fecha;
     } 
     function getFecha(){
       return $this->fecha;
     } 
     function setFoto($foto){
       $this->foto = $foto;
     } 
     function getFoto(){
       return $this->foto;
     } 


}

?> 
