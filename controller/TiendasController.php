<?php
class TiendasController {

    private $tiendasModel;

    public function __construct() {
        $this->tiendasModel = new Tiendas();
    }

    public function tiendas(){
        require_once './view/includes/header.php';
        require_once './view/paginas/tiendas.php';
    }

    public function agregarTienda($datos){
               
        if (!empty($datos['nombre']) && !empty($datos['fecha_apertura'])) {
            $insercion = $this->tiendasModel->agregarTienda($datos) ? 'Exito' : 'Fallo';
            return $insercion;
            
        }
    }

    public function mostrarTiendas(){
        $respuesta = $this->tiendasModel->traerTiendas();
        return $respuesta;
    }

    public function eliminarTienda($idTienda){
        $respuesta = $this->tiendasModel->eliminarTienda($idTienda);
    }
}


    


