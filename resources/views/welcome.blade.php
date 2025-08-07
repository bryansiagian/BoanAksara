@extends('layouts.app')

@section('title', 'Belajar Aksara Batak')

@section('content')
<!-- Masthead (Beranda) -->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-white font-weight-bold">Boan Aksara</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5">Selamat datang di Boan Aksara! Jelajahi keindahan dan kekayaan aksara Batak, warisan budaya yang tak ternilai harganya. Mulai perjalanan Anda sekarang dan lestarikan bersama!</p>
                <a class="btn btn-maroon btn-xl" href="#about">Pelajari Aksara</a>
            </div>
        </div>
    </div>

    <head>
        <style>
            ::selection {
                background: #ffffff;
                color: #000;
            }

            ::-moz-selection {
                background: #ffffff;
                color: #000;
            }
        </style>
    </head>

</header>

<!-- About Aksara Batak -->
<section class="page-section bg-light py-5" id="about" style="background: linear-gradient(to right, #ffffff, #f3f3f3);">
  <div class="container px-4 px-lg-5">
    <div class="row gx-5 gy-4 align-items-center">
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
        <div class="dots-container mt-3">
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
      "assets/img/suratketiga.png"
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

<!-- Fitur Utama -->
<section class="py-5 bg-white" id="fitur-utama">
  <div class="container px-4 px-lg-5">
    <h2 class="text-center mb-5" style="color: #7B241C;">Fitur Utama</h2>
    <div class="row g-4 justify-content-center">

      <!-- Fitur 1: Panduan Visual -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow text-center border-0">
          <div class="card-body">
            <i class="bi bi-eye h1 mb-3 text-maroon"></i>
            <h5 class="card-title">Panduan Visual</h5>
            <p class="card-text">Lihat dan pahami bentuk Aksara Batak secara visual dan mudah diikuti.</p>
          </div>
        </div>
      </div>

      <!-- Fitur 2: Course -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow text-center border-0">
          <div class="card-body">
            <i class="bi bi-journal-code h1 mb-3 text-maroon"></i>
            <h5 class="card-title">Course</h5>
            <p class="card-text">Pelajari Aksara Batak mulai dari dasar hingga mahir secara bertahap.</p>
          </div>
        </div>
      </div>

      <!-- Fitur 3: Kuis -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow text-center border-0">
          <div class="card-body">
            <i class="bi bi-question-circle h1 mb-3 text-maroon"></i>
            <h5 class="card-title">Kuis</h5>
            <p class="card-text">Uji pemahamanmu dengan kuis interaktif tentang Aksara Batak.</p>
          </div>
        </div>
      </div>

      <!-- Fitur 4: Transliterasi -->
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 shadow text-center border-0">
          <div class="card-body">
            <i class="bi bi-type h1 mb-3 text-maroon"></i>
            <h5 class="card-title">Transliterasi</h5>
            <p class="card-text">Ubah teks Latin ke Aksara Batak secara otomatis dan akurat.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection


