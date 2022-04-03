<?php


try {
    $conexion = new PDO("mysql:host=localhost;dbname=dbpozos","root","");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "La conexión ha fallado ". $e->getMessage;
}



?>