@extends('layouts.app')

@section('content')

<section style="padding:50px 0;background:#eef7fb;min-height:80vh;">
    <div class="container">

        <h1 style="font-size:32px;color:#0f172a;">Jelajahi Barang Bekas</h1>
        <p style="color:#64748b;margin-bottom:25px;">
            Gunakan filter untuk menemukan barang sesuai lokasi, harga, kondisi, dan transaksi.
        </p>

        <div style="display:grid;grid-template-columns:280px 1fr;gap:28px;">

            <form action="{{ route('jelajahi') }}" method="GET" style="background:white;padding:25px;border-radius:18px;box-shadow:0 10px 25px rgba(15,23,42,.08);height:max-content;">

                <h3 style="color:#1d4ed8;margin-bottom:15px;">FILTER LOKASI</h3>

                <label><input type="radio" name="lokasi" value="dekat" {{ request('lokasi')=='dekat' ? 'checked' : '' }}> Dekat Kampusku</label><br>
                <label><input type="radio" name="lokasi" value="kos" {{ request('lokasi')=='kos' ? 'checked' : '' }}> Area Kos Saya</label><br>
                <label><input type="radio" name="lokasi" value="" {{ request('lokasi')=='' ? 'checked' : '' }}> Semua Malang</label>

                <h3 style="color:#1d4ed8;margin:25px 0 12px;">HARGA (RP)</h3>

                <div style="display:flex;gap:10px;margin-bottom:15px;">
                    <input type="number" id="harga_min" name="harga_min" value="{{ request('harga_min',0) }}" min="0" max="5000000" placeholder="Min" style="width:50%;padding:10px;border:1px solid #cbd5e1;border-radius:10px;font-weight:600;">

                    <input type="number" id="harga_max" name="harga_max" value="{{ request('harga_max',500000) }}" min="0" max="5000000" placeholder="Max" style="width:50%;padding:10px;border:1px solid #cbd5e1;border-radius:10px;font-weight:600;">
                </div>

                <input type="range" id="rangeHarga" min="0" max="5000000" step="10000" value="{{ request('harga_max',500000) }}" style="width:100%;cursor:pointer;" oninput="ubahHarga(this.value)">

                <div style="display:flex;justify-content:space-between;margin-top:10px;font-weight:700;">
                    <span>Rp0</span>
                    <span id="hargaTampil">Rp{{ number_format(request('harga_max',500000),0,',','.') }}</span>
                </div>

                <h3 style="color:#1d4ed8;margin:25px 0 12px;">KONDISI</h3>

                <label><input type="checkbox" name="kondisi[]" value="Seperti Baru" {{ is_array(request('kondisi')) && in_array('Seperti Baru', request('kondisi')) ? 'checked' : '' }}> Seperti Baru</label><br>

                <label><input type="checkbox" name="kondisi[]" value="Bekas Layak Pakai" {{ is_array(request('kondisi')) && in_array('Bekas Layak Pakai', request('kondisi')) ? 'checked' : '' }}> Bekas Layak Pakai</label><br>

                <label><input type="checkbox" name="kondisi[]" value="Perlu Perbaikan" {{ is_array(request('kondisi')) && in_array('Perlu Perbaikan', request('kondisi')) ? 'checked' : '' }}> Perlu Perbaikan</label>

                <h3 style="color:#1d4ed8;margin:25px 0 12px;">TRANSAKSI</h3>

                <label><input type="checkbox" name="transaksi[]" value="COD" {{ is_array(request('transaksi')) && in_array('COD', request('transaksi')) ? 'checked' : '' }}> COD tersedia</label><br>

                <label><input type="checkbox" name="transaksi[]" value="Transfer" {{ is_array(request('transaksi')) && in_array('Transfer', request('transaksi')) ? 'checked' : '' }}> Transfer bank</label><br>

                <label><input type="checkbox" name="transaksi[]" value="COD & Transfer" {{ is_array(request('transaksi')) && in_array('COD & Transfer', request('transaksi')) ? 'checked' : '' }}> COD & Transfer</label>

                <button type="submit" style="width:100%;margin-top:25px;background:linear-gradient(90deg,#2563eb,#22c55e);color:white;border:none;padding:13px;border-radius:12px;font-weight:700;cursor:pointer;">
                    Terapkan Filter
                </button>

            </form>

            <div>

                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">
                    <div>
                        <h2 style="color:#1d4ed8;">Barang Terdekat Area Kampus</h2>
                        <p style="color:#64748b;">Temukan barang bekas berkualitas dengan harga hemat.</p>
                    </div>

                    <form action="{{ route('jelajahi') }}" method="GET">
                        <select name="sort" onchange="this.form.submit()" style="padding:12px;border-radius:10px;border:1px solid #cbd5e1;font-weight:600;">
                            <option value="terbaru" {{ request('sort')=='terbaru' ? 'selected' : '' }}>Urutkan: Terbaru</option>
                            <option value="termurah" {{ request('sort')=='termurah' ? 'selected' : '' }}>Harga Termurah</option>
                            <option value="termahal" {{ request('sort')=='termahal' ? 'selected' : '' }}>Harga Termahal</option>
                        </select>
                    </form>
                </div>

                <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:24px;">

                    @forelse($products as $product)

                        <a href="{{ route('products.show',$product->id) }}" style="text-decoration:none;color:inherit;">

                            <div style="background:white;border-radius:18px;overflow:hidden;box-shadow:0 10px 25px rgba(15,23,42,.08);">

                                @if($product->gambar)
                                    <img src="{{ asset('storage/'.$product->gambar) }}" style="width:100%;height:160px;object-fit:cover;">
                                @else
                                    <div style="height:160px;background:linear-gradient(135deg,#bfdbfe,#bbf7d0);display:flex;align-items:center;justify-content:center;font-size:50px;">
                                        📦
                                    </div>
                                @endif

                                <div style="padding:18px;">
                                    <h3 style="color:#1d4ed8;font-size:18px;">{{ $product->nama_barang }}</h3>

                                    <p style="color:#64748b;margin:6px 0;">
                                        {{ $product->lokasi }} • {{ $product->metode_transaksi }}
                                    </p>

                                    <h3 style="color:#16a34a;">
                                        Rp{{ number_format($product->harga,0,',','.') }}
                                    </h3>

                                    <span style="display:inline-block;margin-top:10px;background:#eff6ff;color:#1d4ed8;padding:6px 12px;border-radius:20px;font-weight:700;font-size:13px;">
                                        {{ $product->kondisi }}
                                    </span>
                                </div>

                            </div>

                        </a>

                    @empty

                        <div style="background:white;padding:40px;border-radius:18px;text-align:center;grid-column:1/-1;">
                            <h3>Barang tidak ditemukan</h3>
                            <p>Coba ubah filter pencarian.</p>
                        </div>

                    @endforelse

                </div>

            </div>

        </div>

    </div>
</section>

<script>
function ubahHarga(value) {
    document.getElementById('harga_max').value = value;
    document.getElementById('hargaTampil').innerHTML =
        'Rp' + Number(value).toLocaleString('id-ID');
}

document.addEventListener('DOMContentLoaded', function(){
    const hargaMax = document.getElementById('harga_max');
    const rangeHarga = document.getElementById('rangeHarga');
    const hargaTampil = document.getElementById('hargaTampil');

    if (hargaMax && rangeHarga && hargaTampil) {
        hargaMax.addEventListener('input', function(){
            rangeHarga.value = this.value;
            hargaTampil.innerHTML =
                'Rp' + Number(this.value).toLocaleString('id-ID');
        });
    }
});
</script>

@endsection