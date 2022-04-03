<?php

include 'conexion1.php';




$datos = array();
$mediciones = array();

foreach($conexion->query("SELECT * FROM medicion",PDO::FETCH_ASSOC) as $row){
    $datos[] = $row["medicion"];
}



echo json_encode(array('mediciones' => $datos));
?>