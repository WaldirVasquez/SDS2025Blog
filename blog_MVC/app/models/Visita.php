<?php
require_once __DIR__ . '/../../conexionBD/Database.php';

class Visita {
    private $conn;

    public function __construct() {
        // Crear conexión usando la clase Database (PDO PostgreSQL)
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function guardar($nombre, $correo) {
        try {
            // OJO: la tabla se llama "visitas"
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
