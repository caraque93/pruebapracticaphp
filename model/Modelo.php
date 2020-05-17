<?php

//require_once "../libs/DB.php";

class Modelo extends DB {

    public $db;

    function __construct(){
        $this->db = new DB();
    }

    public function insertar($tabla, $datos) {
        try {
            $llaves = array_keys($datos);
            $sql = "INSERT INTO ".$tabla." (".implode(", ", $llaves).") \n";
            $sql .= "VALUES ( :".implode(", :",$llaves).")";
            $q = $this->db->prepare($sql)->execute($datos);
            
            return $q;
        } catch (PDOException $e) {
            $mensaje = $e->getMessage();
        } catch (Exception $e) {
            $mensaje = $e->getMessage();
        }
    }
    public function consultarRegistro($query){
        $resultado = $this->db->query($query);
        if ($resultado->rowCount() == 1) {
            return $resultado;
        }else{
            return false;
        }
    }
    public function obtenerTodos($query){
        try{
            $resultado = $this->db->query($query);
            return $resultado;	
        }catch(PDOException $e) {
            $mensaje = $e->getMessage();
        }	
    }

    public function eliminarRegistro($tabla,$idTienda){
        try{
            $sql = "DELETE FROM ".$tabla." WHERE id = :id" ;
            $resultado = $this->db->prepare($sql)->execute($idTienda);
            return $resultado;	
        }catch(PDOException $e) {
            $mensaje = $e->getMessage();
        }	
    }
}


//  $experimento = new Modelo();

//  $result = $experimento->obtenerTodos("SELECT * FROM tiendas");

//  foreach ($result as $r) {
//      echo "<pre>";
//      var_dump($r);
//      echo "</pre>";
//  }
// $arr = array( 'nombre' => 'La esquina',
//                 'fecha_apertura' => '2009-05-14');
// $result = $experimento->insertar('tiendas', $arr);
// var_dump($result);