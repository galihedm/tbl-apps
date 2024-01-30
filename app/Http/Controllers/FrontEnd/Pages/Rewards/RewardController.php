<?php

namespace App\Http\Controllers\FrontEnd\Pages\Rewards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    public function index()
    {
        return view('pages.frontend.rewards.index');
    }
}
