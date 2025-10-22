<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ✅ BASE_PATH apunta directo a las vistas
define('BASE_PATH', '/var/www/app/views/');

// Cargar el autoloader y rutas
require_once '/var/www/autoloader.php';
require_once '/var/www/lib/Route.php';
require_once '/var/www/routes/web.php';

// Ejecutar las rutas
Route::dispatch();
