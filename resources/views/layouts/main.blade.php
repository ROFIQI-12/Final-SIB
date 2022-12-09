<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KLIK SEHATI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</head>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"> <img src="images/sehati.png" alt="" width="50px"> Klik Sehati</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/konsultasi">Konsultasi</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Data Produksi
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item mt-0" href="/dPembudidaya">Data Pembudidaya</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/dataProduksi">Data Produksi</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Kontak</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      @yield('container')

      <footer class="footer mt-auto py-3 bg-light">
        <div class="container-fo">
          <span class="fw-bold">KLIK SEHATI</span><span class="text-white">© Copyright 2022. All Rights Reserved.
            </span>
        </div>
      </footer>
      <script type="text/javascript">
        $('.datepicker').datepicker();
        </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
