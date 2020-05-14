<?php

require_once "../libs/DB.php";

class Modelo extends DB{

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
            $_SESSION['mensaje'] = $e->getMessage();
        } catch (Exception $e) {
            $_SESSION['mensaje'] = $e->getMessage();
        }
    }
}


// $experimento = new Modelo();
// $arr = array( 'nombre' => 'La esquina',
//                 'fecha_apertura' => '2009-05-14');
// $result = $experimento->insertar('tiendas', $arr);
// var_dump($result);