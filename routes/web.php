<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sajat', function (\Illuminate\Http\Request $request) {
    return view('sajat', [
        'name' => 'Dénes',
        'adat' => $request->input('adat'),
        'todos' => \App\Models\Todo::all(),
        ]);
});

Route::get('/enyem', [\App\Http\Controllers\Teszt::class, 'show']);
Route::resource('todos', \App\Http\Controllers\TodoController::class);
Route::resource('telefonkonyv', \App\Http\Controllers\TelefonkonyvController::class);
Route::resource('bevasarlolista', \App\Http\Controllers\BevasarlolistaController::class);

