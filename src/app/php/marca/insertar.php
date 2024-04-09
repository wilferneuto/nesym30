?>

<?php
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept");

  //$json = file_get_contents ('php ://input');

  //$params = json_decode($json);

   require("../conexion.php");

  $ins = " insert into marca  (nombre ) values ( 'invitado')";
  //$ins = " insert into marca ( nombre ) values  ( '$params->nombre ') ";

   mysqli_query($conexion,$ins) or die('no inserto');


   class Result {}

   $response = new result();
   $response -> resultado ="Ok";
   $response -> mensajes= "marca grabados ";

   header ('Content-Type: application/json');
   echo json_encode ($response);


?>