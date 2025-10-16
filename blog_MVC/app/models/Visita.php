<?php
require_once '/var/www/conexionBD/database.php';



class Visita {
    private $conn;

    public function __construct() {
        // Crear conexión usando la clase Database (PDO)
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function guardar($nombre, $correo) {
        try {
            $sql = "INSERT INTO visita (nombre, correo) VALUES (:nombre, :correo)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':correo', $correo);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "❌ Error al guardar visita: " . $e->getMessage();
        }
    }
}
?>
