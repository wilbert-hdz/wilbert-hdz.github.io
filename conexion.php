<?php
$servername = "localhost";  // Si usas XAMPP, el host suele ser 'localhost'
$username = "root";         // Nombre de usuario de MySQL (por defecto es 'root' en XAMPP)
$password = "";             // La contraseña (en XAMPP no suele haber, así que está vacía)
$dbname = "nombre_de_tu_base_de_datos";  // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
