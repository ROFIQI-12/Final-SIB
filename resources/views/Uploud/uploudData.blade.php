@extends('layouts.maindata')

@section('container')

<section id="form-2" class="form-1">
    <div class="form-2 pb-5 pt-5">
        <h2><i class="bi bi-file-earmark-plus"></i>Upload Berkas Laporan Produksi</h2>
    </div>
    <div class="container">
     <div class="form-group">
      <p>Silahkan upload berkas laporan produksi anda, sesuai dengan template yang telah disediakan!</p>
      <label class="pb-1 fw-bold">Periode Tanggal</label>
      <input type="text" name="periode_tanggal" id="periode_tanggal" class="datepicker tanggal form-control" required="" placeholder="YY/MM/DD" />
     </div>
      <div class="form-group">
       <label class="pb-1 pt-3 fw-bold">Upload Berkas (exel,xlsx,csv)</label>
       <input type="file" class="t form-control" id="inputGroupFile02">
     </div>
     <div class="button-u-u pt-5 ">
      <button type="Submit" class="ok btn rounded btn-sm"><i class="bi bi-download"></i> Unduh Template</button>
      </div>
</div>
</section>


@endsection
