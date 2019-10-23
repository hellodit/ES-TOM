<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Parameter;
use App\Models\Game;
use App\Models\Rule;
use App\Models\ParameterRule;
use App\Imports\RulesImport;
use Maatwebsite\Excel\Facades\Excel;

class RulesController extends Controller
{
    public function importform(){
        return view('dashboard.master-rules.import');
    }

    public function import(Request $request){
        $this->validate($request, [
            'file' => 'required|mimes:xlsx|max:8024',
        ]);

        if ($request->hasFile('file')) {
            $filename = time() . '_' . str_random(50) . '.' . request()->file->getClientOriginalExtension();
            $path = public_path('uploads');
            request()->file->move($path.'/',$filename);
        }

        Excel::import(new RulesImport, public_path('uploads/'.$filename));

        return redirect(route('dashboard.rules'))->with('success','Basis pengetahuan telah ditambahkan');
    }

    public function index(Request $request){
        $rules = Rule::latest()->with('params','game')->paginate(10);
        $modal = true;
        return view('dashboard.master-rules.index',compact('rules','modal'));
    }

    public function show($id){
        $data = Rule::with('params','game')->findOrfail($id);
        return view('dashboard.master-rules.detail',compact('data'));
    }

    public function form($id = null){
        $data['act'] = (empty($id) ? "Tambah Aturan" : "Edit  Aturan");
        $data['url'] = (empty($id) ? url('dashboard/rule') : url('dashboard/rule/edit/'.$id));
        $data['action'] = (empty($id) ? "POST" : "POST");
        $data['rule'] = (!empty($id) ? Rule::Where('id',$id)->with('params','game')->first() : null );
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
            'game_id' => $request->game,
        ]);

        foreach ($request->params as $params) {
            $gameparam = new ParameterRule;
            $gameparam->parameter_id = $params;
            $gameparam->rule_id = $rule->id;
            $gameparam->save();
        }


        return redirect(route('dashboard.rules'))->with('success','Basis pengetahuan telah ditambahkan');
    }

    public function edit(Request $request){
        $params[] = '';

        $this->validate($request, array(
            'game'   => 'required',
            'params' => 'required',
        ));


        Rule::find($request->id)->update([
            'name' => $request->name,
            'game_id' => $request->game,
        ]);

        $rule = Rule::find($request->id);

        $rule->params()->sync(
            $request->get('params')
        );

        return redirect(route('dashboard.rules'))->with('success','Basis pengetahuan berhasil disunting');

    }


    public function destroy($id){
        $rule = Rule::findOrfail($id);
        ParameterRule::where('rule_id',$rule->id)->delete();
        $rule->delete();

        return response()->json(array(
            'success' => 'Aturan telah berhasil dihapus!!',
            'errors' => false,
        ), 200);
    }




}
