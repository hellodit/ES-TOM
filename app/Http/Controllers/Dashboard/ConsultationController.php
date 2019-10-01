<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Parameter;
use App\Models\Game;
use App\Models\GameParameter;
use App\Models\History;
use Auth;

class ConsultationController extends Controller
{

    public function index(Request $request){
        $sesi = session()->get('results');
        if( $request->input('step') == 1 || !$request->input('step') ) {
            $params = Parameter::where('variable_id','=',!$request->input('step') ? 1 : $request->input('step'))->get();
        } else if($request->input('step') == 9) {
            $history = new History;
            $history->user_id = Auth::user()->id;
            $history->game_id = array_shift($sesi[8]['posibilities']);
            $history->save();

            return redirect()->route('dashboard.consul.finish');

        } else {
            $sesi = $sesi[$request->input('step')-1];
            $params = Parameter::where('variable_id','=',$request->input('step'))->whereHas('games', function( $query ) use ($sesi) {
                $query->whereIn('games.id', $sesi['posibilities']);
            })->get();
        }
        $nextStep = $request->input('step');
        $prevParam = Parameter::where('id',$request->input('prevparam'))->first();

        return view('dashboard.consul.index',compact('params', 'nextStep','prevParam'));
    }

    public function proses(Request $request){

        $request->validate([
            'id' => 'required'
        ]);

        $posibilities = Parameter::where('id','=',$request->id)->first()->games()->get()->pluck('id');
        if($request->step == 1) {
            session()->forget('results');
        } else {
            $sesi = session()->get('results');
            $calculate = $sesi;
            $poss = $posibilities->toArray();
            $oldPossibilities = $sesi[$request->step-1]['posibilities'];
            if(!is_array($oldPossibilities)) {
                $oldPossibilities = $oldPossibilities->toArray();
            }
            $posibilities = array_intersect( $poss, $oldPossibilities );
        }
        $calculate[$request->step][ 'param_id' ] = $request->id;
        $calculate[$request->step][ 'posibilities' ] = $posibilities;
        $sesi = session()->put('results', $calculate);
        return redirect()->route('dashboard.consul',['step'=> $request->step+1,'prevparam'=> $request->id ]);
    }

    public function finish(Request $request){
        $results = $request->session()->get('results');
        $params = [];

        foreach ($results[8]['posibilities'] as $game) {
            $game = Game::where('id', $game)->get();
        }

        foreach ($results as $key => $result) {
            $params[$key] = Parameter::where('id',$result['param_id'])->with('games')->get();
        }
        return view('dashboard.consul.finish',compact('params','results','game'));
    }


}
