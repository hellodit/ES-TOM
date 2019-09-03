<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $modal = true;
        return view('dashboard.master-user.index',compact('modal'));
    }

    public function data(Request $request){
        if($request->ajax()){
            $users = User::Where('type','=','parent')->paginate(10);
            return view('dashboard.master-user.data',compact('users'))->render();
        }
    }
}
