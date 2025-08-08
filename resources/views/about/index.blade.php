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
                <a class="btn btn-maroon btn-xl" href="#telusuri">Telusuri</a>
            </div>
        </div>
    </div>
</header>

<section id="about" style="background: linear-gradient(to bottom, #ffffff, #fff); padding: 60px 0;">
  <div class="container">

    <!-- Mengenal Aksara Batak -->
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
        <img src="assets/img/museum.jpg" width="450" height="auto" alt="Pelestarian Aksara Batak" class="img-fluid rounded shadow">
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