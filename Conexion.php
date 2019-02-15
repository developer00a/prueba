<?PHP
$servidor="localhost";
$bd="";
$usuario="";
$clave="";
$conexion = mysqli_connect($servidor, $usuario, $clave, $bd);
if (!$conexion)
{ echo "<h2>Error al establecer conexión con el servidor!!!</h2>"; exit; }			      
?>
         
