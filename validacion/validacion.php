<?php
session_start();

$nombre = $_POST['user'];
$password = $_POST['password'];


$conexion= mysqli_connect("localhost", "root", "", "th_reclutamiento");


$consulta = "SELECT * FROM usuario WHERE usuario = '$nombre' AND pass = '$password'";
$resultado = mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado0);
if ($filas>0) {
    header("bienvenido .html");

}else {
 echo "error ";
}
mysqli_free_result($resultado);
mysqli_close($conexion);

