<?php
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept");

  //$json = file_get_contents ('php ://input');

  //$params = json_decode($json);

   require("../conexion.php");

  // $editar = " UPDATE usuario SET nombre = '$params->nombre ', usuario = '$params->usuario', clave = sha1 ('$params->clave') , tipo= '$params->tipo'WHERE id_cliente =$params->id_cliente";
   mysqli_query($conexion , $editar) or die('no edito');


   class Result {}

   $response = new result();
   $response -> resultado ="Ok";
   $response -> mensajes= "cliente modificados ";

   header ('Content-Type: application/json');
   echo json_encode ($response);


?>