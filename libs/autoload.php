<?php 

spl_autoload_register('autoLoad');

function autoLoad($class){

	$nombreArchivo = $class.'.php';
	$carpetas  = array('./controller','./model','./libs');

	foreach ($carpetas as $carpeta) {
		$archivos = scandir($carpeta);
		foreach ($archivos as $archivo) {
			if($archivo == '.' || $archivo == '..'  ){
				continue;
			}
			$rutaArchivo = $carpeta.DIRECTORY_SEPARATOR.$archivo;
			//$NrutaArchivo = substr($rutaArchivo, 2);

			if ($archivo == $nombreArchivo) {
				require_once $rutaArchivo;
			}

		}

	}
}


	

 ?>
