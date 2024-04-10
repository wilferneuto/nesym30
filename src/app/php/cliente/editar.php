<?php
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept");

  //$json = file_get_contents ('php ://input');

  //$params = json_decode($json);

   require("../conexion.php");

  // $editar = " UPDATE cliente SET nombre = '$params->nombre ', area = '$params->area', telefono= '$params->telefono'WHERE compras = $params->compras";
   //mysqli_query($conexion , $editar) or die('no edito');


   class Result {}

   $response = new result();
   $response -> resultado ="Ok";
   $response -> mensajes= "compras modificados ";

   header ('Content-Type: application/json');
   echo json_encode ($response);


?>