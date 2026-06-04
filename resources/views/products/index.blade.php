@extends('layouts.app')

@section('content')

<div class="container" style="padding:60px 0">

    <h1>Daftar Produk</h1>

    @foreach($products as $product)

        <div style="
            background:white;
            padding:20px;
            margin-top:20px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.05);
        ">

            <h3>{{ $product->nama_barang }}</h3>

            <p>
                Rp {{ number_format($product->harga,0,',','.') }}
            </p>

            <p>
                {{ $product->lokasi }}
            </p>

        </div>

    @endforeach

</div>

@endsection