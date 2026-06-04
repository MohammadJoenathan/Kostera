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
                        background:#dbeafe;
                        color:#2563eb;
                        padding:12px 20px;
                        border-radius:999px;
                        font-weight:600;
                        display:inline-block;
                    ">
                        Bergabung Bersama Kostera
                    </span>

                    <h1 style="
                        font-size:48px;
                        line-height:1.2;
                        margin:25px 0;
                        font-weight:800;
                        color:#0f172a;
                    ">
                        Mulai

                        <span style="
                            background:linear-gradient(135deg,#2563eb,#22c55e);
                            -webkit-background-clip:text;
                            -webkit-text-fill-color:transparent;
                        ">
                            Jual & Beli
                        </span>

                        Sekarang
                    </h1>

                    <p style="
                        color:#64748b;
                        font-size:18px;
                        line-height:1.8;
                        max-width:500px;
                    ">
                        Daftarkan akunmu dan temukan berbagai kebutuhan kos dengan harga terjangkau. Jual barang bekas yang masih layak pakai dengan mudah dan aman.
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
                            Daftar Akun
                        </h2>

                        <p style="color:#64748b;">
                            Buat akun baru untuk mulai menggunakan Kostera
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
                            <ul style="margin-left:20px;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <label style="font-weight:600;">
                            Nama Lengkap
                        </label>

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            autofocus
                            placeholder="Masukkan nama lengkap"
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
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
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
                                margin-bottom:15px;
                                border:1px solid #cbd5e1;
                                border-radius:12px;
                            "
                        >

                        <label style="font-weight:600;">
                            Konfirmasi Password
                        </label>

                        <input
                            type="password"
                            name="password_confirmation"
                            required
                            placeholder="Ulangi password"
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
                            Daftar Sekarang
                        </button>

                    </form>

                    <p style="
                        text-align:center;
                        margin-top:20px;
                        color:#64748b;
                    ">
                        Sudah punya akun?

                        <a
                            href="{{ route('login') }}"
                            style="
                                color:#2563eb;
                                text-decoration:none;
                                font-weight:700;
                            "
                        >
                            Login
                        </a>
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection