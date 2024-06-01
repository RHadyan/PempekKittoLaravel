<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_produk';

    protected $fillable = [
        'nama_produk',
        'deskripsi_produk',
        'harga',
        'kode_kategori',
        'stok',
        'gambar'
    ];
}
