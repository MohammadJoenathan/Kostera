@extends('layouts.app')

@section('content')

<section style="
    padding:70px 0;
    background:#f8fafc;
    min-height:100vh;
">

<div class="container">

    {{-- DETAIL PRODUK --}}
    <div style="
        background:white;
        border-radius:30px;
        padding:40px;
        box-shadow:0 15px 40px rgba(15,23,42,.08);
        margin-bottom:40px;
    ">

        <div style="
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:50px;
            align-items:center;
        ">

            {{-- FOTO --}}
            <div>

                @if($product->gambar)

                    <img
                        src="{{ asset('storage/'.$product->gambar) }}"
                        alt="{{ $product->nama_barang }}"
                        style="
                            width:100%;
                            height:500px;
                            object-fit:contain;
                            border-radius:25px;
                            background:#f8fafc;
                            border:1px solid #e2e8f0;
                        "
                    >

                @else

                    <div style="
                        height:500px;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        background:#f1f5f9;
                        border-radius:25px;
                        font-size:120px;
                    ">
                        📦
                    </div>

                @endif

            </div>

            {{-- DETAIL --}}
            <div>

                <span style="
                    background:#eff6ff;
                    color:#2563eb;
                    padding:8px 18px;
                    border-radius:999px;
                    font-weight:600;
                    display:inline-block;
                    margin-bottom:15px;
                ">
                    {{ $product->category->nama_kategori ?? 'Kategori' }}
                </span>

                <h1 style="
                    font-size:56px;
                    line-height:1.1;
                    color:#0f172a;
                    margin-bottom:20px;
                    font-weight:800;
                ">
                    {{ $product->nama_barang }}
                </h1>

                <h2 style="
                    color:#16a34a;
                    font-size:42px;
                    margin-bottom:30px;
                    font-weight:800;
                ">
                    Rp {{ number_format($product->harga,0,',','.') }}
                </h2>

                <div style="
                    display:flex;
                    flex-direction:column;
                    gap:18px;
                    font-size:18px;
                    margin-bottom:30px;
                ">

                    <div>
                        📍 <strong>Lokasi:</strong>
                        {{ $product->lokasi }}
                    </div>

                    <div>
                        📦 <strong>Kondisi:</strong>
                        {{ $product->kondisi }}
                    </div>

                    <div>
                        💳 <strong>Metode:</strong>
                        {{ $product->metode_transaksi }}
                    </div>

                </div>

                <p style="
                    color:#64748b;
                    font-size:18px;
                    line-height:1.9;
                    margin-bottom:30px;
                ">
                    {{ $product->deskripsi }}
                </p>

                <a href="https://wa.me/{{ $product->no_whatsapp }}?text={{ urlencode('Halo, saya tertarik dengan barang '.$product->nama_barang.' di Kostera. Apakah masih tersedia?') }}"
                target="_blank"
                style="
                        display:inline-block;
                        background:#22c55e;
                        color:white;
                        text-decoration:none;
                        padding:16px 32px;
                        border-radius:14px;
                        font-weight:700;
                        font-size:18px;
                ">
                    💬 Hubungi Penjual
                </a>

            </div>

        </div>

    </div>

    {{-- MAPS + INFO PENJUAL --}}
    <div style="
        display:grid;
        grid-template-columns:1.6fr 1fr;
        gap:30px;
        margin-bottom:50px;
    ">

        {{-- MAPS --}}
        <div style="
            background:white;
            padding:30px;
            border-radius:25px;
            box-shadow:0 10px 25px rgba(15,23,42,.08);
        ">

            <h2 style="
                color:#2563eb;
                margin-bottom:10px;
                font-size:30px;
            ">
                Lokasi Barang
            </h2>

            <p style="
                color:#64748b;
                margin-bottom:20px;
            ">
                {{ $product->lokasi }}
            </p>

            <iframe
                width="100%"
                height="400"
                style="border:0;border-radius:20px;"
                loading="lazy"
                allowfullscreen
                src="https://www.google.com/maps?q={{ urlencode($product->lokasi.' Malang') }}&output=embed">
            </iframe>

        </div>

        {{-- INFO PENJUAL --}}
        <div style="
            background:white;
            padding:30px;
            border-radius:25px;
            box-shadow:0 10px 25px rgba(15,23,42,.08);
        ">

            <h2 style="
                color:#2563eb;
                margin-bottom:25px;
                font-size:30px;
            ">
                Informasi Penjual
            </h2>

            <div style="
                display:flex;
                flex-direction:column;
                gap:18px;
                font-size:17px;
                color:#334155;
            ">

                <div>
                    👤 <strong>Penjual:</strong><br>
                    {{ $product->user->name ?? 'Pengguna' }}
                </div>

                <div>
                    📂 <strong>Kategori:</strong><br>
                    {{ $product->category->nama_kategori ?? '-' }}
                </div>

                <div>
                    📅 <strong>Diunggah:</strong><br>
                    {{ $product->created_at->format('d M Y') }}
                </div>

                <div>
                    💳 <strong>Transaksi:</strong><br>
                    {{ $product->metode_transaksi }}
                </div>

                <div>
                    📦 <strong>Kondisi:</strong><br>
                    {{ $product->kondisi }}
                </div>

            </div>

        </div>

    </div>

    {{-- BARANG LAINNYA --}}
    <div style="
        background:white;
        padding:35px;
        border-radius:25px;
        box-shadow:0 10px 25px rgba(15,23,42,.08);
    ">

        <h2 style="
            font-size:34px;
            color:#0f172a;
            margin-bottom:25px;
        ">
            Barang Lainnya
        </h2>

        <div style="
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:20px;
        ">

            @foreach(
                \App\Models\Product::where('id','!=',$product->id)
                ->latest()
                ->take(4)
                ->get()
                as $item
            )

            <a href="{{ route('products.show',$item->id) }}"
               style="
                    text-decoration:none;
                    color:inherit;
               ">

                <div style="
                    border:1px solid #e2e8f0;
                    border-radius:18px;
                    overflow:hidden;
                    transition:.3s;
                ">

                    @if($item->gambar)

                        <img
                            src="{{ asset('storage/'.$item->gambar) }}"
                            style="
                                width:100%;
                                height:180px;
                                object-fit:cover;
                            "
                        >

                    @else

                        <div style="
                            height:180px;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            background:#f1f5f9;
                            font-size:50px;
                        ">
                            📦
                        </div>

                    @endif

                    <div style="padding:15px;">

                        <h4 style="
                            color:#0f172a;
                            margin-bottom:10px;
                        ">
                            {{ $item->nama_barang }}
                        </h4>

                        <div style="
                            color:#16a34a;
                            font-weight:700;
                        ">
                            Rp {{ number_format($item->harga,0,',','.') }}
                        </div>

                    </div>

                </div>

            </a>

            @endforeach

        </div>

    </div>

</div>

</section>

@endsection