<?php

namespace App\Http\Controllers\FrontEnd\Pages\Questions\Videos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        return view('pages.frontend.question.video.index');
    }

    public function getQuestion()
    {
        return view('pages.frontend.question.video.questions');
    }
}
