<?php

namespace App\Http\Controllers\FrontEnd\Pages\Topups;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopupController extends Controller
{
    public function index()
    {
        return view('pages.frontend.topups.index');
    }
}
