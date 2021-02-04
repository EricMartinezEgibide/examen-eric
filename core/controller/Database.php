<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b723af405e3e6f";$this->pass="60ad1590";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_bd51107080853e9";
		//Copiar también la información de la conexión en la función de abajo connect()
	}

	function connect(){
		//Copiar aquí también la info de la conexión
		$this->user="b723af405e3e6f";$this->pass="60ad1590";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_bd51107080853e9";
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
