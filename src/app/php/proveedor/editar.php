<?php
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept");

  //$json = file_get_contents ('php ://input');

  //$params = json_decode($json);

   require("../conexion.php");

  //$editar = " UPDATE proveedor SET nombre = '$params->nombre ', direccion= '$params->direccion',  celular = '$params->celular' , email= '$params->email',  celular = '$params->celular' ,  fo_proveedor = '$params->fo_proveedor'WHERE id_proveedor =$params->id_proveedor";
  //mysqli_query($conexion , $editar) or die('no edito');


   class Result {}

   $response = new result();
   $response -> resultado ="Ok";
   $response -> mensajes= "datos modificados ";

   header ('Content-Type: application/json');
   echo json_encode ($response);


?>