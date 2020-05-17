<?php

require_once 'libs/autoload.php';

$tienda = new TiendasController();

if (isset($_POST['nombre']) && isset($_POST['fecha_apertura'])) {
    $datos = array( 
        'nombre' => $_POST['nombre'],
        'fecha_apertura' => $_POST['fecha_apertura']
    ); 

    $respuesta = $tienda->agregarTienda($datos); 
    
    if ($respuesta) {
        $mensaje = array('mensaje' => 'Éxito');
    }else {
        $mensaje = array('mensaje' => 'Error');
    }
    json_encode($mensaje);
}

