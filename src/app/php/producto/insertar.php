?>

<?php
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept");

  //$json = file_get_contents ('php ://input');

  //$params = json_decode($json);

   require("../conexion.php");

    $ins = " insert into producto  (nombre , fo_proveedor, fo_marca ) values ( 'prueba' ,  'prueba' ,'invitado')";
  //$ins = " insert into producto ( nombre,fo_proveedor, fo_marca ) values  ( '$params->nombre ','$params->fo_proveedor ','$params->fo_marca ' ) ";

   mysqli_query($conexion,$ins) or die('no inserto');


   class Result {}

   $response = new result();
   $response -> resultado ="Ok";
   $response -> mensajes= "producto grabados ";

   header ('Content-Type: application/json');
   echo json_encode ($response);

?>