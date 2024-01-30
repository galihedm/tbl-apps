<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontEnd\Pages\General\HomeController;
use App\Http\Controllers\FrontEnd\Pages\Questions\Videos\VideoController;
use App\Http\Controllers\FrontEnd\Pages\Questions\Soal\SoalController;
use App\Http\Controllers\FrontEnd\Pages\Questions\Lyrics\LyricController;
use App\Http\Controllers\FrontEnd\Pages\Questions\Pictures\PictureController;
use App\Http\Controllers\FrontEnd\Pages\Rewards\RewardController;

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

Route::get('/rumah', [HomeController::class, 'index'])->name('home');
Route::get('/question/video', [VideoController::class, 'index'])->name('question.video.home');
Route::get('/question/video/questions', [VideoController::class, 'getQuestion'])->name('question.video.questions');
Route::get('/question/soal/questions', [SoalController::class, 'getQuestion'])->name('question.soal.questions');
Route::get('/question/lyric/questions', [LyricController::class, 'getQuestion'])->name('question.lyric.questions');
Route::get('/question/picture/questions', [PictureController::class, 'getQuestion'])->name('question.gambar.questions');
Route::get('/rewards', [RewardController::class, 'index'])->name('rewards.index');
