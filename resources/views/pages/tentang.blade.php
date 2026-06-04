@extends('layouts.app')

@section('content')

<div class="container" style="padding:60px 0;">

    <h1 style="font-size:42px; color:#0f172a;">Tentang Kostera</h1>

    <p style="color:#64748b; margin-top:15px; font-size:18px; line-height:1.8; max-width:900px;">
        Kostera adalah marketplace digital berbasis website yang dirancang khusus
        untuk mahasiswa dan anak kos dalam melakukan jual beli barang bekas layak pakai
        secara mudah, hemat, aman, dan ramah lingkungan.
    </p>

    <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:22px; margin-top:35px;">

        <div class="about-card">
            <h3>🎯 Visi</h3>
            <p>
                Menjadi marketplace digital terpercaya bagi anak kos dan mahasiswa
                untuk melakukan jual beli barang secara mudah, hemat, dan ramah lingkungan.
            </p>
        </div>

        <div class="about-card">
            <h3>🚀 Misi</h3>
            <p>
                Menyediakan platform jual beli yang praktis, aman, serta membantu mahasiswa
                mendapatkan barang kebutuhan kos dengan harga terjangkau.
            </p>
        </div>

        <div class="about-card">
            <h3>🌱 Nilai Kostera</h3>
            <p>
                Mendukung konsep reuse atau penggunaan kembali barang agar barang bekas
                tetap bermanfaat dan mengurangi limbah.
            </p>
        </div>

    </div>

    <div style="
        margin-top:40px;
        background:white;
        padding:30px;
        border-radius:24px;
        box-shadow:0 10px 30px rgba(15,23,42,0.08);
        border:1px solid #e2e8f0;
    ">
        <h2 style="color:#1d4ed8; margin-bottom:15px;">Mengapa Kostera Dibuat?</h2>

        <p style="color:#64748b; line-height:1.9;">
            Banyak mahasiswa membutuhkan perlengkapan kos seperti meja, kursi, kipas angin,
            rice cooker, buku kuliah, hingga barang elektronik kecil dengan harga terjangkau.
            Di sisi lain, banyak mahasiswa tingkat akhir atau penghuni kos yang memiliki
            barang layak pakai namun tidak digunakan lagi. Kostera hadir untuk mempertemukan
            penjual dan pembeli dalam satu platform yang lebih terarah, aman, dan sesuai
            kebutuhan mahasiswa.
        </p>
    </div>

</div>

<style>
.about-card{
    background:white;
    padding:28px;
    border-radius:22px;
    box-shadow:0 10px 30px rgba(15,23,42,0.08);
    border:1px solid #e2e8f0;
}

.about-card h3{
    color:#1d4ed8;
    margin-bottom:12px;
    font-size:22px;
}

.about-card p{
    color:#64748b;
    line-height:1.8;
}
</style>

@endsection