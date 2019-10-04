<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Parameter;
use App\Models\GameParameter;
use App\Models\Game;
use App\Models\Rule;


class RulesController extends Controller
{
    public function index(Request $request){
        $rules = Rule::latest()->paginate(10);
        return view('dashboard.master-rules.index',compact('rules'));
    }

    public function form($id = null){
        $data['act'] = (empty($id) ? "Tambah Aturan" : "Edit  Aturan");
        $data['url'] = (empty($id) ? url('dashboard/rule') : url('dashborad/rule/'.$id));
        $data['action'] = (empty($id) ? "POST" : "PUT");
        $data['parameters'] = Parameter::all();
        $data['games'] = Game::all();

        return view('dashboard.master-rules.form',['data' => $data]);
    }


    public function store(Request $request)
    {
        $this->validate($request, array(
            'game'   => 'required',
            'params' => 'required',
        ));

        $rule = Rule::create([
            'name' => $request->name,
        ]);

        foreach ($request->params as $params) {
            $gameparam = new GameParameter;
            $gameparam->game_id = $request->game;
            $gameparam->parameter_id = $params;
            $gameparam->rule_id = $rule->id;
            $gameparam->save();
        }


        return redirect(route('dashboard.rules'))->with('success','Basis pengetahuan telah ditambahkan');
    }


    public function destroy($id){
        $parameters = GameParameter::findOrfail($id);
        $parameters->delete();

        return redirect()->route('dashboard.gameparam')
        ->with('success','User deleted successfully');
    }




}
