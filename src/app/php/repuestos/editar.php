<?php
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept");

  //$json = file_get_contents ('php ://input');

  //$params = json_decode($json);

   require("../conexion.php");

  // $editar = " UPDATE repuesto SET nombre = '$params->nombre ', cantidad = '$params->cantidad',  total= '$params->total , fo_cliente= '$params->fo_cliente' WHERE id_repuestos =$params->id_repuestos";
   mysqli_query($conexion , $editar) or die('no edito');


   class Result {}

   $response = new result();
   $response -> resultado ="Ok";
   $response -> mensajes= "datos modificados ";

   header ('Content-Type: application/json');
   echo json_encode ($response);


?>