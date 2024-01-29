<?php

namespace App\Http\Controllers\FrontEnd\Pages\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\Question\{
    QuestionsCategories,
    QuestionsSubCategories,
};

class HomeController extends Controller
{
    public function index()
    {
        $getCateSoal = QuestionsCategories::with(["subCategory"])->where("name", "tebak soal")->orderBy("created_at", "DESC")->first();

        return view('pages.frontend.home.index', [
            'cate_soal' => $getCateSoal,
        ]);
    }
}
