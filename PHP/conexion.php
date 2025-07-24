<?php
$host = "localhost";
$puerto = 3307;
$usuario = "root";
$clave = "";
$basedatos = "recipepad_db";

$conexion = new mysqli($host, $usuario, $clave, $basedatos, $puerto);

if ($conexion->connect_error) {
    die(json_encode([
        'success' => false,
        'message' => 'Error de conexión: ' . $conexion->connect_error
    ]));
}