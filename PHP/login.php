<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');
session_start();

require_once 'conexion.php';

$input = json_decode(file_get_contents("php://input"), true);
$email = $input['email'] ?? '';
$password = $input['password'] ?? '';

if (!$email || !$password) {
    echo json_encode(['success' => false, 'message' => 'Datos incompletos']);
    exit;
}

$stmt = $conexion->prepare("SELECT id, nombre, password, rol FROM usuarios WHERE email = ? AND estado = 'activo'");
$stmt->bind_param("s", $email);
$stmt->execute();
$resultado = $stmt->get_result();

if ($row = $resultado->fetch_assoc()) {
    if (password_verify($password, $row['password'])) {
        $_SESSION['usuario'] = [
            'id' => $row['id'],
            'nombre' => $row['nombre'],
            'email' => $email,
            'rol' => $row['rol']
        ];
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Contraseña incorrecta']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Usuario no encontrado o inactivo']);
}

$conexion->close();
