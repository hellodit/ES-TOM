<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Age;

class AgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modal = true;
        return view('dashboard.master-ages.index',compact('modal'));
    }


    public function form($id = null){
        $data['act'] = (empty($id) ? "Tambah Data" : "Edit Data");
        $data['url'] = (empty($id) ? url('dashboard/age') : url('dashborad/age/'.$id));
        $data['action'] = (empty($id) ? "POST" : "PUT");
        $data['age'] =  Age::find($id);
        return view('dashboard.master-ages.form',['data' => $data]);
    }

    public function data(Request $request){
        if($request->ajax()){
            $ages = Age::latest()->paginate(5);
            return view('dashboard.master-ages.data',compact('ages'))->render();
        }
    }

    public function store(Request $request){
        $rules = [
            'code'           => 'required|string|max:50|unique:ages,code',
            'nama'           => 'required|string|max:50',
            'description'       => 'required|string'
        ];

        $customMessages = [
            'required' => 'Kolom :attribute harus diisi.',
            'max' => ':attribute terlalu panjang.',
            'unique'    => ':attribute telah digunakan sebelumnya'
        ];

        $customAttributes = [
            'code'  => 'kode umur',
            'nama ' => 'nama umur',
            'description'  => 'deskripsi umur'
        ];

        $validator = Validator::make($request->all(), $rules, $customMessages);
        $validator->setAttributeNames($customAttributes);

        if($validator->fails()) {
            return response()->json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ), 400);
        }

        Age::create([
            'code'          => $request->code,
            'name'          => $request->nama,
            'description'      => $request->description
        ]);

        return response()->json(array(
            'success' => 'Data perilaku telah berhasil ditambahkan',
            'errors' => false,
        ), 200);
    }

    public function destroy($id){
        Age::findOrfail($id)->delete();

        return response()->json(array(
            'success' => 'kategori telah berhasil dihapus!!',
            'errors' => false,
        ), 200);
    }
}
