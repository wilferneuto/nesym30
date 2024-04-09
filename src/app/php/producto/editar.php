<?php
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept");

  //$json = file_get_contents ('php ://input');

  //$params = json_decode($json);

   require("../conexion.php");

 // $editar = " UPDATE producto SET nombre = '$params->nombre ', fo_proveedor= '$params->fo_proveedor',  fo_marca = '$params->fo_marca' WHERE id_producto =$params->id_producto";
   mysqli_query($conexion , $editar) or die('no edito');


   class Result {}

   $response = new result();
   $response -> resultado ="Ok";
   $response -> mensajes= "datos modificados ";

   header ('Content-Type: application/json');
   echo json_encode ($response);


?>