<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Game;
use App\Models\GameImage;
use File;
use Image;

class GameController extends Controller
{
    public function index(){
        $modal = true;
        return view('dashboard.master-game.index',compact('modal'));
    }

    public function form($id = null){
        $data['act'] = (empty($id) ? "Tambah Data" : "Edit Data");
        $data['url'] = (empty($id) ? url('dashboard/game') : url('dashborad/game/'.$id));
        $data['action'] = (empty($id) ? "POST" : "PUT");
        $data['categories'] = ['Alqolam','ETL Learning','Cordoba Kids'];
        return view('dashboard.master-game.form',['data' => $data]);
    }

    public function data(Request $request){
        if($request->ajax()){
            $games = Game::latest()->paginate(5);
            return view('dashboard.master-game.data',compact('games'))->render();
        }
    }

    public function store(Request $request){
        $rules = [
            'code'           => 'required|string|max:50|unique:games,code',
            'name'           => 'required|string|max:50',
            'description'    => 'required|string',
            'category'       => 'required'
        ];

        $customMessages = [
            'required' => 'Kolom :attribute harus diisi.',
            'max' => ':attribute terlalu panjang.',
            'unique'    => ':attribute telah digunakan sebelumnya'
        ];

        $customAttributes = [
            'code'  => 'kode permainan',
            'name ' => 'nama permainan',
            'description' => 'deskripsi permainan',
            'category'  => 'kategori permainan'
        ];

        $validator = Validator::make($request->all(), $rules, $customMessages);
        $validator->setAttributeNames($customAttributes);

        if($validator->fails()) {
            return response()->json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ), 400);
        }


        if($image = $request->file('gameimage')){

            $this->path = public_path('uploads/images');
            $this->dimensions = ['300'];

            if (!File::isDirectory($this->path)) {
                File::makeDirectory($this->path, 0777, true);
            }

            //rename image
            $imageName   = uniqid().'_in_'.date('Ymd').'.'.$image->getClientOriginalExtension();

            //save original image
            Image::make($image->getRealPath())->save($this->path.'/'.$imageName);

            //save and resize image
            foreach ($this->dimensions as $row) {
                $canvas = Image::canvas($row, $row);
                $resizeImage  = Image::make($image->getRealPath())->resize($row, $row, function($constraint) {
                    $constraint->aspectRatio();
                });
                if (!File::isDirectory($this->path.'/'.$row)) {
                    File::makeDirectory($this->path.'/'.$row);
                }
                $canvas->insert($resizeImage,'center');
                $canvas->save($this->path.'/'.$row.'/'.$imageName);
            }

            Game::create([
                'code'          => $request->code,
                'name'          => $request->name,
                'description'   => $request->description,
                'category'      => $request->category,
                'image'         => $imageName
            ]);
        }else{
            Game::create([
                'code'          => $request->code,
                'name'          => $request->name,
                'description'   => $request->description,
                'category'   => $request->category
            ]);
        }

        return response()->json(array(
            'success' => 'Data ketogori telah berhasil ditambahkan',
            'errors' => false,
        ), 200);
    }

    public function destroy($id){
        $game = Game::findOrfail($id);

        $this->path = public_path('uploads/images');
        $this->dimensions = ['300', '60'];

        File::delete($this->path.'/'.$game->image);

        foreach ($this->dimensions as $row) {
            File::delete($this->path.'/'.$row.'/'.$game->image);
        }

        $game->delete();

        return response()->json(array(
            'success' => 'kategori telah berhasil dihapus!!',
            'errors' => false,
        ), 200);
    }

    public function show($id){
        $data = Game::findOrfail($id);

        return view('dashboard.master-game.detail',compact('data'));
    }
}
