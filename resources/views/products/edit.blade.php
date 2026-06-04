@extends('layouts.app')

@section('content')

<section style="padding:70px 0;background:#f8fafc;min-height:80vh;">
    <div class="container">

        <a href="{{ route('products.my') }}" style="color:#2563eb;text-decoration:none;font-weight:700;">
            ← Kembali
        </a>

        <h1 style="font-size:42px;color:#0f172a;margin-top:20px;">Edit Barang</h1>
        <p style="color:#64748b;margin-bottom:30px;">
            Perbarui informasi barang yang ingin kamu jual di Kostera.
        </p>

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data"
              style="background:white;padding:35px;border-radius:24px;box-shadow:0 12px 30px rgba(15,23,42,.08);">
            @csrf
            @method('PUT')

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:35px;">

                <div>
                    <label style="font-weight:700;">Foto Barang</label>

                    @if($product->gambar)
                        <img src="{{ asset('storage/'.$product->gambar) }}"
                             style="width:100%;height:230px;object-fit:cover;border-radius:16px;margin:12px 0;">
                    @else
                        <div style="height:230px;background:#e2e8f0;border-radius:16px;display:flex;align-items:center;justify-content:center;font-size:60px;margin:12px 0;">
                            📦
                        </div>
                    @endif

                    <input type="file" name="gambar" accept="image/*"
                           style="width:100%;padding:14px;border:1px dashed #2563eb;border-radius:14px;">

                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" value="{{ $product->nama_barang }}" required class="form-input">

                    <label>Kategori</label>
                    <select name="category_id" required class="form-input">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->nama_kategori }}
                            </option>
                        @endforeach
                    </select>

                    <label>Harga</label>
                    <input type="number" name="harga" value="{{ $product->harga }}" required class="form-input">
                </div>

                <div>
                    <label>Lokasi</label>
                    <input type="text" name="lokasi" value="{{ $product->lokasi }}" required class="form-input">

                    <label>Nomor WhatsApp</label>
                    <input
                        type="text"
                        name="no_whatsapp"
                        value="{{ $product->no_whatsapp }}"
                        required
                        class="form-input"
                        placeholder="6281234567890"
                    >

                    <label>Kondisi</label>
                    <select name="kondisi" required class="form-input">
                        <option value="Seperti Baru" {{ $product->kondisi == 'Seperti Baru' ? 'selected' : '' }}>Seperti Baru</option>
                        <option value="Bekas Layak Pakai" {{ $product->kondisi == 'Bekas Layak Pakai' ? 'selected' : '' }}>Bekas Layak Pakai</option>
                        <option value="Perlu Perbaikan" {{ $product->kondisi == 'Perlu Perbaikan' ? 'selected' : '' }}>Perlu Perbaikan</option>
                    </select>

                    <label>Metode Transaksi</label>
                    <select name="metode_transaksi" required class="form-input">
                        <option value="COD" {{ $product->metode_transaksi == 'COD' ? 'selected' : '' }}>COD</option>
                        <option value="Transfer" {{ $product->metode_transaksi == 'Transfer' ? 'selected' : '' }}>Transfer</option>
                        <option value="COD & Transfer" {{ $product->metode_transaksi == 'COD & Transfer' ? 'selected' : '' }}>COD & Transfer</option>
                    </select>

                    <label>Deskripsi</label>
                    <textarea name="deskripsi" rows="8" required class="form-input">{{ $product->deskripsi }}</textarea>
                </div>

            </div>

            <div style="margin-top:30px;display:flex;justify-content:flex-end;gap:12px;">
                <a href="{{ route('products.my') }}"
                   style="background:#e2e8f0;color:#0f172a;padding:14px 24px;border-radius:12px;text-decoration:none;font-weight:700;">
                    Batal
                </a>

                <button type="submit"
                        style="background:linear-gradient(90deg,#2563eb,#22c55e);color:white;border:none;padding:14px 26px;border-radius:12px;font-weight:700;cursor:pointer;">
                    Update Barang
                </button>
            </div>
        </form>

    </div>
</section>

<style>
.form-input{
    width:100%;
    padding:14px;
    margin:8px 0 20px;
    border:1px solid #cbd5e1;
    border-radius:12px;
    outline:none;
}
label{
    font-weight:700;
    color:#0f172a;
}
</style>

@endsection