<?php

namespace App\Http\Controllers\FrontEnd\Pages\Questions\Lyrics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LyricController extends Controller
{
    public function getQuestion()
    {
        return view('pages.frontend.question.lirik.questions');
    }
}
