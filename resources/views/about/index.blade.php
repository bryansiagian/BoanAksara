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
        <img src="assets/img/aksarabatak.png" alt="Ilustrasi Aksara Batak" class="animated-image">
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
        <img src="assets/img/masakini.jpg" alt="Pelestarian Aksara Batak" class="img-fluid rounded shadow animated-image">
      </div>
    </div>

  </div>
</section>

<!-- Galeri Aksara Batak -->
<section class="page-section bg-light py-5" id="galeri">
  <div class="container">
    <h2 class="text-center mb-4">Galeri Aksara Batak</h2>
    <hr class="divider mb-5" />

    <style>
      .galeri-card .card {
        border: none;
        border-radius: 0.75rem;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
      }

      .galeri-card:hover .card {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
      }

      .galeri-card .card-img-top {
        height: 220px;
        object-fit: cover;
        transition: transform 0.3s ease;
      }

      .galeri-card:hover .card-img-top {
        transform: scale(1.03);
      }

      .lihat-detail-btn {
        position: absolute;
        bottom: 10px;
        right: 10px;
        font-size: 0.75rem;
        padding: 4px 8px;
      }

      .card-body p {
        font-size: 0.9rem;
        font-weight: 500;
        color: #333;
      }

      @media (max-width: 576px) {
        .galeri-card .card-img-top {
          height: 180px;
        }
      }
    </style>

    @php
    $galeri = [
    [
    'jenis' => 'Toba',
    'deskripsi' => 'Aksara Batak Toba digunakan oleh suku Batak Toba yang mendiami daerah sekitar Danau Toba. Aksara ini digunakan dalam naskah keagamaan, surat pribadi, dan cerita rakyat, serta diwariskan secara turun-temurun sebagai bentuk kebudayaan.',
    'gambar' => 'suratketiga.png'
    ],
    [
    'jenis' => 'Karo',
    'deskripsi' => 'Aksara Batak Karo merupakan sistem penulisan tradisional dari masyarakat Karo. Aksara ini memiliki kekhasan dalam bentuk huruf serta digunakan untuk mencatat silsilah, hukum adat, dan kisah-kisah leluhur Karo.',
    'gambar' => 'karo.png'
    ],
    [
    'jenis' => 'Mandailing',
    'deskripsi' => 'Aksara Mandailing ditemukan dalam berbagai naskah kuno yang berisi puisi-puisi klasik, petuah adat, dan dokumen penting lainnya. Masyarakat Mandailing memelihara aksara ini sebagai warisan budaya literasi mereka.',
    'gambar' => 'mandailing.png'
    ],
    [
    'jenis' => 'Simalungun',
    'deskripsi' => 'Digunakan oleh masyarakat Simalungun dalam berbagai bentuk karya sastra seperti mantra, doa, dan hukum adat. Aksara Simalungun dikenal dengan ciri khas garis lengkung dan huruf yang halus.',
    'gambar' => 'simalungun.png'
    ],
    [
    'jenis' => 'Angkola',
    'deskripsi' => 'Aksara Batak Angkola berkembang di wilayah Tapanuli Selatan dan dipakai dalam dokumen adat dan sastra lisan yang ditulis ulang. Penggunaannya sangat erat dengan nilai-nilai spiritual dan pendidikan tradisional.',
    'gambar' => 'angkola.png'
    ],
    [
    'jenis' => 'Pakpak',
    'deskripsi' => 'Aksara Pakpak adalah salah satu varian aksara Batak yang digunakan oleh suku Pakpak di bagian barat wilayah Danau Toba. Penulisan dilakukan di atas kulit kayu, bambu, atau lontar, dan digunakan untuk mencatat sejarah dan hukum adat.',
    'gambar' => 'pakpak.png'
    ]
    ];
    @endphp

    <div class="row justify-content-center">
      @foreach($galeri as $index => $item)
      <div class="col-12 col-sm-6 col-lg-4 mb-4 galeri-card d-flex" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
        <div class="card position-relative">
          <img src="{{ asset('assets/img/' . $item['gambar']) }}" class="card-img-top" alt="Aksara {{ $item['jenis'] }}">
          <div class="card-body text-center">
            <h5 class="card-title mb-2">{{ $item['jenis'] }}</h5>
            <small class="text-muted d-block mb-2">Aksara Batak</small>
            <p class="card-text"><strong>{{ $item['deskripsi'] }}</strong></p>
          </div>
        </div>
      </div>
      @endforeach
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
        <div class="ratio ratio-16x9 rounded"> <!-- Menambahkan class 'rounded' di sini -->
          <iframe
            src="https://www.youtube.com/embed/RhegSv9joMM?autoplay=1&mute=1" <!-- Menambahkan parameter autoplay dan mute -->
            title="Video Aksara Batak"
            allowfullscreen
            ></iframe>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Lightbox2 JS dan CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

@endsection