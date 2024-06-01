<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class MenuController extends Controller
{
    public function admin(){
        return view('admin.index');
    }

    public function pempek(){
        $pempek = DB::table('menus')->get();
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

        return redirect(route('admin.pempek'));
    }

    public function deletepempek(Menu $menu){

    $gambarPath = $menu->gambar;

    if (Storage::disk('public')->exists(str_replace('/storage/', '', $gambarPath))) {
        Storage::disk('public')->delete(str_replace('/storage/', '', $gambarPath));
    }

        $menu -> delete();
        return redirect(route('admin.pempek'))->with('success', 'Deleted.');
    }
    

    public function showProduct(){
        return view('product');

    }


}
