<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Behavior;

class BehaviorController extends Controller
{
    public function index(){
        return view('dashboard.master-behavior.index');
    }

    public function form($id = null){
        $data['act'] = (empty($id) ? "Tambah Data" : "Edit Data");
        $data['url'] = (empty($id) ? url('dashboard/behavior') : url('dashborad/behavior/'.$id));
        $data['action'] = (empty($id) ? "POST" : "PUT");
        $data['behavior'] =  Behavior::find($id);
        return view('dashboard.master-behavior.form',['data' => $data]);
    }

    public function data(Request $request){
        if($request->ajax()){
            $behaviors = Behavior::latest()->paginate(5);
            return view('dashboard.master-behavior.data',compact('behaviors'))->render();
        }
    }


    public function store(Request $request){
        $rules = [
            'code'           => 'required|string|max:50|unique:behaviors,code',
            'nama'           => 'required|string|max:50',
            'category'       => 'required|string'
        ];

        $customMessages = [
            'required' => 'Kolom :attribute harus diisi.',
            'max' => ':attribute terlalu panjang.',
            'unique'    => ':attribute telah digunakan sebelumnya'
        ];

        $customAttributes = [
            'code'  => 'kode perilaku',
            'nama ' => 'nama perilaku',
            'category'  => 'kategori perilaku'
        ];

        $validator = Validator::make($request->all(), $rules, $customMessages);
        $validator->setAttributeNames($customAttributes);

        if($validator->fails()) {
            return response()->json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ), 400);
        }

        Behavior::create([
            'code'          => $request->code,
            'name'          => $request->nama,
            'category'      => $request->category
        ]);

        return response()->json(array(
            'success' => 'Data perilaku telah berhasil ditambahkan',
            'errors' => false,
        ), 200);
    }

    public function destroy($id){
        Behavior::findOrfail($id)->delete();

        return response()->json(array(
            'success' => 'kategori telah berhasil dihapus!!',
            'errors' => false,
        ), 200);
    }


}
