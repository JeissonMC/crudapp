<?php 

  include_once('conexion.php');

  $datos = json_decode(file_get_contents('https://randomuser.me/api/?results=50'), true);
  $datos = $datos['results'];

  

  function retornar_Datos(){

    return (obtener_Datos());

  }

?>