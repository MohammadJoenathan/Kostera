<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

public function jelajahi()
{
    $query = \App\Models\Product::query();

    if (request('search')) {
        $query->where('nama_barang', 'like', '%' . request('search') . '%');
    }

    if (request('lokasi')) {
        if (request('lokasi') == 'dekat') {
            $query->where('lokasi', 'like', '%Lowokwaru%');
        } elseif (request('lokasi') == 'kos') {
            $query->where('lokasi', 'like', '%Dinoyo%');
        }
    }

    if(request('harga_min') !== null && request('harga_min') !== '') {
        $query->where('harga','>=',request('harga_min'));
    }

    if(request('harga_max') !== null && request('harga_max') !== '') {
        $query->where('harga','<=',request('harga_max'));
    }

    if (request('kondisi')) {
        $query->whereIn('kondisi', request('kondisi'));
    }

    if (request('transaksi')) {
        $query->whereIn('metode_transaksi', request('transaksi'));
    }

    if (request('sort') == 'termurah') {
        $query->orderBy('harga', 'asc');
    } elseif (request('sort') == 'termahal') {
        $query->orderBy('harga', 'desc');
    } else {
        $query->latest();
    }

    $products = $query->get();

    return view('pages.jelajahi', compact('products'));
}
    public function kategori()
    {
        return view('pages.kategori');
    }

    public function jual()
    {
        return view('pages.jual');
    }

    public function tentang()
    {
        return view('pages.tentang');
    }

    public function bantuan()
    {
        return view('pages.bantuan');
    }
}