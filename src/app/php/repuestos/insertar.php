<?php
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept");

  //$json = file_get_contents ('php ://input');

  //$params = json_decode($json);

   require("../conexion.php");

  $ins = " insert into repuestos (nombre , cantidad ,total ,fo_cliente ) values ( 'prueba' ,  'prueba' , sha1 ('123456' ),'invitado')";
  //$ins = " insert into repuestos ( nombre , cantidad ,total ,fo_cliente ) values  ( '$params->nombre ', '$params->cantidad', '$params->total' ,'$params->fo_cliente' ) ";

   mysqli_query($conexion,$ins) or die('no inserto');


   class Result {}

   $response = new result();
   $response -> resultado ="Ok";
   $response -> mensajes= "datos grabados ";

   header ('Content-Type: application/json');
   echo json_encode ($response);


?>