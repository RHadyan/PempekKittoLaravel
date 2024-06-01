<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function admin(){
        return view('admin.index');
    }

    public function pempek(){
        $pempek = DB::table('menus')->where('kode_kategori', '=', 'Pempek')->get();
        return view('admin.pempek')->with('pempek', $pempek);
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

        // dd($data);
        $newMenu =  Menu::create($data);

        return redirect(route('admin.pempek'));
    }

    public function editpempek(Menu $menu){
        dd($menu);

    }

    public function deletepempek(Menu $menu){
        $menu -> delete();
        return redirect(route('admin.pempek'))->with('success', 'Deleted.');
    }
    
}
