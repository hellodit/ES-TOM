<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Parameter;
use App\Models\Game;
use App\Models\GameParameter;

class ConsultationController extends Controller
{
    public function index(Request $request){

        $sesi = session()->get('results');

        if( $request->input('step') == 1 || !$request->input('step')  ) {

            $params = Parameter::where('variable_id','=',$request->input('step'))->get();

        } else if($request->input('step') == 9) {

            dd($sesi);

        } else {

            $sesi = $sesi[$request->input('step')-1];

            $params = Parameter::where('variable_id','=',$request->input('step'))->whereHas('games', function( $query ) use ($sesi) {
                $query->whereIn('games.id', $sesi['posibilities']);
            })->get();

        }

        $nextStep = $request->input('step');

        return view('dashboard.consul.index',compact('params', 'nextStep'));
    }

    public function proses(Request $request){
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

        return redirect()->route('dashboard.consul',['step'=> $request->step+1]);

    }
}
