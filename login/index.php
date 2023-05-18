<?php
$server = "localHost";
$user = "root";
$pass = "";
$db = "xampp"
$conexion = new mysqli($server, $user,$pass,$db);
if($conexion->connect_errno) {
die("La conexion ha fallado" . $conexion->connect_errno;)
} else { echo "conectado"; }
?>