@extends('layouts.app')

@section('title', 'About')

@section('content')

<!-- Header -->
<header class="masthead">
<<<<<<< HEAD
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
                <a class="btn btn-maroon btn-xl" href="#telusuri">Telusuri</a>
            </div>
        </div>
=======
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
>>>>>>> da50c37779a00e920baae68d2ce0d046cb47af0d
    </div>
  </div>
</header>

<section id="about" style="background: linear-gradient(to bottom, #ffffff, #fff); padding: 60px 0;">
  <div class="container">

    <!-- Mengenal Aksara Batak -->
<<<<<<< HEAD
          <section class="page-section py-5" id="telusuri" style="background: linear-gradient(to right, #ffffff); min-height: 100vh; background-attachment: local;">
      <div class="container px-4 px-lg-5 h-100">
         <div class="row gx-5 gy-4 align-items-center h-100">
                <!-- Kolom Kiri: Teks -->
                <div class="col-lg-6 order-lg-1">
                  <h2 class="text-center text-lg-start">
                    <span style="color:#7B241C">Mengenal Aksara Batak</span>
                  </h2>
                  <hr class="divider my-3" />
                  <p class="text-muted">
                    <strong style="color:#7B241C">Aksara Batak</strong>, atau dikenal sebagai <em>Surat Batak</em>, adalah sistem penulisan kuno yang digunakan masyarakat Batak di Sumatera Utara sejak berabad-abad silam. Aksara ini tidak hanya menjadi alat komunikasi, tapi juga mencerminkan nilai-nilai spiritual, adat, dan filosofi hidup suku Batak.
                  </p>
                  <p class="text-muted">
                    Aksara ini digunakan oleh beberapa suku Batak, seperti Toba, Karo, Simalungun, Pakpak/Dairi, dan Mandailing, dengan bentuk yang disesuaikan menurut dialek masing-masing. Setiap aksara dibangun dari konsonan dasar yang dimodifikasi tanda vokal, sehingga memiliki keunikan tersendiri meski tetap mempertahankan struktur fonetik yang sama.
                  </p>
                  <p class="text-muted">
                    Aksara Batak tetap dipelajari dan dilestarikan sebagai bagian tak terpisahkan dari budaya Batak, memperkuat identitas lokal, khususnya bagi generasi muda.
                  </p>
                  <div style="background-color: #7B241C; color: #ffffff; padding: 1rem 1.25rem; border-radius: 0.5rem; box-shadow: 0 2px 6px rgba(0,0,0,0.1);" class="mt-4">
                    Aksara Batak dahulu ditulis di atas bambu, kulit kayu, bahkan tulang!
                  </div>
                </div>

                <!-- Kolom Kanan: Slider -->
                <div class="col-lg-6 order-lg-2 d-flex flex-column align-items-center">
                  <div class="slider-container">
                    <img id="sliderImage" src="assets/img/suratpertama.png" alt="Ilustrasi Aksara Batak" class="slider-image" />
                  </div>
                  <div class="dots-container mt-4">
                    <!-- Dots akan dibuat via JS -->
                  </div>
                </div>
              </div>
            </div>

            <!-- Script Slider -->
            <script>
              const images = [
                "assets/img/suratpertama.png",
                "assets/img/suratkedua.png",
                "assets/img/suratketiga.png",
                "assets/img/suratkeempat.png"
              ];
              let currentIndex = 0;
              const sliderImage = document.getElementById("sliderImage");
              const dotsContainer = document.querySelector(".dots-container");

              // Buat dots
              images.forEach((_, index) => {
                const dot = document.createElement("span");
                dot.classList.add("dot");
                if (index === 0) dot.classList.add("active");
                dot.addEventListener("click", () => {
                  currentIndex = index;
                  updateSlider();
                });
                dotsContainer.appendChild(dot);
              });

              const dots = document.querySelectorAll(".dot");

              function updateSlider() {
                sliderImage.style.opacity = 0;
                setTimeout(() => {
                  sliderImage.src = images[currentIndex];
                  sliderImage.style.opacity = 1;
                }, 150);
                dots.forEach(dot => dot.classList.remove("active"));
                dots[currentIndex].classList.add("active");
              }

              // Auto slide
              setInterval(() => {
                currentIndex = (currentIndex + 1) % images.length;
                updateSlider();
              }, 5000);
            </script>

            <style>
              .slider-container {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center; /* Geser ke kanan */
                width: 100%;
                background: transparent;
              }
              .slider-image {
                width: 100%;
                max-width: 450px; /* Semua foto ukuran sama */
                height: 400px;     /* Tinggi seragam */
                object-fit: contain; /* Potong proporsional */
                border-radius: 0px;
                box-shadow: none;
                transition: opacity 0.3s ease;
                background: none;
              }
              .dots-container {
                display: flex;
                gap: 8px;
                justify-content: center;
                align-items: center;
                margin-top: 10px;
              }
              .dot {
                width: 12px;
                height: 12px;
                background-color: #ccc;
                border-radius: 50%;
                cursor: pointer;
                transition: background-color 0.3s ease;
              }
              .dot.active {
                background-color: #7B241C;
              }
            </style>
          </section>
=======
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
>>>>>>> da50c37779a00e920baae68d2ce0d046cb47af0d

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
<<<<<<< HEAD
        <img src="assets/img/museum.jpg" width="450" height="auto" alt="Pelestarian Aksara Batak" class="img-fluid rounded shadow">
=======
        <img src="assets/img/masakini.jpg" alt="Pelestarian Aksara Batak" class="img-fluid rounded shadow animated-image">
>>>>>>> da50c37779a00e920baae68d2ce0d046cb47af0d
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