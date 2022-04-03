<?php

    $msg ="";
    $directorio = "subidas/";

    
    $subir_archivo = $directorio . basename($_FILES['archivo']['name']);
    if (move_uploaded_file($_FILES['archivo']['tmp_name'], $subir_archivo)) {
        $msg .= "archivo guardado exitosamente";
    } else {
        $msg.= "no se pudo guardar";
    }
    //$nombre = $_FILES['archivo']['name'];
    $fp = fopen($subir_archivo,'r');
    $contents = fread($fp, filesize($subir_archivo));
    $data = array('content' => $contents);
    echo json_encode($data);
    

?>
