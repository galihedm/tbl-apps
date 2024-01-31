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

    public function successed()
    {
        return view('pages.frontend.rewards.redeemed');
    }

    public function emptyCoin()
    {
        return view('pages.frontend.rewards.emptyCoin');
    }

    public function emptyQuota()
    {
        return view('pages.frontend.rewards.emptyQuota');
    }
}
