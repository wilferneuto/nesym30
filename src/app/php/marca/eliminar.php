<?php
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept");

     require("../conexion.php");

     $del ="DELETE FROM marca WHERE id_marca = ".$_GET['id'];
     mysqli_query($conexion,$del) or die('no elimino');

    Class Result {}

    $response = new result();
    $response -> resultado ="Ok";
    $response -> mensajes= "marca borrado ";

    header ('Content-Type: application/json');
    echo json_encode ($response);
    
?>