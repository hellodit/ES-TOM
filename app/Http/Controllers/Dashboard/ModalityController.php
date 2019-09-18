<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Modality;
use App\Models\Age;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ModalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modal = true;
        return view('dashboard.master-modalities.index',compact('modal'));
    }

    public function form($id = null){
        $data['act'] = (empty($id) ? "Tambah Data" : "Edit Data");
        $data['url'] = (empty($id) ? url('dashboard/modality') : url('dashborad/modality/'.$id));
        $data['action'] = (empty($id) ? "POST" : "PUT");
        $data['ages'] = Age::all();
        $data['modality'] =  Modality::find($id);
        return view('dashboard.master-modalities.form',['data' => $data]);
    }

    public function data(Request $request){
        if($request->ajax()){
            $modalities = Modality::latest()
                ->paginate(5);
            return view('dashboard.master-modalities.data',compact('modalities'))->render();
        }
    }

    public function store(Request $request){
        $rules = [
            'code'           => 'required|string|max:50',
            'ages'          => 'requireed',
            'nama'           => 'required|string|max:50',
            'description'       => 'required|string'
        ];

        $customMessages = [
            'required' => 'Kolom :attribute harus diisi.',
            'max' => ':attribute terlalu panjang.',
            'unique'    => ':attribute telah digunakan sebelumnya'
        ];

        $customAttributes = [
            'ages' => 'usia',
            'code'  => 'kode modalitas',
            'nama ' => 'nama modalitas',
            'description'  => 'deskripsi modalitas'
        ];

        $validator = Validator::make($request->all(), $rules, $customMessages);
        $validator->setAttributeNames($customAttributes);

        if($validator->fails()) {
            return response()->json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ), 400);
        }

        Modality::create([
            'code'          => $request->code,
            'name'          => $request->nama,
            'age_id'        => $request->age,
            'description'      => $request->description
        ]);

        return response()->json(array(
            'success' => 'Data perilaku telah berhasil ditambahkan',
            'errors' => false,
        ), 200);
    }

    public function destroy($id){
        Modality::findOrfail($id)->delete();

        return response()->json(array(
            'success' => 'kategori telah berhasil dihapus!!',
            'errors' => false,
        ), 200);
    }


}
