<?php
include ('conexion.php'); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    registrarUsuario($nombre , $contrasena, $telefono, $direccion, $correo, $conn);
}
?>
