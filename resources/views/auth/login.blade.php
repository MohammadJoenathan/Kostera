@extends('layouts.app')

@section('content')

<section style="
    min-height:85vh;
    display:flex;
    align-items:center;
    padding:60px 0;
">

    <div class="container">

        <div style="
            max-width:1100px;
            margin:auto;
        ">

            <div style="
                display:grid;
                grid-template-columns:1.1fr 0.9fr;
                gap:35px;
                align-items:center;
            ">

                <!-- KIRI -->
                <div>

                    <span style="
                        background:#dcfce7;
                        color:#16a34a;
                        padding:12px 20px;
                        border-radius:999px;
                        font-weight:600;
                        display:inline-block;
                    ">
                        Marketplace Mahasiswa & Anak Kos
                    </span>

                    <h1 style="
                        font-size:48px;
                        line-height:1.2;
                        margin:25px 0;
                        font-weight:800;
                        color:#0f172a;
                    ">
                        Masuk ke

                        <span style="
                            background:linear-gradient(135deg,#2563eb,#22c55e);
                            -webkit-background-clip:text;
                            -webkit-text-fill-color:transparent;
                        ">
                            Kostera
                        </span>
                    </h1>

                    <p style="
                        color:#64748b;
                        font-size:18px;
                        line-height:1.8;
                        max-width:500px;
                    ">
                        Temukan barang bekas berkualitas dengan harga hemat khusus mahasiswa dan anak kos. Jual dan beli barang dengan mudah, aman, dan terpercaya.
                    </p>

                </div>

                <!-- KANAN -->
                <div style="
                    background:white;
                    padding:35px;
                    border-radius:25px;
                    box-shadow:0 15px 40px rgba(0,0,0,.08);
                ">

                    <div style="text-align:center;margin-bottom:25px;">
                        
                        <h2 style="
                            font-size:30px;
                            color:#0f172a;
                        ">
                            Login Akun
                        </h2>

                        <p style="color:#64748b;">
                            Masuk untuk melanjutkan ke Kostera
                        </p>

                    </div>

                    @if ($errors->any())
                        <div style="
                            background:#fee2e2;
                            color:#991b1b;
                            padding:12px;
                            border-radius:10px;
                            margin-bottom:15px;
                        ">
                            Email atau password tidak sesuai.
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <label style="font-weight:600;">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            required
                            autofocus
                            placeholder="Masukkan email"
                            style="
                                width:100%;
                                padding:15px;
                                margin-top:8px;
                                margin-bottom:15px;
                                border:1px solid #cbd5e1;
                                border-radius:12px;
                            "
                        >

                        <label style="font-weight:600;">
                            Password
                        </label>

                        <input
                            type="password"
                            name="password"
                            required
                            placeholder="Masukkan password"
                            style="
                                width:100%;
                                padding:15px;
                                margin-top:8px;
                                margin-bottom:20px;
                                border:1px solid #cbd5e1;
                                border-radius:12px;
                            "
                        >

                        <button
                            type="submit"
                            style="
                                width:100%;
                                padding:15px;
                                border:none;
                                border-radius:14px;
                                background:linear-gradient(135deg,#2563eb,#22c55e);
                                color:white;
                                font-weight:700;
                                cursor:pointer;
                                font-size:16px;
                            "
                        >
                            Login
                        </button>

                    </form>

                    <p style="
                        text-align:center;
                        margin-top:20px;
                        color:#64748b;
                    ">
                        Belum punya akun?

                        <a
                            href="{{ route('register') }}"
                            style="
                                color:#2563eb;
                                text-decoration:none;
                                font-weight:700;
                            "
                        >
                            Daftar Sekarang
                        </a>
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection