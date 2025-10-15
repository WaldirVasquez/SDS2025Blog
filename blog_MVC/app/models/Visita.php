<?php
require_once 'Conexion.php';

class Visita {
    public function guardar($nombre, $correo) {
        $conn = Conexion::conectar();
        $stmt = $conn->prepare("INSERT INTO visitas (nombre, correo, fecha) VALUES (?, ?, NOW())");
        $stmt->bind_param("ss", $nombre, $correo);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
}

?>