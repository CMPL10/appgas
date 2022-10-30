<?php
function jsonFileToArray($archivo){

    /* Comprobar si existe el archivo */
    if(!is_file($archivo)) return false;

    /* Cargar el contenido del archivo */
    $contenido = file_get_contents($archivo);
    if($contenido === false) return false;

    /* Convertir el contenido a un array */
    $datos = json_decode($contenido, true);
    if(is_null($datos)) return false;

    return $datos;

}

$datos = jsonFileToArray("prices.json");
print("<pre>".print_r($datos, true)."</pre>");