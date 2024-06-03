<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class MenuController extends Controller
{ 
    public function halamanUser(){
        $pempek = DB::table('menus')->where('kode_kategori','=','Pempek')->orderBy('harga', 'asc')->first() ?? (object)[
            'harga' => 0,
        ];
;
        $tekwan = DB::table('menus')->where('kode_kategori','=','Tekwan')->orderBy('harga', 'asc')->first() ?? (object)[
            'harga' => 0,
        ];;
        $mie = DB::table('menus')->where('kode_kategori','=','Mie')->orderBy('harga', 'asc')->first() ?? (object)[
            'harga' => 0,
        ];;
        
        return view('index', compact('pempek', 'tekwan', 'mie'));



    }
    public function admin(){
        $menukosong = DB::table('menus')->where('stok',0)->count();
        $totalMenu =  DB::table('menus')->count();
        $pempek =  DB::table('menus')->where('kode_kategori','Pempek')->count();
        $tekwan =  DB::table('menus')->where('kode_kategori','Tekwan')->count();
        $mie =  DB::table('menus')->where('kode_kategori','Mie')->count();



        return view('admin.index',compact('menukosong','totalMenu','pempek','tekwan','mie'));
    }

    public function pempek(){
        $pempek = DB::table('menus')->where('kode_kategori','=','Pempek')->get();
        return view('admin.pempek')->with('pempek', $pempek);
    }
    public function tekwan(){
        $tekwan = DB::table('menus')->where('kode_kategori','=','Tekwan')->get();
        return view('admin.tekwan')->with('tekwan', $tekwan);
    }
    public function mie(){
        $mie = DB::table('menus')->where('kode_kategori','=','Mie')->get();
        return view('admin.mie')->with('mie', $mie);
    }

    public function savepempek(Request $request){
        $request_data = $request->all();
        $file_name = time().$request->file('gambar')->getClientOriginalName();
        $path = $request->file('gambar') -> storeAs('images', $file_name, 'public');

        $data = $request->validate([
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
            'harga' => 'required',
            'kode_kategori' => 'required',
            'stok' => 'required',
            'gambar' => 'nullable'
        ]);
        $data["gambar"] = '/storage/'.$path;
        
        $data["kode_kategori"] = $request->kode_kategori;

        // dd($data);
        $newMenu =  Menu::create($data);
        
        if ($data["kode_kategori"]  == 'Mie') {
            return redirect(route('admin.mie'));

        }elseif ($data["kode_kategori"] == 'Tekwan') {
            return redirect(route('admin.tekwan'));

        }else {
            return redirect(route('admin.pempek'));
        }
       
    }

    public function updatepempek(Request $request,$kode_pempek){
        $menus = Menu::findOrFail($kode_pempek);

        $path = $menus->gambar;
        
        if ($request->file('gambar') != null) {

            if (Storage::disk('public')->exists(str_replace('/storage/', '', $path))) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $path));
            }

            $file_name = time() . $request->file('gambar')->getClientOriginalName();

            $path = $request->file('gambar')->storeAs('images', $file_name, 'public');

            $path = '/storage/' . $path;
        }

        
        $menus->update([
            'nama_produk'=>$request->nama_produk,
            'deskripsi_produk'=>$request->deskripsi_produk,
            'harga'=>$request->harga,
            'kode_kategori'=>$request->kode_kategori,
            'stok'=>$request->stok,
            'gambar'=>$path,
        ]);

        $menus["kode_kategori"] = $request->kode_kategori;
        if ($menus["kode_kategori"]  == 'Mie') {
            return redirect(route('admin.mie'));

        }elseif ($menus["kode_kategori"] == 'Tekwan') {
            return redirect(route('admin.tekwan'));
            
        }else {
            return redirect(route('admin.pempek'));
        }

        // return redirect(route('admin.pempek'));
    }

    public function deletepempek(Request $request,Menu $menu){

    $gambarPath = $menu->gambar;

    if (Storage::disk('public')->exists(str_replace('/storage/', '', $gambarPath))) {
        Storage::disk('public')->delete(str_replace('/storage/', '', $gambarPath));
    }

        $menu -> delete();
        $menu-> kode_kategori;
        if ($menu["kode_kategori"]  == 'Mie') {
            return redirect(route('admin.mie'));

        }elseif ($menu["kode_kategori"] == 'Tekwan') {
            return redirect(route('admin.tekwan'));
            
        }else {
            return redirect(route('admin.pempek'));
        }
        // return redirect(route('admin.pempek'))->with('success', 'Deleted.');
    }
    

    public function showProduct($kategori){
        $menus= DB::table('menus')->where('kode_kategori','=',$kategori)->get();
        
        return view('product', ['kategori' => $kategori])->with('menus', $menus);


    }


}
