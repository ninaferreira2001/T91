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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('tipo')
    ->middleware(['auth'])
    ->controller(TipoController::class)
    ->group(function ()
    {
        route::get('/', 'index')->name('tipo.index');
        route::get('/novo', 'create')->name('tipo.create');
        route::get('/editar/{id}', 'edit')->name('tipo.edit');
        route::get('/mostrar/{id}', 'show')->name('tipo.show');
        route::post('/cadastrar', 'store')->name('tipo.store');
        route::post('/atualizar/{id}', 'update')->name('tipo.update');
        route::post('/deletar', 'destroy')->name('tipo.destroy');
    });

require __DIR__.'/auth.php';
