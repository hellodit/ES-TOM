<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\History;


class HistoryController extends Controller
{
    public function index(){
        $histories = History::where('user_id', \Auth::user()->id)->with('rule.game')->orderBy('created_at','DESC')->paginate(5);
        return view('dashboard.history.index',compact('histories'));
    }

}
