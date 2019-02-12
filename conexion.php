<?PHP
   $servidor="localhost";
   $bd="tienda";
   $usuario="adrian";
   $clave="12345";
   $conexion = mysqli_connect($servidor, $usuario, $clave, $bd);
      if (!$conexion)
           { echo "<h2>Error al establecer conexión con el servidor!!!</h2>"; exit; }
			      
?>
         