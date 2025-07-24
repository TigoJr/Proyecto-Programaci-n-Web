<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

require_once 'conexion.php'; //Usamos archivo externo de conexión

$input = json_decode(file_get_contents("php://input"), true);
$nombre = $input['nombre'] ?? '';
$email = $input['email'] ?? '';
$password = $input['password'] ?? '';

if (!$nombre || !$email || !$password) {
    echo json_encode(['success' => false, 'message' => 'Datos incompletos']);
    exit;
}

$stmt = $conexion->prepare("SELECT id FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo json_encode(['success' => false, 'message' => 'El correo ya está registrado']);
    exit;
}

$hashed = password_hash($password, PASSWORD_BCRYPT);

$stmt = $conexion->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nombre, $email, $hashed);
$exito = $stmt->execute();

if ($exito) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Error al registrar usuario']);
}

$conexion->close();
