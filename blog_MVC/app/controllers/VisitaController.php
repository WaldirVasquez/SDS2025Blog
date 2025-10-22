<?php
require_once __DIR__ . '/../models/Visita.php';

class VisitaController {

    public function index() {
        $viewPath = __DIR__ . '/../views/visita.php';

        if (file_exists($viewPath)) {
            require $viewPath;
        } else {
            echo "<p style='color:red;text-align:center;'>❌ No se encontró la vista: {$viewPath}</p>";
        }
    }

    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['nombre'] ?? '');
            $correo = trim($_POST['correo'] ?? '');

            // Validar datos básicos
            if ($nombre && filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                try {
                    $visita = new Visita();
                    $visita->guardar($nombre, $correo);

                    // Redirigir con éxito
                    header("Location: /visita?exito=1");
                    exit;

                } catch (Exception $e) {
                    // Error en DB o lógica
                    echo "<p style='color:red;text-align:center;'>⚠️ Error al guardar visita: {$e->getMessage()}</p>";
                }
            } else {
                echo "<p style='color:red;text-align:center;'>❌ Datos inválidos. Revise nombre y correo.</p>";
            }
        } else {
            echo "<p style='color:red;text-align:center;'>⚠️ Método no permitido.</p>";
        }
    }
}

