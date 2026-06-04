<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kostera - Marketplace Mahasiswa & Anak Kos</title>

    <link rel="icon" type="image/png" href="{{ asset('images/logo_kostera.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{
            background:#f8fafc;
            color:#1e293b;
        }

        .container{
            width:90%;
            max-width:1280px;
            margin:auto;
        }

        /* =======================
           NAVBAR
        ======================= */

        nav{
            background:rgba(255,255,255,.95);
            backdrop-filter:blur(12px);
            box-shadow:0 8px 25px rgba(15,23,42,.06);
            padding:16px 0;
            position:sticky;
            top:0;
            z-index:999;
        }

        .navbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .logo img{
            height:60px;
            width:auto;
            display:block;
        }

        .menu{
            display:flex;
            align-items:center;
            gap:8px;
        }

        .menu a{
            text-decoration:none;
            color:#334155;
            font-weight:600;
            font-size:15px;
            padding:10px 14px;
            border-radius:12px;
            transition:.3s;
        }

        .menu a:hover{
            background:#eff6ff;
            color:#2563eb;
        }

        .user-name{
            background:#f1f5f9;
            padding:10px 16px;
            border-radius:12px;
            font-weight:600;
            color:#334155;
        }

        .btn-login{
            background:#eff6ff;
            color:#2563eb !important;
            border-radius:12px;
        }

        .btn-register{
            background:linear-gradient(135deg,#2563eb,#22c55e);
            color:white !important;
            border-radius:12px;
        }

        .btn-logout{
            background:linear-gradient(135deg,#ef4444,#f97316);
            color:white;
            border:none;
            padding:12px 22px;
            border-radius:14px;
            font-weight:700;
            cursor:pointer;
            transition:.3s;
        }

        .btn-logout:hover{
            transform:translateY(-2px);
            box-shadow:0 8px 20px rgba(239,68,68,.25);
        }

        .logout-form{
            margin:0;
        }

        /* =======================
           FOOTER
        ======================= */

        footer{
            background:#ffffff;
            color:#52647d;
            margin-top:80px;
            padding:40px 0 20px;
            border-top:1px solid #dbeafe;
        }

        .footer-grid{
            display:grid;
            grid-template-columns:2fr 1fr 1fr 1fr;
            gap:50px;
        }

        .footer-brand{
            margin-bottom:15px;
        }

        .footer-brand img{
            max-width:230px;
            width:100%;
            height:auto;
        }

        .footer-desc{
            font-size:16px;
            line-height:1.8;
            color:#52647d;
        }

        .footer-title{
            font-size:22px;
            font-weight:700;
            color:#0f4aa8;
            margin-bottom:15px;
        }

        .footer-links a,
        .footer-links p{
            display:block;
            text-decoration:none;
            color:#52647d;
            margin-bottom:10px;
            font-weight:500;
        }

        .footer-links a:hover{
            color:#2563eb;
        }

        .copyright{
            text-align:center;
            margin-top:30px;
            padding-top:20px;
            border-top:1px solid #e2e8f0;
            color:#64748b;
            font-weight:600;
        }

        @media(max-width:1000px){

            .navbar{
                flex-direction:column;
                gap:15px;
            }

            .menu{
                flex-wrap:wrap;
                justify-content:center;
            }

            .footer-grid{
                grid-template-columns:1fr;
                gap:30px;
            }

        }

    </style>
</head>
<body>

<nav>
    <div class="container navbar">

        <a href="/" class="logo">
            <img src="{{ asset('images/kostera_logo.png') }}" alt="Kostera">
        </a>

        <div class="menu">

            <a href="/">Beranda</a>
            <a href="/jelajahi">Jelajahi</a>
            <a href="/kategori">Kategori</a>
            <a href="/jual">Jual Barang</a>
            <a href="/tentang">Tentang</a>
            <a href="/bantuan">Bantuan</a>

            @guest
                <a href="{{ route('login') }}" class="btn-login">
                    Login
                </a>

                <a href="{{ route('register') }}" class="btn-register">
                    Register
                </a>
            @endguest

            @auth

                <a href="{{ route('products.my') }}">
                    Barang Saya
                </a>

                <span class="user-name">
                    👋 Halo, {{ Auth::user()->name }}
                </span>

                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                    @csrf
                    <button type="button" class="btn-logout" onclick="confirmLogout()">
                        Logout
                    </button>
                </form>

            @endauth

        </div>

    </div>
</nav>

@yield('content')

<footer>

    <div class="container">

        <div class="footer-grid">

            <div>

                <div class="footer-brand">
                    <img src="{{ asset('images/kostera_logo.png') }}" alt="Kostera">
                </div>

                <p class="footer-desc">
                    Marketplace digital untuk mahasiswa dan anak kos.
                    Jual beli barang bekas layak pakai dengan sistem aman,
                    rating penjual, dan transaksi COD.
                </p>

            </div>

            <div>

                <div class="footer-title">
                    Menu
                </div>

                <div class="footer-links">
                    <a href="/">Beranda</a>
                    <a href="/jelajahi">Cari Barang</a>
                    <a href="/kategori">Kategori</a>
                    <a href="/jual">Jual Barang</a>
                </div>

            </div>

            <div>

                <div class="footer-title">
                    Informasi
                </div>

                <div class="footer-links">
                    <a href="/tentang">Tentang Kami</a>
                    <a href="/bantuan">Bantuan</a>
                    <a href="#">Kebijakan Privasi</a>
                    <a href="#">Syarat & Ketentuan</a>
                </div>

            </div>

            <div>

                <div class="footer-title">
                    Kontak
                </div>

                <div class="footer-links">
                    <p>Email: support@kostera.id</p>
                    <p>Instagram: @kostera.id</p>
                    <p>WhatsApp: +62 812-221-331-441</p>
                </div>

            </div>

        </div>

        <div class="copyright">
            © 2026 Kostera. Marketplace Mahasiswa & Anak Kos.
        </div>

    </div>

</footer>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('product_success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Berhasil',
    text: '{{ session('product_success') }}',
    confirmButtonColor:'#2563eb'
});
</script>
@endif
<script>
document.querySelectorAll('.delete-form').forEach(form => {
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        Swal.fire({
            title: 'Hapus barang?',
            text: 'Data barang yang dihapus tidak bisa dikembalikan.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#ef4444',
            cancelButtonColor: '#64748b',
            confirmButtonText: 'Ya, hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
});

function confirmLogout() {
    Swal.fire({
        title: 'Logout?',
        text: 'Anda akan keluar dari akun.',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#ef4444',
        cancelButtonColor: '#64748b',
        confirmButtonText: 'Ya, Logout',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('logout-form').submit();
        }
    });
}
</script>

</body>
</html>