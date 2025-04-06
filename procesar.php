<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario_contacto";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO mensajes (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "¡Mensaje enviado con éxito!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>