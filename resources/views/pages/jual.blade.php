@extends('layouts.app')

@section('content')

<section style="padding:70px 0;background:#f8fafc;min-height:80vh;">
    <div class="container">

        <h1 style="
            font-size:42px;
            color:#0f172a;
            margin-bottom:10px;
        ">
            Jual Barang
        </h1>

        <p style="
            color:#64748b;
            margin-bottom:35px;
        ">
            Upload barang bekas layak pakai milikmu dan temukan pembeli dengan cepat.
        </p>

        <form action="{{ route('products.store') }}"
              method="POST"
              enctype="multipart/form-data"
              style="
                background:white;
                padding:35px;
                border-radius:24px;
                box-shadow:0 12px 30px rgba(15,23,42,.08);
              ">
            @csrf

            <div style="
                display:grid;
                grid-template-columns:1fr 1fr;
                gap:40px;
            ">

                {{-- KIRI --}}
                <div>

                    <h3 style="margin-bottom:15px;">
                        Foto Barang
                    </h3>

                    <div id="preview-box"
                         style="
                            height:320px;
                            background:#e2e8f0;
                            border-radius:20px;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            font-size:80px;
                            overflow:hidden;
                         ">
                        📦
                    </div>

                    <input
                        type="file"
                        name="gambar"
                        id="gambar"
                        accept="image/*"
                        onchange="previewImage(event)"
                        style="
                            margin-top:15px;
                            width:100%;
                            padding:12px;
                            border:2px dashed #2563eb;
                            border-radius:12px;
                        "
                    >

                    <p style="
                        color:#64748b;
                        margin-top:10px;
                    ">
                        Upload foto barang agar lebih cepat terjual.
                    </p>

                </div>

                {{-- KANAN --}}
                <div>

                    <label>Nama Barang</label>
                    <input
                        type="text"
                        name="nama_barang"
                        required
                        class="form-input"
                    >

                    <label>Kategori</label>
                    <select
                        name="category_id"
                        required
                        class="form-input"
                    >
                        <option value="">Pilih Kategori</option>

                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->nama_kategori }}
                            </option>
                        @endforeach

                    </select>

                    <label>Harga (Rp)</label>
                    <input
                        type="number"
                        name="harga"
                        required
                        class="form-input"
                    >

                    <label>Lokasi</label>
                    <input
                        type="text"
                        name="lokasi"
                        required
                        class="form-input"
                    >

                    <label>Kondisi Barang</label>
                    <select
                        name="kondisi"
                        required
                        class="form-input"
                    >
                        <option>Seperti Baru</option>
                        <option>Bekas Layak Pakai</option>
                        <option>Perlu Perbaikan</option>
                    </select>

                    <label>Metode Transaksi</label>
                    <select
                        name="metode_transaksi"
                        required
                        class="form-input"
                    >
                        <option>COD</option>
                        <option>Transfer</option>
                        <option>COD & Transfer</option>
                    </select>

                    <label>Nomor WhatsApp Penjual</label>
                    <input
                        type="text"
                        name="no_whatsapp"
                        placeholder="6281234567890"
                        required
                        class="form-input"
                    >
                    <label>Deskripsi</label>
                    <textarea
                        name="deskripsi"
                        rows="5"
                        required
                        class="form-input"
                    ></textarea>

                </div>

            </div>

            <div style="
                margin-top:35px;
                display:flex;
                justify-content:flex-end;
            ">
                <button
                    type="submit"
                    style="
                        background:linear-gradient(90deg,#2563eb,#22c55e);
                        color:white;
                        border:none;
                        padding:15px 30px;
                        border-radius:12px;
                        font-weight:700;
                        cursor:pointer;
                    "
                >
                    Upload Barang
                </button>
            </div>

        </form>

    </div>
</section>

<style>

.form-input{
    width:100%;
    padding:14px;
    margin-top:8px;
    margin-bottom:20px;
    border:1px solid #cbd5e1;
    border-radius:12px;
    outline:none;
    font-size:15px;
}

.form-input:focus{
    border-color:#2563eb;
}

label{
    font-weight:700;
    color:#0f172a;
}

</style>

<script>

function previewImage(event)
{
    const box = document.getElementById('preview-box');

    const file = event.target.files[0];

    if(file)
    {
        const reader = new FileReader();

        reader.onload = function(e)
        {
            box.innerHTML =
            `<img src="${e.target.result}"
                  style="
                    width:100%;
                    height:100%;
                    object-fit:cover;
                  ">`;
        }

        reader.readAsDataURL(file);
    }
}

</script>

@endsection