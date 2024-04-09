<?php
     $servidor = "localhost";
     $usuario = "root";
     $clave= "";
     $bd = "mantenimiento"; // Agregamos el punto y coma aquí

     $conexion = mysqli_connect($servidor,$usuario,$clave) or die ("no se pudo conectar a mysql"); 
     mysqli_select_db($conexion, $bd) or die ("no encontro la base de datos"); 
?>