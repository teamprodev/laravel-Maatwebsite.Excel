<?php

use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\UsersController;
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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('users/export/', [UsersController::class, 'export'])->name('user_export');
Route::get('users/export_chunked/', [UsersController::class, 'export_chunked'])->name('user_export_chunked');
Route::get('applications/export/', [ApplicationsController::class, 'export'])->name('app_export');
Route::get('applications/export_chunked/', [ApplicationsController::class, 'export_chunked'])->name('app_export_chunked');
