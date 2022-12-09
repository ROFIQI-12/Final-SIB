@extends('layouts.maindata')

@section('container')
    <section id="hero">
        <div class="font-produk">
            <h2>Selamat Datang di Sistem Pelaporan Data Produksi</h2>
                <p><b>Sistem Pelaporan Data Produksi </b>hadir sebagai upaya mempermudah pengelolaan data perikanan pada wilayah kerja Dinas Perikanan Kabupaten Banyuwangi.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" type="button">Laporan Data Perikanan</button>
                    <button class="btn btn-primary" type="button">Unggah Laporan Produksi Anda</button>
                  </div>
        </div>
        <div class="logo">
            <img src="images/logo.png" alt="" width="300px">
        </div>
      </section>
@endsection
