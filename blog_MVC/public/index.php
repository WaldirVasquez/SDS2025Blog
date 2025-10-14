<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verificar la ruta
$path = __DIR__ . '/../app/views/home.php';

if (file_exists($path)) {
    include $path;
} else {
    echo "<p style='color:red;'> No se encontró la vista en: $path</p>";
}


?>