<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';  // Esto se refiere al archivo 'conexion.php' que crearemos a continuación

// Recoger los datos del formulario
$nombre = $_POST['nombre'];  // Asegúrate de que estos nombres coincidan con los del formulario HTML
$correo = $_POST['correo'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$direccion_envio = $_POST['direccion_envio'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO tu_tabla (nombre, correo_electronico, producto, cantidad, direccion_envio)
        VALUES ('$nombre', '$correo', '$producto', '$cantidad', '$direccion_envio')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
