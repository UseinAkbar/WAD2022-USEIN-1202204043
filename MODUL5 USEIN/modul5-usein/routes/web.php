<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowroomController;
use App\Http\Controllers\UserController;
use App\Models\Showroom;

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
    return view('Home-Usein');
});

Route::get('login', function () {
    return view('Login-Usein');
});

Route::get('register', function () {
    return view('Register-Usein');
});

Route::get('add-item', function () {
    return view('Add-Usein');
});

Route::get('my-car', [ShowroomController::class, 'index']);
Route::get('detail/{id}', [ShowroomController::class, 'detail']);
Route::get('edit/{id}', [ShowroomController::class, 'edit']);
Route::get('delete/{id}', [ShowroomController::class, 'delete']);

Route::post('edit/{id}', [ShowroomController::class, 'update']);
Route::post('insert', [ShowroomController::class, 'add']);
Route::post('login', [ShowroomController::class, 'auth']);

Route::resource('my-car', ShowroomController::class);