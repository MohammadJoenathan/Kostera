@extends('layouts.app')

@section('content')

<div class="container" style="padding:60px 0;">

    <h1 style="font-size:42px; color:#0f172a;">Kategori Barang</h1>
    <p style="color:#64748b; margin-top:10px; font-size:18px;">
        Cari barang berdasarkan kategori yang sesuai kebutuhan kos dan kuliah.
    </p>

    <div style="
        display:grid;
        grid-template-columns:repeat(3,1fr);
        gap:22px;
        margin-top:35px;
    ">

        @php
            $categories = [
                ['icon'=>'🛏', 'nama'=>'Peralatan Kos', 'desc'=>'Kasur, lemari, meja lipat, kompor listrik, rice cooker, dispenser.'],
                ['icon'=>'💻', 'nama'=>'Elektronik', 'desc'=>'Laptop, monitor, headset, keyboard, printer, adaptor, charger.'],
                ['icon'=>'🪑', 'nama'=>'Furniture', 'desc'=>'Kursi, meja, rak, lemari sepatu, sofa kecil, karpet kos.'],
                ['icon'=>'👕', 'nama'=>'Fashion', 'desc'=>'Jaket, sepatu, tas, pakaian thrift, hoodie kampus.'],
                ['icon'=>'📚', 'nama'=>'Buku Kuliah', 'desc'=>'Buku teknik informatika, ekonomi, hukum, kedokteran, modul.'],
                ['icon'=>'🚲', 'nama'=>'Kendaraan', 'desc'=>'Sepeda, helm, aksesoris motor, jas hujan, kunci ganda.'],
            ];
        @endphp

        @foreach ($categories as $category)
            <div style="
                background:white;
                padding:28px;
                border-radius:22px;
                box-shadow:0 10px 30px rgba(15,23,42,0.08);
                border:1px solid #e2e8f0;
                transition:0.2s;
            ">
                <div style="
                    width:60px;
                    height:60px;
                    border-radius:18px;
                    background:linear-gradient(135deg,#2563eb,#22c55e);
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    font-size:30px;
                    margin-bottom:18px;
                ">
                    {{ $category['icon'] }}
                </div>

                <h3 style="color:#1d4ed8; font-size:22px;">
                    {{ $category['nama'] }}
                </h3>

                <p style="color:#64748b; line-height:1.8; margin-top:10px;">
                    {{ $category['desc'] }}
                </p>
            </div>
        @endforeach

    </div>

</div>

@endsection