<?php

namespace App\Http\Controllers\FrontEnd\Pages\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.frontend.home.index');
    }
}
