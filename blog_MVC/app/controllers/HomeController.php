<?php

class HomeController {
    public function index() {
        $viewPath = '/var/www/app/views/home.php';

        if (file_exists($viewPath)) {
            include $viewPath;
        } else {
            echo "<p style='color:red;text-align:center;'> No se encontró la vista: $viewPath</p>";
        }
    }
}
?>
