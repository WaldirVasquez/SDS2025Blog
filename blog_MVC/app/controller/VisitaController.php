<?php
require_once './app/models/Visita.php';

class VisitaController {
    public function index() {
        include './app/views/visita.php';
    }

    public function registrar() {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];

        $visita = new Visita();
        $visita->guardar($nombre, $correo);

        header("Location: /visita");
    }
}

?>