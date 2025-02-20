<?php
$servidor = "localhost";
$usuario = "root"; // Ajusta según tu configuración
$clave = ""; // Si tienes contraseña en MySQL, agrégala aquí
$base_datos = "registro_db";

$conn = new mysqli($servidor, $usuario, $clave, $base_datos);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
