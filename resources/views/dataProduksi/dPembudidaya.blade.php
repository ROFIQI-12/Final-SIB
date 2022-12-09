@extends('layouts.maindata')

@section('container')

<section id="form-2" class="form-1">
    <div class="form-2 pb-5 pt-5">
        <h2><i class="bi bi-pencil-square pe-1"></i>Formulir Laporan Data Pembudidaya</h2>
    </div>
    <div class="container">
<form autocomplete="off">
    <div class="form-group mt-3">
        <label>Nama Pembudidaya</label>
        <input type="text" name="" class="form-control" placeholder="Masukkan Nama Lengkap Anda" required minlength="2">
    </div>
    <div class="form-group mt-3 pt-3">
        <label>Kelompok Pembudidaya</label>
        <input type="text" name="" class="form-control" placeholder="Masukkan Nama Kelompok Anda">
    </div>
    <div class="form-group mt-3 pt-3">
        <label>Alamat Pembudidaya</label>
        <input type="text" name="" class="form-control" placeholder="Masukkan Alamat Anda">
    </div>
      <div class="form-group mt-3 pb-4 pt-3">
        <label>No Hp/Wa</label>
        <input type="text" name="nohp" class="form-control" id="nohp" pattern="(\+62|62|0)8[1-9][0-9]{10,13}$" placeholder="(+62/08xxxxxxxxx)">
    </div>
    </div>
</form>
</div>
</section>


<section id="form-3" class="form-3">
    <div class="container">
        <h2 class="fs-5">Cek kembali data yang anda masukan, pastikan terisi dengan benar!</h2>
          <div class="form-check pt2">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                <b>Centang</b> jika yakin data yang anda masukkan sudah benar!
            </label>
          </div>
        <div class="button-u-u pt-5">
            <button type="Submit" class="ok btn rounded btn-sm">Kembali</button>
            <button type="Submit" class="ok btn rounded btn-sm ps-4 text-center">Kirim</button>
            </div>
    </div>
</form>
@endsection
