# pruebapracticaphp

Instalacion de la aplicacion.

Importación de la base de datos:

La BD se importa por medio del archivo pruebapracticaphp.sql en un sistema gestor de bases de datos, preferiblemente MySQL via PhpMyAdmin.
Para el proceso se debe crear primero una base de datos con el nombre 'pruebapracticaphp' y sobre esta Base de datos se realiza la importación.


Parametro de conexión a la base de datos:

En la ruta libs/DB.php se encuentra la clase que realiza la conexión con la base de datos, esta tiene como atributos los parametros requeridos para la conexión.
Los parametros son los siguientes:

private $hostname = 'localhost';
		private $database = 'pruebapracticaphp'; 
		private $username = 'root';
		private $password = 'mysql';
 		private $pdo; 
    
    El valor de estos parametros debe ser cambiado a los que corresponden al entorno en el que va a ser instalada la aplicación.
    
    Nota: Verificar que la carpeta imagenes tenga los permisos requeridos para poder alojar archivos en esta


