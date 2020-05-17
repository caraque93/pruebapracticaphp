<?php

require_once 'libs/autoload.php';

$tiendas= new TiendasController();

if(isset($_POST['id_tienda'])){
    $eliminar = $tiendas->eliminarTienda($_POST['id_tenda']);

    if ($eliminar) {
        echo json_encode(array('mensaje' => 'Eliminación exitosa'));
    }else {
        echo json_encode(array('mensaje' => 'Error'));

    }
}