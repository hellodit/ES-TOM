<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function index(){
        $modal = true;
        return view('dashboard.master-category.index',compact('modal'));
    }

    public function form($id = null){
        $data['act'] = (empty($id) ? "Tambah Data" : "Edit Data");
        $data['url'] = (empty($id) ? url('dashboard/categories') : url('dashborad/categories/'.$id));
        $data['action'] = (empty($id) ? "POST" : "PUT");
        $data['category'] = Categories::all();
        return view('dashboard.master-category.form',['data' => $data]);
    }

    public function data(Request $request){
        if($request->ajax()){
            $categories = Categories::Paginate(5);
            return view('dashboard.master-category.data',compact('categories'))->render();
        }
    }

    public function show($id)
    {
        $data = Categories::findOrfail($id)->toArray();
        return response()->json(compact('data'), 200);
    }


    public function store(Request $request){
        $rules = [
            'code'  => 'required|string|max:5',
            'name'   => 'required|string|max:50',
            'description'    => 'required|string'
        ];

        $customMessages = [
            'required' => 'Kolom :attribute harus diisi.',
            'max' => 'Jumlah :attribute Terlalu Besar.',
        ];

        $customAttributes = [
            'name ' => 'Nama katogori',
            'description' => 'Deskripsi',
        ];

        $validator = Validator::make($request->all(), $rules, $customMessages);
        $validator->setAttributeNames($customAttributes);

        if($validator->fails()) {
            return response()->json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ), 400);
        }

        Categories::create([
            'name'          => $request->name,
            'description'   => $request->description,
        ]);

        return response()->json(array(
            'success' => 'Data ketogori telah berhasil ditambahkan',
            'errors' => false,
        ), 200);
    }

    public function destroy($id){
        $category = Categories::findOrfail($id);
        $category->delete();
        return response()->json(array(
            'success' => 'kategori telah berhasil dihapus!!',
            'errors' => false,
        ), 200);
    }


}
