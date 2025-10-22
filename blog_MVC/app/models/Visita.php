<?php
require_once '/var/www/conexionBD/Database.php';

class Visita {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function guardar($nombre, $correo) {
        try {
            $sql = "INSERT INTO visitas (nombre, email) VALUES (:nombre, :correo)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':correo', $correo);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "<p style='color:red;text-align:center;'>⚠️ Error al guardar visita: " . $e->getMessage() . "</p>";
        }
    }
}
?>
