@extends('layouts.app')

@section('title', 'About')

@section('content')

<!-- Header -->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end" data-aos="fade-down">
                <h1 class="text-white font-weight-bold">Pengenalan Aksara</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline" data-aos="fade-up" data-aos-delay="100">
                <p class="text-white-75 mb-5">
                    Tertarik mempelajari sejarah aksara Batak lebih dalam? Jangan ragu untuk menghubungi kami!
                </p>
                <a class="btn btn-maroon btn-xl" href="#kontak">Telusuri</a>
            </div>
        </div>
    </div>
</header>

<section id="about" style="background: linear-gradient(to bottom, #ffffff, #fff); padding: 60px 0;">
  <div class="container">

    <!-- Mengenal Aksara Batak -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-6">
        <h2 style="color:#7B241C;">Mengenal Aksara Batak</h2>
        <p>
          <strong>Aksara Batak</strong> adalah sistem tulisan tradisional yang digunakan oleh masyarakat Batak di Sumatera Utara.
          Aksara ini dipakai selama berabad-abad untuk menulis naskah adat, hukum, cerita rakyat, hingga catatan pribadi.
          Setiap wilayah Batak seperti Toba, Karo, Mandailing, Simalungun, dan Pakpak memiliki variasi bentuk huruf yang unik,
          namun semuanya berbasis pada prinsip fonetik yang sama.
        </p>
        <p>
          Media tulis yang digunakan pun beragam, mulai dari bambu, kulit kayu, hingga tulang kerbau. Bentuk dan goresan
          hurufnya tidak hanya sebagai alat komunikasi, tetapi juga mencerminkan keindahan seni ukir masyarakat Batak.
        </p>
      </div>
      <div class="col-lg-6 text-center">
        <img src="assets/img/aksarabatak.png" alt="Ilustrasi Aksara Batak" 
      </div>
    </div>

    <!-- Pelestarian di Masa Kini -->
    <div class="row align-items-center flex-row-reverse">
      <div class="col-lg-6">
        <h2 style="color:#7B241C;">Pelestarian di Masa Kini</h2>
        <p>
          Di era modern, penggunaan Aksara Batak mulai berkurang karena dominasi huruf latin.
          Namun, berbagai upaya pelestarian terus dilakukan oleh komunitas budaya, akademisi, dan pemerintah daerah.
          Aksara Batak kini dipelajari di sekolah, dikenalkan melalui pelatihan daring, dan digunakan dalam desain grafis,
          papan nama, hingga produk kreatif.
        </p>
        <p>
          Pelestarian ini bukan hanya menjaga bentuk tulisannya, tetapi juga mewariskan identitas budaya
          dan rasa bangga akan warisan leluhur. Dengan teknologi, aksara ini dapat terus hidup dan berkembang di masa depan.
        </p>
      </div>
      <div class="col-lg-6 text-center">
        <img src="assets/img/masakini.jpg" alt="Pelestarian Aksara Batak" class="img-fluid rounded shadow">
      </div>
    </div>

  </div>
</section>


<!-- Galeri Aksara Batak -->
<section class="page-section bg-light" id="galeri">
    <div class="container">
        <h2 class="text-center mt-0">Galeri Aksara Batak</h2>
        <hr class="divider" />
        <div class="row g-4">
            @foreach(['Toba', 'Karo', 'Mandailing', 'Simalungun', 'Angkola', 'Pakpak'] as $jenis)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <a href="{{ asset('images/aksara-'.$jenis.'.jpg') }}" data-lightbox="galeri" data-title="Aksara {{ $jenis }}">
                    <div class="card shadow-sm">
                        <img src="{{ asset('images/aksara-'.$jenis.'.jpg') }}" class="card-img-top" alt="Aksara {{ $jenis }}">
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0">{{ $jenis }}</h6>
                            <small class="text-muted">Aksara Batak</small>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="page-section" id="video-edukasi">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="fw-bold">Video Edukasi Aksara Batak</h2>
                <p class="text-muted">Pelajari sejarah dan perkembangan Aksara Batak melalui video interaktif berikut.</p>
            </div>
            <div class="col-lg-6">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/RhegSv9joMM" title="Video Aksara Batak" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Lightbox2 JS dan CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

@endsection