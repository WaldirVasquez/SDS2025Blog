<?php
$mysqli = new mysqli('db', 'appuser', 'apppass', 'appdb');

if ($mysqli->connect_error) {
    die("❌ Error de conexión: " . $mysqli->connect_error);
}
echo "✅ Conexión exitosa a la base de datos!";
?>
