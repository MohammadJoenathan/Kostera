<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('pages.jual', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'category_id' => 'required',
            'harga' => 'required|numeric',
            'lokasi' => 'required',
            'kondisi' => 'required',
            'metode_transaksi' => 'required',
            'deskripsi' => 'required',
            'no_whatsapp' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambarPath = null;

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('products', 'public');
        }

        Product::create([
            'user_id' => Auth::id(),
            'category_id' => $request->category_id,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'lokasi' => $request->lokasi,
            'kondisi' => $request->kondisi,
            'metode_transaksi' => $request->metode_transaksi,
            'deskripsi' => $request->deskripsi,
            'no_whatsapp' => $request->no_whatsapp,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('products.index')->with('success', 'Barang berhasil diupload!');
    }

    public function show(int $id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function myProducts()
    {
        $products = Product::where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('products.my-products', compact('products'));
    }

    public function edit(int $id)
    {
        $product = Product::findOrFail($id);

        if ($product->user_id != Auth::id()) {
            abort(403);
        }

        $categories = Category::all();

        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, int $id)
    {
        $product = Product::findOrFail($id);

        if ($product->user_id != Auth::id()) {
            abort(403);
        }

        $request->validate([
            'nama_barang' => 'required',
            'category_id' => 'required',
            'harga' => 'required|numeric',
            'lokasi' => 'required',
            'kondisi' => 'required',
            'metode_transaksi' => 'required',
            'deskripsi' => 'required',
            'no_whatsapp' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambarPath = $product->gambar;

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('products', 'public');
        }

        $product->update([
            'nama_barang' => $request->nama_barang,
            'category_id' => $request->category_id,
            'harga' => $request->harga,
            'lokasi' => $request->lokasi,
            'kondisi' => $request->kondisi,
            'metode_transaksi' => $request->metode_transaksi,
            'deskripsi' => $request->deskripsi,
            'no_whatsapp' => $request->no_whatsapp,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('products.my')->with('success', 'Barang berhasil diperbarui');
    }

    public function destroy(int $id)
    {
        $product = Product::findOrFail($id);

        if ($product->user_id != Auth::id()) {
            abort(403);
        }

        $product->delete();

        return redirect()
            ->route('products.my')
            ->with('success', 'Barang berhasil dihapus');
    }
}