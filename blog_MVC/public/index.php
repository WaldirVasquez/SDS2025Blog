<?php
// Mostrar errores (solo en desarrollo)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Ruta base de vistas
define('BASE_PATH', __DIR__ . '/../app/views/');

// Cargar dependencias principales
require_once __DIR__ . '/../autoloader.php';
require_once __DIR__ . '/../lib/Route.php';
require_once __DIR__ . '/../routes/web.php';

// Ejecutar las rutas registradas
Route::dispatch();
?>
