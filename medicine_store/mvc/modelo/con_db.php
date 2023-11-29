<?php
// Archivo de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "medicine_store";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Función para iniciar sesión
function iniciarSesion($correo, $contrasena, $conn) {
    $query = "SELECT * FROM usuario WHERE CORREO='$correo' AND CONTRASEÑA='$contrasena'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Inicio de sesión exitoso
        session_start();
        $_SESSION['correo'] = $correo;

        // Obtener el rol del usuario desde la base de datos
        $rol = $row['ID_ROLES'];

        // Redirigir según el rol
        switch ($rol) {
            case '1':
                header("Location: dashboard.php"); 
                break;
            case '2':
                header("Location: dashboard_usuario.php");
                break;
            case '3':
                header("Location: inicio_c.php");
                break;    
            default:
                // Rol no reconocido
                echo "Rol no reconocido";
                break;
        }

        exit();
    } else {
        // Inicio de sesión fallido
        echo "Usuario o contraseña incorrectos";
    }
}


// Función para registrar un nuevo usuario
function registrarUsuario($nombre , $contrasena, $telefono, $direccion, $correo, $conn) {
    $query = "INSERT INTO usuario (NOMBRE, TELEFONO, DIRECCION, EMAIL, CONTRASEÑA) VALUES ('$nombre', '$telefono', '$direccion','$correo', '$contrasena')";
    if ($conn->query($query) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }
}

// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    iniciarSesion($usuario, $contrasena, $conn);
}

// Verificar si se ha enviado el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    registrarUsuario($nombre , $contrasena, $telefono, $direccion, $correo, $conn);
}
?>
