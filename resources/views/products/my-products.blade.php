@extends('layouts.app')

@section('content')

<section style="padding:70px 0;background:#f8fafc;min-height:80vh;">
    <div class="container">

        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:35px;">
            <div>
                <h1 style="font-size:42px;color:#0f172a;margin-bottom:8px;">
                    Barang Saya
                </h1>
                <p style="color:#64748b;font-size:17px;">
                    Kelola barang yang sudah kamu upload di Kostera.
                </p>
            </div>

            <a href="{{ route('products.create') }}" style="
                background:linear-gradient(90deg,#2563eb,#22c55e);
                color:white;
                padding:14px 22px;
                border-radius:14px;
                text-decoration:none;
                font-weight:700;
            ">
                + Tambah Barang
            </a>
        </div>

        <div style="
            display:grid;
            grid-template-columns:repeat(auto-fill,minmax(310px,1fr));
            gap:28px;
        ">

            @forelse($products as $product)

                <div style="
                    background:white;
                    border-radius:24px;
                    overflow:hidden;
                    box-shadow:0 12px 30px rgba(15,23,42,0.08);
                    border:1px solid #e2e8f0;
                ">

                    @if($product->gambar)
                        <img src="{{ asset('storage/'.$product->gambar) }}"
                             style="width:100%;height:210px;object-fit:cover;">
                    @else
                        <div style="
                            height:210px;
                            background:linear-gradient(135deg,#dbeafe,#dcfce7);
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            font-size:62px;
                        ">
                            📦
                        </div>
                    @endif

                    <div style="padding:22px;">

                        <div style="
                            display:flex;
                            justify-content:space-between;
                            gap:12px;
                            align-items:flex-start;
                        ">
                            <h3 style="font-size:21px;color:#0f172a;line-height:1.4;">
                                {{ $product->nama_barang }}
                            </h3>

                            <span style="
                                background:#ecfdf5;
                                color:#16a34a;
                                padding:6px 10px;
                                border-radius:999px;
                                font-size:12px;
                                font-weight:700;
                                white-space:nowrap;
                            ">
                                {{ $product->metode_transaksi }}
                            </span>
                        </div>

                        <p style="color:#64748b;margin-top:10px;line-height:1.6;">
                            {{ Str::limit($product->deskripsi, 80) }}
                        </p>

                        <h3 style="color:#16a34a;font-size:24px;margin-top:14px;">
                            Rp {{ number_format($product->harga,0,',','.') }}
                        </h3>

                        <div style="
                            display:flex;
                            justify-content:space-between;
                            align-items:center;
                            margin-top:14px;
                            color:#64748b;
                            font-size:14px;
                        ">
                            <span>📍 {{ $product->lokasi }}</span>
                            <span>{{ $product->kondisi }}</span>
                        </div>

                        <div style="
                            display:flex;
                            gap:10px;
                            margin-top:20px;
                        ">
                            <a href="{{ route('products.show',$product->id) }}" style="
                                flex:1;
                                text-align:center;
                                background:#eff6ff;
                                color:#2563eb;
                                padding:11px;
                                border-radius:12px;
                                text-decoration:none;
                                font-weight:700;
                            ">
                                Detail
                            </a>

                            <a href="{{ route('products.edit',$product->id) }}" style="
                                flex:1;
                                text-align:center;
                                background:#2563eb;
                                color:white;
                                padding:11px;
                                border-radius:12px;
                                text-decoration:none;
                                font-weight:700;
                            ">
                                Edit
                            </a>

                            <form action="{{ route('products.destroy',$product->id) }}"
                                method="POST"
                                class="delete-form"
                                style="flex:1;">
                                @csrf
                                @method('DELETE')

                                <button type="submit" style="
                                    width:100%;
                                    background:#ef4444;
                                    color:white;
                                    border:none;
                                    padding:11px;
                                    border-radius:12px;
                                    font-weight:700;
                                    cursor:pointer;
                                ">
                                    Hapus
                                </button>
                            </form>
                        </div>

                    </div>
                </div>

            @empty

                <div style="
                    grid-column:1/-1;
                    background:white;
                    padding:60px;
                    border-radius:24px;
                    text-align:center;
                    box-shadow:0 12px 30px rgba(15,23,42,0.08);
                ">
                    <h2 style="color:#0f172a;">Belum ada barang</h2>
                    <p style="color:#64748b;margin:12px 0 25px;">
                        Mulai upload barang bekasmu agar bisa dilihat mahasiswa lain.
                    </p>

                    <a href="{{ route('products.create') }}" style="
                        background:linear-gradient(90deg,#2563eb,#22c55e);
                        color:white;
                        padding:14px 24px;
                        border-radius:14px;
                        text-decoration:none;
                        font-weight:700;
                    ">
                        Upload Barang Pertama
                    </a>
                </div>

            @endforelse

        </div>

    </div>
</section>

@endsection