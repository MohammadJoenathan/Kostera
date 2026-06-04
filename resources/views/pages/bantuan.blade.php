@extends('layouts.app')

@section('content')

<div class="container" style="padding:60px 0;">

    <h1 style="font-size:42px; color:#0f172a;">Bantuan & FAQ</h1>

    <p style="color:#64748b; margin-top:10px; font-size:18px;">
        Temukan jawaban cepat tentang cara menggunakan Kostera.
    </p>

    <div style="
        display:grid;
        grid-template-columns:repeat(3,1fr);
        gap:22px;
        margin-top:35px;
    ">

        <div class="faq-card">
            <h3>Bagaimana cara membeli barang?</h3>
            <p>
                Pilih barang di halaman Jelajahi, cek detail barang dan rating penjual,
                lalu hubungi penjual untuk melakukan transaksi COD atau transfer.
            </p>
        </div>

        <div class="faq-card">
            <h3>Bagaimana cara menjual barang?</h3>
            <p>
                Masuk ke halaman Jual Barang, isi data barang seperti nama, kategori,
                harga, lokasi, kondisi, dan deskripsi, lalu klik Upload Barang.
            </p>
        </div>

        <div class="faq-card">
            <h3>Apakah Kostera aman?</h3>
            <p>
                Kostera mendukung sistem rating, review, dan rekomendasi transaksi COD
                agar pembeli dan penjual merasa lebih aman.
            </p>
        </div>

        <div class="faq-card">
            <h3>Apa saja barang yang bisa dijual?</h3>
            <p>
                Barang kos, elektronik kecil, buku kuliah, furniture, fashion, dan barang
                lain yang masih layak pakai.
            </p>
        </div>

        <div class="faq-card">
            <h3>Apakah bisa COD?</h3>
            <p>
                Bisa. Kostera mendukung transaksi COD di area kampus atau kos agar pembeli
                dapat mengecek barang secara langsung.
            </p>
        </div>

        <div class="faq-card">
            <h3>Bagaimana jika ada penipuan?</h3>
            <p>
                Pengguna dapat melaporkan akun atau barang bermasalah kepada admin agar
                dapat ditindaklanjuti.
            </p>
        </div>

    </div>

</div>

<style>
.faq-card{
    background:white;
    padding:28px;
    border-radius:22px;
    box-shadow:0 10px 30px rgba(15,23,42,0.08);
    border:1px solid #e2e8f0;
}

.faq-card h3{
    color:#1d4ed8;
    margin-bottom:12px;
    font-size:21px;
}

.faq-card p{
    color:#64748b;
    line-height:1.8;
}
</style>

@endsection