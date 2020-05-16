<?php

class ProductosController{

    private $db;

    public function __construct() {
        $this->db = new Producto();
    }

    public function productos(){
        
        require_once './view/includes/header.php';
        require_once './view/paginas/productos.php';
        
    }


    public function validarImagen($imagen){
		$directorio = 'imagenes/';
		$archivo = $directorio.basename($imagen['name']);
		$tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

		$validar = getimagesize($imagen['tmp_name']);

		if ($validar !== false) {
			$respuesta['mensaje'] = "Achivo válido";
			$respuesta['codigo'] = 200;

			if ($imagen['size'] > 500000) {
				$respuesta['mensaje'] = "Tamaño de archivo es muy grande";
				$respuesta['codigo'] = 400;

			}

			if ($tipoArchivo != 'jpg' && $tipoArchivo != 'jpeg' && $tipoArchivo != 'png') {
				$respuesta['mensaje'] = "Formato de archivo inválido";
				$respuesta['codigo'] = 400;
			}

			if (file_exists($archivo)) {
				$respuesta['mensaje'] = "El archivo ya existe";
				$respuesta['codigo'] = 400;
			}
		}else{
			$respuesta['mensaje'] = "Archivo no es imagen";
			$respuesta['codigo'] = 400;
		}

		return json_encode($respuesta, JSON_PRETTY_PRINT);
    }
    
    public function agregarProducto($datos){
		$imagen = $datos['imagen_file'];
		$directorio = 'imagenes/';
		$archivo = $directorio.basename($imagen['name']);
		$datos['imagen'] = $imagen['name'];
        unset($datos['imagen_file']);
		if(move_uploaded_file($imagen['tmp_name'],$archivo)){	
			return $this->db->guardarProducto($datos);
		}
    }
    
    public function mostrarProductos($id_tienda){

        if ($this->validarTienda($id_tienda)) {
            $respuesta = $this->db->mostrarProductos($id_tienda);
    
            if ($respuesta != false) {
                return $respuesta;
            }
        }else{
            header('Location: index.php?page=tiendas');
            die();
        }
        
    }

    private function validarTienda($id_tienda){
        return $validar = $this->db->validarTienda($id_tienda); 
    }
    
}
