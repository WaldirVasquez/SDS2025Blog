<?php
class Database {
    private $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $url = getenv("DATABASE_URL"); // Render crea esta variable automáticamente

            if (!$url) {
                throw new Exception("No se encontró la variable DATABASE_URL");
            }

            $parts = parse_url($url);
            $host = $parts["host"];
            $port = $parts["port"];
            $user = $parts["user"];
            $pass = $parts["pass"];
            $dbname = ltrim($parts["path"], "/");

            $this->conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $e) {
            echo "Error de conexión: " . $e->getMessage();
        }

        return $this->conn;
    }
}
?>
his->conn;
    }
}
?>
