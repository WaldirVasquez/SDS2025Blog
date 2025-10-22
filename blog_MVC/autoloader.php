<?php
// Define la ruta base del proyecto dentro del contenedor, solo si no existe
if (!defined('BASE_PATH')) {
    define('BASE_PATH', __DIR__ . '/');
}

// Registrar el autoloader
spl_autoload_register(function ($class) {
    $paths = [
        BASE_PATH . 'app/controllers/',
        BASE_PATH . 'app/models/',
    ];

    foreach ($paths as $path) {
        $file = $path . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }

    // Mensaje opcional solo si estás en modo desarrollo
    if (getenv('APP_ENV') === 'local') {
        echo "<p style='color:red;text-align:center;'>⚠️ No se pudo cargar la clase: {$class}</p>";
    }
});
?>
