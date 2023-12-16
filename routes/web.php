<?php

use App\Http\Controllers\CRUD;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
*/

Route::get('/home', [CRUD::class, 'todos'])->name('homepage');
Route::post('/send', [CRUD::class, 'nuevo'])->name('nuevoProyecto');

Route::get('/change/{id}', [CRUD::class, 'edita_este'])->name('editarProyecto');
Route::put('/update/{id}', [CRUD::class, 'editar'])->name('editar');

Route::get('/deleting/{id}', [CRUD::class, 'elimina_este'])->name('eliminarProyecto');
Route::delete('/delete/{id}', [CRUD::class, 'eliminar'])->name('eliminar');

Route::get('/generatePDF', [CRUD::class, 'informe_todos'])->name('informeCompleto');
Route::get('/PDFindividual/{id}', [CRUD::class, 'informe'])->name('informeSingular');