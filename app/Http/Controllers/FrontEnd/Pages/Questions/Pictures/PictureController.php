<?php

namespace App\Http\Controllers\FrontEnd\Pages\Questions\Pictures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    public function getQuestion()
    {
        return view('pages.frontend.question.gambar.questions');
    }
}
