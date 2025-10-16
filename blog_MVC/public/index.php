<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('BASE_PATH', '/var/www/app/views/');

require_once __DIR__ . '/../autoloader.php';
require_once __DIR__ . '/../lib/Route.php';
require_once __DIR__ . '/../routes/web.php';

// Obtener la URL desde el .htaccess
$url = isset($_GET['url']) ? '/' . trim($_GET['url'], '/') : '/';

// Ejecutar la ruta
ob_start();
Route::dispatch($url);
$content = ob_get_clean();

// Si no se encontró contenido, mostrar la home por defecto
if (empty($content) && $url === '/') {
    $path = __DIR__ . '/../app/views/home.php';
    if (file_exists($path)) {
        include $path;
    } else {
        echo "<p style='color:red;'>No se encontró la vista en: $path</p>";
    }
}

Route::dispatch();

?>
