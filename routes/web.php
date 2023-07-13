<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Ruta para descargar el reporte pdf
Route::get('/descargar-reporte-pdf', [ReportesController::class, 'descargarPdf'])
    ->name('descargar.pdf');