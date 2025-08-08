<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>@yield('title', 'Default Title') - BoanAksara</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Bootstrap Icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
  <!-- SimpleLightbox plugin CSS-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  <!-- Slick CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- jQuery (required) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Slick JS -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand d-flex align-items-center gap-2" href="#page-top" style="gap: 8px;">
        <img src="{{ asset('assets/img/logoBoanAksara.png') }}"
          alt="Logo BoanAksara"
          style="height: 55px; width: auto; animation: pulse 2s infinite;" />

        <span class="align-middle" style="font-size: 1.25rem;">BoanAksara</span>
      </a>

      <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto my-2 my-lg-0">
          <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="/history">History</a></li>
          <li class="nav-item"><a class="nav-link" href="/course">Course</a></li>
          <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')

  <!-- Footer Section -->
  <footer style="background: #7B2F28; color: white; padding: 30px 20px; display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; font-family: 'Segoe UI', sans-serif;">
    <div style="flex: 1; min-width: 250px; margin: 10px;">
      <h3 style="color: #ded396ff;">BoanAksara</h3>
      <p>BoanAksara adalah platform edukasi budaya Batak, khususnya dalam pelestarian dan pembelajaran Aksara Batak secara digital dan interaktif.</p>
    </div>

    <div style="flex: 1; min-width: 200px; margin: 10px;">
      <h3 style="color: #ded396ff;">Navigasi</h3>
      <a href="{{ route('home') }}" style="color: white; text-decoration: none; display: block; margin-bottom: 5px;">Beranda</a>
      <a href="{{ route('about') }}" style="color: white; text-decoration: none; display: block; margin-bottom: 5px;">Tentang Kami</a>
      <a href="{{ route('history') }}" style="color: white; text-decoration: none; display: block; margin-bottom: 5px;">Sejarah Aksara</a>
      <a href="{{ route('course') }}" style="color: white; text-decoration: none; display: block; margin-bottom: 5px;">Kursus</a>
      <a href="{{ route('contact') }}" style="color: white; text-decoration: none; display: block; margin-bottom: 5px;">Kontak</a>
    </div>

    <div style="flex: 1; min-width: 200px; margin: 10px;">
      <h3 style="color: #ded396ff;">Layanan</h3>
      <a href="#" style="color: white; text-decoration: none; display: block; margin-bottom: 5px;">Belajar Online</a>
      <a href="#" style="color: white; text-decoration: none; display: block; margin-bottom: 5px;">Download Font Aksara</a>
      <a href="#" style="color: white; text-decoration: none; display: block; margin-bottom: 5px;">Konversi Teks</a>
      <a href="#" style="color: white; text-decoration: none; display: block; margin-bottom: 5px;">Forum Diskusi</a>
    </div>

    <div style="flex: 1; min-width: 200px; margin: 10px;">
      <h3 style="color: #ded396ff;">Hubungi Kami</h3>
      <p>Email: boanaksara@budaya.id</p>
      <p>Alamat: Jl. Pustaha Batak No.12, Balige, Sumatera Utara</p>

      <div style="display: flex; gap: 10px; margin-top: 10px;">
        <a href="#" target="_blank" style="color: white; font-size: 20px;"><i class="fab fa-instagram"></i></a>
        <a href="#" target="_blank" style="color: white; font-size: 20px;"><i class="fab fa-youtube"></i></a>
        <a href="#" target="_blank" style="color: white; font-size: 20px;"><i class="fab fa-whatsapp"></i></a>
        <a href="#" target="_blank" style="color: white; font-size: 20px;"><i class="fab fa-facebook"></i></a>
      </div>
    </div>
  </footer>

  <div style="width: 100%; text-align: center; padding: 10px; background: #5C1D1B; color: white; font-size: 14px;">
    © 2025 | BoanAksara - Melestarikan Budaya Lewat Teknologi
  </div>






  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- SimpleLightbox plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
  <!-- Core theme JS-->
  <script src="{{ asset('js/scripts.js') }}"></script>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <!-- * *                               SB Forms JS                               * *-->
  <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  @stack('scripts')
</body>

</html>