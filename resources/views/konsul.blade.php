@extends('layouts.main')

@section('container')

<section id="form-2" class="form-1">
    <div class="form-2">
        <h2>Formulir Pendaftaran Klik Sehati</h2>
    </div>
    <div class="container">
<form autocomplete="off">
    <div class="form-group mt-3">
        <label>Nama Lengkap</label>
        <input type="text" name="" class="form-control" placeholder="Masukkan Nama Lengkap Anda" required minlength="2">
    </div>
    <div class="form-group mt-3">
        <label>Alamat Lengkap</label>
        <input type="text" name="" class="form-control" placeholder="Masukkan Alamat Anda">
    </div>
    <div class="form-group mt-3">
        <label>Pilih Klinik Yang Dituju</label>
        <select class="form-select" id="inputGroupSelect01">
          <option selected>-Pilih-</option>
          <option value="1">Klinik BBI Kabat</option>
          <option value="2">Klinik BBI Genteng</option>
        </select>
      </div>
      <div class="form-group mt-3">
        <label for="exampleFormControlTextarea1" class="form-label">Masalah/Keluhan Yang Dialami</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="form-group mt-3">
        <label>Komuditas</label>
        <input type="text" name="" class="form-control" placeholder="Tuliskan Komuditas Budidaya Anda">
    </div>
      <div class="form-group mt-3 pb-4">
        <label>No Hp/Wa</label>
        <input type="text" name="nohp" class="form-control" id="nohp" pattern="(\+62|62|0)8[1-9][0-9]{10,13}$" placeholder="(+62/08xxxxxxxxx)">
    </div>
    <div class="button-u">
        <button type="Submit" class="btn btn-outline-primary btn-sm rounded-pill"><i class="bi bi-printer pe-2"></i>Cetak</button>
        <button type="Submit" class="ok btn rounded btn-sm">Simpan</button>
        </div>
    </div>
</form>
</div>
</section>


<section id="form-3" class="form-3">
    <div class="container">
        <h2>Cek Konfirmasi Pendaftaran Anda!</h2>
        <p class="pt-3">Masukkan nomor ponsel anda untuk melihat balasan konfirmasi</p>
        <form action="">
        <div class="form-group pb-3">
            <input type="text" name="nohp" class="form-control" id="nohp" pattern="(\+62|62|0)8[1-9][0-9]{10,13}$" placeholder="Masukkan Nomor Ponsel Anda">
        </div>
        <div class="button-u-u">
            <button type="Submit" class="ok btn rounded btn-sm">Diskusi</button>
            <button type="Submit" class="ok btn rounded btn-sm ps-4 text-center pe-4">Cek</button>
            </div>
    </div>
</form>
@endsection
