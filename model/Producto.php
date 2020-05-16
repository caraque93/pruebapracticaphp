<?php

class Producto {

    private $objdb;
    public function __construct() {
        $this->objdb = new Modelo();
    }
    
    public function guardarProducto($datos){
        try {
            $insertar = $this->objdb->insertar('productos',$datos);
            return $insertar;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    

    public function mostrarProductos($id_tienda){
        $query = "SELECT nombre, descripcion, valor, imagen FROM productos WHERE id_tienda = '". $id_tienda."'";
        $respuesta = $this->objdb->obtenerTodos($query);
        return $respuesta;    
    }

    public function validarTienda($id_tienda){
        $query = "SELECT * FROM tiendas WHERE id = '".$id_tienda."'";
        $respuesta = $this->objdb->consultarRegistro($query);

        if ($respuesta != false) {
            return true;
        }else{
            return false;
        }
        
        
    }
}