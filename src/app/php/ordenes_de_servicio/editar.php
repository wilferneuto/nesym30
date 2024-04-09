<?php
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept");

 // $json = file_get_contents('php://input');
 // $params = json_decode($json);

  require("../conexion.php");

  //$editar = "UPDATE ordenes_de_servicio SET nombre = '$params->nombre', cantidad = '$params->cantidad', total = '$params->total', fo_cliente = '$params->fo_cliente' WHERE id_ordenes_de_servicio = $params->id_ordenes_de_servicio";
  //mysqli_query($conexion, $editar) or die('no edito');

  class Result {}

  $response = new Result();
  $response->resultado = "Ok";
  $response->mensajes = "datos modificados";

  header('Content-Type: application/json');
  echo json_encode($response);
?>