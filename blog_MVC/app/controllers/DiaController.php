<?php
class DiaController {
    private $viewBasePath;

    public function __construct() {
        // Crea la ruta base sin depender del servidor
        $this->viewBasePath = __DIR__ . '/../views/dias/';
    }

    private function loadView($dia) {
        $viewPath = $this->viewBasePath . "dia{$dia}.php";

        if (file_exists($viewPath)) {
            require $viewPath;
        } else {
            echo "<p style='color:red;text-align:center;'>❌ No se encontró la vista: {$viewPath}</p>";
        }
    }

    public function dia1() { $this->loadView(1); }
    public function dia2() { $this->loadView(2); }
    public function dia3() { $this->loadView(3); }
    public function dia4() { $this->loadView(4); }
    public function dia5() { $this->loadView(5); }
}

