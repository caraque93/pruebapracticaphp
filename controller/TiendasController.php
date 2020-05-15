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

    private function validarFecha($fecha){
        $regex = " /^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})$/ ";

        $respuesta = preg_match($regex,$fecha) ? true : false;
        // if(preg_match($regex,$fecha)){
        //     return true
        // }else 

        return $respuesta;
    }
}

function validarFecha($fecha){
    $regex = " /^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\(\d{4})$/ ";

    //$respuesta = preg_match($regex,$fecha) ? true : false;
    if(preg_match($regex,$fecha)){
        return true;
    }else {return false;}

    
}

