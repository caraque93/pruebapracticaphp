<?php
require_once 'libs/autoload.php';



$producto = new ProductosController();

if (isset($_POST['nombreProd'])) {
    
    $validarImagen = $producto->validarImagen($_FILES['imagen']);
    
    $respuestaValidacion = json_decode($validarImagen, true);
    
    if($respuestaValidacion['codigo'] == 200){
        $datos =$datos = array(
            'nombre' => $_POST['nombreProd'],
            'descripcion' => $_POST['descripcionProd'],
            'valor' => $_POST['valorProd'],
            'id_tienda' => $_POST['id_tienda'],
            'imagen_file' => $_FILES['imagen']
            );

            

        $agregar = $producto->agregarProducto($datos);
        
        if ($agregar) {
            echo json_encode( array('mensaje' => 'Éxito'));
        }else {
            echo json_encode(array('mensaje' => 'error'));
        }

        
    }

}   