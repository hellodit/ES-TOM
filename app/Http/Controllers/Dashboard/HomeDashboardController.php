<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Parameter;
use App\Models\Rule;
use App\Models\User;
use App\Http\Controllers\Controller;
class HomeDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index(){
        $data = [
            'users' => User::all()->count(),
            'params' => Parameter::all()->count(),
            'games' => Game::all()->count(),
            'rule' => Rule::all()->count(),
        ];

        return view('dashboard.index',compact('data'));
    }
}
