<?php

use Illuminate\Support\Facades\Route;

class App extends Illuminate\Support\Facades\App
{
}
class Artisan extends Illuminate\Support\Facades\Artisan
{
}
class Auth extends Illuminate\Support\Facades\Auth
{
}
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\dashboardController::class, 'index']);
});
