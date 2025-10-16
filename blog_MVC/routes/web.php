<?php

require_once '/var/www/app/controllers/HomeController.php';
require_once '/var/www/app/controllers/DiaController.php';
require_once '/var/www/app/controllers/InfoController.php';
require_once '/var/www/app/controllers/VisitaController.php';

Route::get('/', [new HomeController(), 'index']);
Route::get('/dia1', [new DiaController(), 'dia1']);
Route::get('/dia2', [new DiaController(), 'dia2']);
Route::get('/dia3', [new DiaController(), 'dia3']);
Route::get('/dia4', [new DiaController(), 'dia4']);
Route::get('/dia5', [new DiaController(), 'dia5']);
Route::get('/mi-info', [new InfoController(), 'index']);
Route::get('/visita', [new VisitaController(), 'index']);
Route::post('/visita/registrar', [new VisitaController(), 'registrar']);
?>