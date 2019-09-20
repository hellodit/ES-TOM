<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parameter;
use App\Models\Game;
use App\Models\GameParameter;


class GameParameterController extends Controller
{
    //Kontroller untuk basis pengetahuan
    public function index(Request $request){
        $gameparams = GameParameter::latest()->paginate(10);
        return view('dashboard.master-gameparam.index',compact('gameparams'));
    }

    public function form($id = null){
        $data['act'] = (empty($id) ? "Tambah Hubungan Permainan Parameter" : "Edit  Hubungan Permainan Parameter");
        $data['url'] = (empty($id) ? url('dashboard/parameter') : url('dashborad/parameter/'.$id));
        $data['action'] = (empty($id) ? "POST" : "PUT");
        $data['parameters'] = Parameter::all();
        $data['games'] = Game::all();

        return view('dashboard.master-gameparam.form',['data' => $data]);
    }


    public function store(Request $request)
    {
        $this->validate($request, array(
            'game'   => 'required',
            'params' => 'required',
        ));

        foreach ($request->params as $params) {
            $gameparam = new GameParameter;
            $gameparam->game_id = $request->game;
            $gameparam->parameter_id = $params;
            $gameparam->save();
        }
        return redirect(route('dashboard.gameparam'))->with('success','Basis pengetahuan telah ditambahkan');
    }


    public function destroy($id){
        $parameters = GameParameter::findOrfail($id);
        $parameters->delete();

        return redirect()->route('dashboard.gameparam')
        ->with('success','User deleted successfully');
    }



}
