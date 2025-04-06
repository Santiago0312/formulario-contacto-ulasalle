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

$sql = "SELECT * FROM mensajes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Mensajes recibidos:</h2>";
    while($row = $result->fetch_assoc()) {
        echo "Nombre: " . $row["nombre"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Mensaje: " . $row["mensaje"] . "<br><hr>";
    }
} else {
    echo "No hay mensajes.";
}

$conn->close();
?>