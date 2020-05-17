<?php

require_once 'libs/autoload.php';
$tienda = new TiendasController();
$tabla = $tienda->mostrarTiendas();

$tiendasArr = array();

if(isset($tabla)){

    foreach ($tabla as $r) {
        $tiendasArr[] = array( 
            'id' => $r['id'],
            'nombre' => $r['nombre'],
            'fecha_apertura' => date('d-m-Y', strtotime($r['fecha_apertura']))
        );
    }

    echo json_encode($tiendasArr);
}
