<?php

namespace App\Http\Controllers\FrontEnd\Pages\Questions\Soal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function getQuestion()
    {
        return view('pages.frontend.question.soal.questions');
    }
}
