<?php

class Connection {

	public $host = "127.0.0.1";
	public $port = "80";
	public $db = "BD";
	public $user = "USU";
	public $pass = "CLA";
    
    function Con(){
        $conexion = new mysqli($this->host, $this->user, $this->pass,$this->db);
        
        return $conexion;
    }
}

?>
