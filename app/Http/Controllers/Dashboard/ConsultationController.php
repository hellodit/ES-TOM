<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Parameter;
use App\Models\Game;
use App\Models\GameParameter;
use App\Models\ParameterRule;
use App\Models\Rule;
use App\Models\History;
use Auth;

class ConsultationController extends Controller
{
    private $selected = [];

    public function index(){

        $params = [
            'ages' => Parameter::with('variable')->whereHas('variable', function($q){
                $q->where('name','=','Usia');
            })->get(),
            'edus' => Parameter::with('variable')->whereHas('variable', function($q){
                $q->where('name','=','Modalitas Belajar');
            })->get(),
            'moralities' => Parameter::with('variable')->whereHas('variable', function($q){
                $q->where('name','=','Nilai Agama dan Moral');
            })->get(),
            'physicals' => Parameter::with('variable')->whereHas('variable', function($q){
                $q->where('name','=','Fisik Motorik');
            })->get(),
            'cognitivies' => Parameter::with('variable')->whereHas('variable', function($q){
                $q->where('name','=','Kognitif');
            })->get(),
            'langs' => Parameter::with('variable')->whereHas('variable', function($q){
                $q->where('name','=','Bahasa');
            })->get(),
            'social' => Parameter::with('variable')->whereHas('variable', function($q){
                $q->where('name','=','Sosial Emosional');
            })->get(),
            'games' => Parameter::with('variable')->whereHas('variable', function($q){
                $q->where('name','=','Kelompok Permainan');
            })->get(),
        ];

        return view('dashboard.consul.index',compact('params'));
    }

    public function proses(Request $request){
        $request->validate([
            'childName' => 'required|string',
            'gender' => 'required',
            'age' => 'required',
            'edu' => 'required',
            'physical' => 'required',
            'morality' => 'required',
            'cognitiv' => 'required',
            'lang' => 'required',
            'social' => 'required',
            'game' => 'required'
        ]);

        foreach ($request->except(['_token','childName']) as $key => $value) {
            $selected[$key] = Parameter::where('id', $value)->first();
        }

        $selectedRule = Rule::with('params','game')->get()->filter(function($item) use ($request){
            // $id = [1,5,9,12,14,18,22,26]; // ATURAN 1
            //    $id = [2,5,9,12,16,18,23,26]; // ATURAN 5
            $id = [
                    $request->get('age'),
                    $request->get('edu'),
                    $request->get('physical'),
                    $request->get('morality'),
                    $request->get('cognitiv'),
                    $request->get('lang'),
                    $request->get('social'),
                    $request->get('game')
            ];
            $paramid = $item->params->pluck('id')->toArray();
            $nemu = array_intersect($id,$paramid);
            return count($nemu) == count($id);
        })->toArray();

        $selectedRule = array_values($selectedRule);

        if(!empty($selectedRule)){
            $history = New History;
            $history->childname = $request->get('childName');
            $history->gender = $request->get('gender');
            $history->user_id = Auth::user()->id;
            $history->rule_id = $selectedRule['0']['id'];
            $history->status = 'success';
            $history->save();
            $history->id;
        }else{
            $history = New History;
            $history->childname = $request->get('childName');
            $history->gender = $request->get('gender');
            $history->user_id = Auth::user()->id;
            $history->rule_id = null;
            $history->status = 'failed';
            $history->save();
            $history->id;
        }
        return redirect()->route('dashboard.history.detail',['id' => $history->id ]);
    }

    public function backward(Request $request){

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

}
