@extends('layouts.app')

@section('content')

<div class="container" style="padding:80px 0; display:grid; grid-template-columns:1.1fr 0.9fr; gap:40px; align-items:center;">

    <div>
        <span style="background:#dcfce7; color:#16a34a; padding:10px 20px; border-radius:30px; font-weight:600;">
            Marketplace khusus Mahasiswa & Anak Kos
        </span>

        <h1 style="font-size:60px; line-height:1.1; margin-top:25px; font-weight:700;">
            Belanja Hemat,<br>
            <span style="
                background:linear-gradient(90deg,#2563eb,#14b8a6,#22c55e);
                -webkit-background-clip:text;
                -webkit-text-fill-color:transparent;
            ">
                Hidup Cerdas
            </span><br>
            Bersama Kostera
        </h1>

        <p style="margin-top:25px; font-size:20px; color:#64748b; max-width:650px;">
            Temukan barang bekas layak pakai di area kampus dan kosmu.
            Transaksi mudah, COD tersedia, serta lebih aman dengan rating dan verifikasi penjual.
        </p>

        <div style="
            margin-top:30px;
            background:white;
            padding:14px;
            border-radius:18px;
            box-shadow:0 10px 30px rgba(15,23,42,0.08);
            display:flex;
            gap:10px;
            max-width:700px;
        ">
            <input type="text" placeholder="Cari barang bekas, misalnya 'kipas angin'..."
                style="flex:1; border:none; outline:none; font-size:15px; padding:12px;">

            <select style="border:none; background:#eff6ff; padding:12px; border-radius:12px; font-weight:600; color:#1d4ed8;">
                <option>Semua Area</option>
                <option>Lowokwaru</option>
                <option>Sigura-Gura</option>
                <option>Tasikmadu</option>
            </select>

            <button style="
                border:none;
                padding:12px 22px;
                border-radius:12px;
                background:linear-gradient(90deg,#2563eb,#22c55e);
                color:white;
                font-weight:700;
                cursor:pointer;
            ">
                Cari Sekarang
            </button>
        </div>

        <div style="margin-top:30px; display:grid; grid-template-columns:repeat(4,1fr); gap:15px;">
            <div class="stat-card"><h3>3.6K+</h3><p>Transaksi/Tahun</p></div>
            <div class="stat-card"><h3>500+</h3><p>Pengguna Aktif</p></div>
            <div class="stat-card"><h3>200+</h3><p>Barang Tersedia</p></div>
            <div class="stat-card"><h3>4.8★</h3><p>Rating Platform</p></div>
        </div>
    </div>

    <div style="
        background:linear-gradient(135deg,#dbeafe,#dcfce7);
        padding:32px;
        border-radius:28px;
        box-shadow:0 10px 30px rgba(15,23,42,0.08);
    ">
        <span style="background:white; color:#16a34a; padding:10px 18px; border-radius:30px; font-weight:700;">
            ✔ Transaksi Aman & Terverifikasi
        </span>

        <div style="margin-top:25px; background:white; padding:24px; border-radius:24px;">
            <h2 style="color:#1d4ed8; margin-bottom:20px;">Barang Terdekat 📍</h2>

            <div class="near-item">
                <span>🪑</span>
                <div>
                    <b>Kursi Belajar Minimalis</b>
                    <p>Lowokwaru • Kondisi 90%</p>
                </div>
                <strong>Rp90K</strong>
            </div>

            <div class="near-item">
                <span>🌀</span>
                <div>
                    <b>Kipas Angin Cosmos</b>
                    <p>Dinoyo • COD Ready</p>
                </div>
                <strong>Rp120K</strong>
            </div>

            <div class="near-item">
                <span>📚</span>
                <div>
                    <b>Rice Cooker Miyako</b>
                    <p>Tasikmadu • Like New</p>
                </div>
                <strong>Rp75K</strong>
            </div>
        </div>

        <div style="margin-top:20px;">
            <span style="background:#dbeafe; color:#1d4ed8; padding:10px 18px; border-radius:30px; font-weight:700;">
                📌 COD Available
            </span>
        </div>
    </div>

</div>

<div class="container" style="padding:20px 0 80px;">

    <h2 class="section-title">Kenapa Kostera?</h2>
    <p class="section-sub">
        Kostera dibuat agar jual beli barang kos lebih aman, cepat, dan mudah untuk mahasiswa.
    </p>

    <div class="grid-3">
        <div class="feature-card">
            <h3>🔒 Sistem Verifikasi Penjual</h3>
            <p>Penjual dapat diverifikasi sehingga transaksi lebih aman dan mengurangi risiko penipuan.</p>
        </div>

        <div class="feature-card">
            <h3>⭐ Rating & Review</h3>
            <p>Pengguna dapat memberi rating setelah transaksi selesai untuk membangun kepercayaan.</p>
        </div>

        <div class="feature-card">
            <h3>📦 COD & Rekber</h3>
            <p>Kostera mendukung COD untuk transaksi langsung di area kampus dan kos.</p>
        </div>
    </div>

    <h2 class="section-title" style="margin-top:60px;">Kategori Populer</h2>
    <p class="section-sub">
        Akses cepat ke kategori yang paling sering dicari mahasiswa.
    </p>

    <div class="grid-3">
        <div class="feature-card">
            <h3>🛏 Peralatan Kos</h3>
            <p>Kasur, lemari, meja lipat, kipas angin, rice cooker, dan dispenser.</p>
        </div>

        <div class="feature-card">
            <h3>💻 Elektronik</h3>
            <p>Laptop, monitor, mouse, headset, printer, charger, dan powerbank.</p>
        </div>

        <div class="feature-card">
            <h3>📚 Buku Kuliah</h3>
            <p>Buku kuliah, catatan, kalkulator, tas, alat tulis, dan modul pembelajaran.</p>
        </div>
    </div>

</div>

<section style="
padding:80px 0;
background:#f8fafc;
">

<div class="container">

    <div style="text-align:center;margin-bottom:50px;">
        <h2 style="
        font-size:40px;
        color:#0f172a;
        margin-bottom:10px;
        ">
            Fitur Interaktif Kostera
        </h2>

        <p style="
        color:#64748b;
        font-size:18px;
        ">
            Jelajahi area kampus, chat penjual langsung, dan lihat ulasan pengguna.
        </p>
    </div>

    <div style="
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
    gap:30px;
    ">

        {{-- MAPS --}}
        <div style="
        background:white;
        border-radius:24px;
        padding:25px;
        box-shadow:0 12px 30px rgba(15,23,42,.08);
        ">

            <h3 style="
            color:#2563eb;
            margin-bottom:20px;
            ">
                📍 Area Kampus
            </h3>

            <iframe
                src="https://maps.google.com/maps?q=ITN%20Malang&t=&z=15&ie=UTF8&iwloc=&output=embed"
                width="100%"
                height="220"
                style="
                border:none;
                border-radius:16px;
                "
                loading="lazy">
            </iframe>

            <p style="
            color:#64748b;
            margin-top:15px;
            ">
                Area transaksi populer mahasiswa sekitar kampus dan kos.
            </p>

        </div>

        {{-- CHAT --}}
        <div style="
        background:white;
        border-radius:24px;
        padding:25px;
        box-shadow:0 12px 30px rgba(15,23,42,.08);
        ">

            <h3 style="
            color:#2563eb;
            margin-bottom:20px;
            ">
                💬 Chat Penjual
            </h3>

            <div style="
            background:#f8fafc;
            padding:15px;
            border-radius:15px;
            margin-bottom:12px;
            width:80%;
            ">
                Halo kak, kursinya masih ada?
            </div>

            <div style="
            background:#22c55e;
            color:white;
            padding:15px;
            border-radius:15px;
            margin-left:auto;
            width:80%;
            margin-bottom:12px;
            ">
                Masih kak 😊 bisa COD sekitar kampus.
            </div>

            <div style="
            background:#f8fafc;
            padding:15px;
            border-radius:15px;
            width:80%;
            ">
                Siap, nanti saya hubungi ya.
            </div>

        </div>

        {{-- ULASAN --}}
        <div style="
        background:white;
        border-radius:24px;
        padding:25px;
        box-shadow:0 12px 30px rgba(15,23,42,.08);
        ">

            <h3 style="
            color:#2563eb;
            margin-bottom:20px;
            ">
                ⭐ Rating & Ulasan
            </h3>

            <div style="margin-bottom:18px;">
                <strong>Andi Mahasiswa UM</strong><br>
                ⭐⭐⭐⭐⭐
                <p style="color:#64748b;">
                    Barang sesuai foto dan penjual ramah.
                </p>
            </div>

            <div style="margin-bottom:18px;">
                <strong>Salsa Anak Kos</strong><br>
                ⭐⭐⭐⭐⭐
                <p style="color:#64748b;">
                    COD cepat dan aman dekat kampus.
                </p>
            </div>

            <div>
                <strong>Raka Teknik</strong><br>
                ⭐⭐⭐⭐⭐
                <p style="color:#64748b;">
                    Harga murah dan kondisi masih bagus.
                </p>
            </div>

        </div>

    </div>

</div>
</section>

<style>

.stat-card{
    background:white;
    padding:18px;
    border-radius:18px;
    box-shadow:0 10px 30px rgba(15,23,42,0.08);
}

.stat-card h3{
    color:#1d4ed8;
    font-size:24px;
    margin-bottom:5px;
}

.stat-card p{
    color:#64748b;
    font-weight:600;
    font-size:14px;
}

.near-item{
    display:grid;
    grid-template-columns:50px 1fr auto;
    gap:15px;
    align-items:center;
    margin-bottom:20px;
}

.near-item span{
    width:45px;
    height:45px;
    border-radius:14px;
    background:linear-gradient(135deg,#2563eb,#22c55e);
    display:flex;
    align-items:center;
    justify-content:center;
}

.near-item p{
    color:#64748b;
    font-size:14px;
    margin-top:3px;
}

.near-item strong{
    color:#16a34a;
    font-size:18px;
}

.section-title{
    font-size:34px;
    font-weight:800;
    margin-bottom:10px;
    color:#0f172a;
}

.section-sub{
    color:#64748b;
    font-size:18px;
    margin-bottom:25px;
}

.grid-3{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
}

.feature-card{
    background:white;
    padding:25px;
    border-radius:22px;
    box-shadow:0 10px 30px rgba(15,23,42,0.08);
    border:1px solid #e2e8f0;
}

.feature-card h3{
    color:#1d4ed8;
    margin-bottom:10px;
}

.feature-card p{
    color:#64748b;
    line-height:1.7;
}

</style>

@endsection