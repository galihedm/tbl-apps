<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontEnd\Pages\General\HomeController;
use App\Http\Controllers\FrontEnd\Pages\Questions\Videos\VideoController;
use App\Http\Controllers\FrontEnd\Pages\Questions\Soal\SoalController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/question/video', [VideoController::class, 'index'])->name('question.video.home');
Route::get('/question/video/questions', [VideoController::class, 'getQuestion'])->name('question.video.questions');
Route::get('/question/soal/questions', [SoalController::class, 'getQuestion'])->name('question.soal.questions');
