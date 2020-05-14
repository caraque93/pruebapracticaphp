<?php 

	class DB extends PDO{

		private $hostname = 'localhost';
		private $database = 'pruebapracticaphp'; 
		private $username = 'root';
		private $password = 'mysql';
 		private $pdo; 
		 


		public function __construct()
		{
			$dsn = 'mysql:dbname='.$this->database.';host='.$this->hostname;
			parent::__construct($dsn,$this->username,$this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		}



	}

