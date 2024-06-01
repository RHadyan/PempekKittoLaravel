<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function admin(){
        return view('admin.index');
    }
    public function pempek(){
        return view('admin.pempek');
    }
    
}
