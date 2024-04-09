<?php
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept");

  //$json = file_get_contents ('php ://input');

  //$params = json_decode($json);

   require("../conexion.php");

    $ins = " insert into compras(nombre , cantidad ,total ,fo_cliente,fo_producto,fo_fecha ) values ( 'prueba' ,  'prueba' ,'prueba' ,  'prueba', 'prueba' , 'invitado')";
  //$ins = " insert into compras( nombre , cantidad ,total ,fo_cliente , fo_producto,fo_fecha ) values  ( '$params->nombre ', '$params->cantidad', '$params->total' ,'$params->fo_cliente', '$params->fo_producto' ,'$params->fo_fecha' ) ";

   mysqli_query($conexion,$ins) or die('no inserto');


   class Result {}

   $response = new result();
   $response -> resultado ="Ok";
   $response -> mensajes= "compras grabados ";

   header ('Content-Type: application/json');
   echo json_encode ($response);


?>