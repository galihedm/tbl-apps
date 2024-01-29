<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BackEnd\Pages\Auth\LoginController;
use App\Http\Controllers\BackEnd\Pages\Dashboards\DashboardController;
// use App\Http\Controllers\BackEnd\Pages\Questions\Videos\VideoController;
// use App\Http\Controllers\BackEnd\Pages\Questions\Soal\SoalController;

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

// Auth::routes();

Route::group([
    'name' => 'backend',
], function ($app) {
    $app->get('auth/login', [LoginController::class, 'index'])->name('backend.login');
    $app->post('auth/processing', [LoginController::class, 'authenticate'])->name('backend.processing');

    $app->group([
        'name' => 'dashboard',
        'prefix' => 'dashboard',
        'middleware' => 'admin',
    ], function ($route) {
        $route->get('/', [DashboardController::class, 'index'])->name('backend.dashboard.home');
    });
});
