<?php
require_once __DIR__ . '/../models/Visita.php'; 

class VisitaController {
    public function index() {
        include BASE_PATH . 'visita.php';
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['nombre'] ?? '');
            $correo = trim($_POST['correo'] ?? '');

            if ($nombre && $correo) {
                $visita = new Visita();
                $visita->guardar($nombre, $correo);
            }

            // Redirigir con parámetro de éxito
        header("Location: /visita?exito=1");
        exit;
        }
    }
}
?>
