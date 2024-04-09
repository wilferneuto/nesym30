<?php
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept");

     require("../conexion.php");

     $del ="DELETE FROM ordenes_de_servicio WHERE id_ordenes_de_servcicio = ".$_GET['id'];
     mysqli_query($conexion,$del) or die('no elimino');

    Class Result {}

    $response = new result();
    $response -> resultado ="Ok";
    $response -> mensajes= "ordenes_de_servicio borrado ";

    header ('Content-Type: application/json');
    echo json_encode ($response);
    
?>