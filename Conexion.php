<?PHP
$servidor="localhost";
$basedatos="BD";
$usuario="USU";
$clave="CLA";
$conexion = mysqli_connect($servidor, $usuario, $clave, $basedatos);
if (!$conexion)
{ echo "<h2>Error al establecer conexión con el servidor!!!</h2>"; exit; }			      
?>
         
