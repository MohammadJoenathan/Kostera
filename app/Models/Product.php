<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    'user_id',
    'category_id',
    'nama_barang',
    'harga',
    'deskripsi',
    'gambar',
    'lokasi',
    'kondisi',
    'metode_transaksi',
    'no_whatsapp',
];

    public function category()
{
    return $this->belongsTo(Category::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}
}