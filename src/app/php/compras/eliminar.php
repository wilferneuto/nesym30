<?php
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: Origin, X-Requested-with, Content-Type, Accept");

     require("../conexion.php");

     $del ="DELETE FROM compras WHERE id_compras = ".$_GET['id'];
     mysqli_query($conexion,$del) or die('no elimino');

    Class Result {}

    $response = new result();
    $response -> resultado ="Ok";
    $response -> mensajes= "compras borrado ";

    header ('Content-Type: application/json');
    echo json_encode ($response);
    
?>