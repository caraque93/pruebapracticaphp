<?php

class Tiendas {

    private $objdb;
    public function __construct() {
        $this->objdb = new Modelo();
    }
    
    public function agregarTienda($datos){
        try {
            $insertar = $this->objdb->insertar('tiendas',$datos);
            return $insertar;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function traerTiendas(){
        $query = "SELECT * FROM tiendas";
        $respuestas = $this->objdb->obtenerTodos($query);

        return $respuestas;
    }

    public function eliminarTienda($idTienda){
        $query = "DELETE FROM tiendas WHERE id = '".$idTienda."'";
        $respuesta = $this->objdb->eliminarRegistro('tiendas',$idTienda);
    }
}
