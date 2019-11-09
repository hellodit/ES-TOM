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

    public function destroy($id){
        $history = History::findOrfail($id);
        $history->delete();

        return response()->json(array(
            'success' => 'Aturan telah berhasil dihapus!!',
            'errors' => false,
        ), 200);
    }

    public function show($id){
        $history = History::where('id',$id)->with('rule.game','rule.params','user')->firstOrFail();
        return view('dashboard.history.detail',compact('history'));
    }

}
