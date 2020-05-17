<?php
require_once 'libs/autoload.php';
if(isset($_GET['idTienda'])){
    $idTienda = $_GET['idTienda'];
    $producto = new ProductosController();
    
    $listProd = $producto->mostrarProductos($idTienda);
    $prodArr = array();
    
    if (!empty($listProd)) {
        foreach ($listProd as $r) {
    
            $prodArr[] = array( 
                'nombre' => $r['nombre'],
                'descripcion' => $r['descripcion'],
                'valor' => $r['valor'],
                'imagen' => $r['imagen']
            );
        }
        echo json_encode($prodArr);
    }
}







