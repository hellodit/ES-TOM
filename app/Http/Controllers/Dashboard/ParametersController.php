<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Parameter;
use App\Models\Variable;
use File;
use Image;

class ParametersController extends Controller
{
    public function index(){
        $modal = true;
        return view('dashboard.master-parameters.index',compact('modal'));
    }

    public function form($id = null){
        $data['act'] = (empty($id) ? "Tambah Parameter" : "Sunting Parameter");
        $data['url'] = (empty($id) ? url('dashboard/parameter') : url('dashboard/parameter/edit/'.$id));
        $data['action'] = (empty($id) ? "POST" : "POST");
        $data['parameter'] = Parameter::find($id);
        $data['variables'] = Variable::all();
        return view('dashboard.master-parameters.form',['data' => $data]);
    }

    public function data(Request $request){
        if($request->ajax()){
            $parameters = Parameter::latest()->with('variable')->paginate(10);
            return view('dashboard.master-parameters.data',compact('parameters'))->render();
        }
    }

    public function edit(Request $request){
        $rules = [
            'code'           => 'required|string|max:50|unique:parameters,code',
            'name'           => 'required|string',
            'variable'       => 'required'
        ];

        $customMessages = [
            'required' => 'Kolom :attribute harus diisi.',
            'max' => ':attribute terlalu panjang.',
            'unique'    => ':attribute telah digunakan sebelumnya'
        ];

        $customAttributes = [
            'code'  => 'kode parameter',
            'name ' => 'nama parameter',
            'variable'  => 'Ketegori parameter'
        ];

        $validator = Validator::make($request->all(), $rules, $customMessages);
        $validator->setAttributeNames($customAttributes);

        if($validator->fails()) {
            return response()->json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ), 400);
        }

        Parameter::find($request->id)->update([
            'code'          => $request->code,
            'name'          => $request->name,
            'variable_id'      => $request->variable,
        ]);

        return response()->json(array(
            'success' => 'Data Parameter telah berhasil ditambahkan',
            'errors' => false,
        ), 200);

    }

    public function store(Request $request){
        $rules = [
            'code'           => 'required|string|max:50|unique:parameters,code',
            'name'           => 'required|string',
            'variable'       => 'required'
        ];

        $customMessages = [
            'required' => 'Kolom :attribute harus diisi.',
            'max' => ':attribute terlalu panjang.',
            'unique'    => ':attribute telah digunakan sebelumnya'
        ];

        $customAttributes = [
            'code'  => 'kode parameter',
            'name ' => 'nama parameter',
            'variable'  => 'Ketegori parameter'
        ];

        $validator = Validator::make($request->all(), $rules, $customMessages);
        $validator->setAttributeNames($customAttributes);

        if($validator->fails()) {
            return response()->json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ), 400);
        }

        Parameter::create([
            'code'          => $request->code,
            'name'          => $request->name,
            'variable_id'      => $request->variable,
        ]);

        return response()->json(array(
            'success' => 'Data Parameter telah berhasil ditambahkan',
            'errors' => false,
        ), 200);
    }

    public function destroy($id){
        $parameters = Parameter::findOrfail($id);
        $parameters->delete();

        return response()->json(array(
            'success' => 'Parameter telah berhasil dihapus!!',
            'errors' => false,
        ), 200);
    }

    public function show($id){
        $data = Parameter::findOrfail($id);

        return view('dashboard.master-parameters.detail',compact('data'));
    }
}
