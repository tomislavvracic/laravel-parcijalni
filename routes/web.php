<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'show'])->name("tasks");
Route::post('/tasks/create', [App\Http\Controllers\TaskController::class, 'create']);
Route::get('/tasks/{id}', [App\Http\Controllers\TaskController::class, 'destroy']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
