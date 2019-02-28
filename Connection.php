<?php

class Conexion {

	public $host = "127.0.0.1";
	public $port = "80";
	public $db = "DB";
	public $user = "USU";
	public $pass = "CLA";
    
    function Con(){
        $conexion1 = new mysqli($this->host, $this->user, $this->pass,$this->db);
        
        return $conexion1;
    }
}

?>
