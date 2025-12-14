@extends('layouts.app')

@section('title', 'About')

@section('content')

<!-- Header -->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-white font-weight-bold" id="aboutMastheadTitle">Pengenalan Aksara</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5" id="aboutMastheadText">
                    Tertarik mempelajari sejarah aksara Batak lebih dalam? Jangan ragu untuk menghubungi kami!
                </p>
                <a class="btn btn-maroon btn-xl" href="#telusuri" id="aboutMastheadButton">Telusuri</a>
            </div>
        </div>
    </div>
</header>

<section id="about" class="about-main-section">
  <div class="container">

    <!-- Mengenal Aksara Batak -->
    <section class="page-section py-5" id="mengenal-aksara">
      <div class="container px-4 px-lg-5 h-100">
         <div class="row gx-5 gy-4 align-items-center h-100">
                <!-- Kolom Kiri: Teks -->
                <div class="col-lg-6 order-lg-1" id="mengenalAksaraTextContent">
                  <h2 class="text-center text-lg-start mengenal-aksara-title">
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
                  <div id="mengenalAksaraHighlight" class="mt-4 mengenal-aksara-highlight-box">
                    Aksara Batak dahulu ditulis di atas bambu, kulit kayu, bahkan tulang!
                  </div>
                </div>

                <!-- Kolom Kanan: Slider -->
                <div class="col-lg-6 order-lg-2 d-flex flex-column align-items-center" id="mengenalAksaraSlider">
                  <div class="slider-container">
                    <img id="sliderImage" src="{{ asset('assets/img/suratpertama.png') }}" alt="Ilustrasi Aksara Batak" class="slider-image" />
                  </div>
                  <div class="dots-container mt-4">
                    <!-- Dots akan dibuat via JS -->
                  </div>
                </div>
              </div>
            </div>

            <!-- Script Slider (tetap di sini karena terkait langsung dengan slider HTML) -->
            <script>
              const images = [
                "{{ asset('assets/img/suratpertama.png') }}",
                "{{ asset('assets/img/suratkedua.png') }}",
                "{{ asset('assets/img/suratketiga.png') }}",
                "{{ asset('assets/img/suratkeempat.png') }}"
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
          </section>

    <!-- Pelestarian di Masa Kini -->
    <div class="row align-items-center flex-row-reverse py-5" id="pelestarianMasaKini">
      <div class="col-lg-6" id="pelestarianTextContent">
        <h2 class="pelestarian-title">Pelestarian di Masa Kini</h2>
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
      <div class="col-lg-6 text-center" id="pelestarianImageContainer">
        <img src="{{ asset('assets/img/museum.jpg') }}" alt="Pelestarian Aksara Batak" class="img-fluid rounded shadow pelestarian-image">
      </div>
    </div>

  </div>
</section>

<!-- Galeri Aksara Batak -->
<section class="page-section bg-light py-5" id="galeri">
  <div class="container">
    <h2 class="text-center mb-4" id="galeriTitle">Galeri Aksara Batak</h2>
    <hr class="divider mb-5" />

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
      <div class="col-12 col-sm-6 col-lg-4 mb-4 galeri-card d-flex">
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

<section class="page-section py-5" id="video-edukasi">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0" id="videoEdukasiTextContent">
        <h2 class="fw-bold">Video Edukasi Aksara Batak</h2>
        <p class="text-muted">Pelajari sejarah dan perkembangan Aksara Batak melalui video interaktif berikut.</p>
      </div>
      <div class="col-lg-6" id="videoEdukasiEmbed">
        <div class="ratio ratio-16x9 rounded">
          <iframe
            src="https://www.youtube.com/embed/RhegSv9joMM?autoplay=1&mute=1"
            title="Video Aksara Batak"
            allowfullscreen
            ></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Custom CSS untuk Responsivitas dan Gaya -->
<style>
    /* Styling umum */
    .masthead {
        background-image: url('{{ asset('assets/img/masthead-bg.jpg') }}'); /* Ganti dengan path gambar yang relevan jika ada */
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        min-height: 100vh;
        position: relative;
    }

    .about-main-section {
      background: linear-gradient(to bottom, #ffffff, #fff);
      padding: 60px 0;
    }

    /* Mengenal Aksara Batak Section */
    #mengenal-aksara {
        background: linear-gradient(to right, #ffffff);
        /* Hapus min-height: 100vh; agar section menyesuaikan konten */
        background-attachment: local;
    }

    .mengenal-aksara-highlight-box {
      background-color: #7B241C;
      color: #ffffff;
      padding: 1rem 1.25rem;
      border-radius: 0.5rem;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .slider-container {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        background: transparent;
        /* Gunakan padding-bottom untuk rasio aspek jika slider image memiliki ukuran tetap */
        padding-bottom: 75%; /* Contoh 4:3 ratio. Sesuaikan dengan rasio gambar Anda */
        overflow: hidden; /* Penting untuk gambar di dalamnya */
    }
    .slider-image {
        position: absolute; /* Posisikan absolut di dalam container */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%; /* Isi penuh container */
        max-width: 450px; /* Pertahankan max-width untuk desktop */
        object-fit: contain;
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
        position: absolute; /* Agar dot tidak menggeser konten saat slider container padding-bottom */
        bottom: -20px; /* Atur posisi dot di bawah slider */
        width: 100%; /* Lebar penuh */
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

    /* Pelestarian di Masa Kini Section */
    .pelestarian-image {
        /* Hapus width/height dari HTML, biarkan img-fluid yang mengatur */
        max-width: 100%;
        height: auto;
    }
    .pelestarian-title {
        color: #7B241C;
    }

    /* Galeri Aksara Batak Section */
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
    .card-body p {
        font-size: 0.9rem;
        font-weight: 500;
        color: #333;
    }

    /* ==================================== */
    /* Media Queries untuk Responsivitas */
    /* ==================================== */

    @media (max-width: 991.98px) { /* Medium devices (tablets) and down */
        /* Mengenal Aksara Batak */
        #mengenal-aksara .container .row {
            flex-direction: column-reverse; /* Balik urutan: Slider di atas, Teks di bawah */
        }
        #mengenalAksaraTextContent,
        #mengenalAksaraSlider {
            text-align: center; /* Pusatkan teks dan konten */
        }
        .mengenal-aksara-title,
        .mengenal-aksara-highlight-box {
          margin-left: auto;
          margin-right: auto;
          max-width: 90%; /* Sesuaikan lebar */
        }
        .slider-container {
            padding-bottom: 90%; /* Sesuaikan rasio aspek untuk mobile jika perlu, lebih tinggi */
            margin-bottom: 2rem; /* Beri jarak setelah slider */
        }
        .dots-container {
            bottom: -30px; /* Sesuaikan posisi dot di mobile */
        }

        /* Pelestarian di Masa Kini */
        #pelestarianMasaKini .col-lg-6 {
            text-align: center; /* Pusatkan teks dan gambar */
        }
        #pelestarianImageContainer {
            margin-bottom: 1.5rem; /* Tambah margin di bawah gambar saat menumpuk */
        }

        /* Video Edukasi */
        #videoEdukasiTextContent,
        #videoEdukasiEmbed {
            text-align: center; /* Pusatkan teks dan video */
        }
    }

    @media (max-width: 767.98px) { /* Small devices (phones) and down */
        .page-section {
            padding: 30px 0 !important; /* Kurangi padding section */
        }
        .container {
            padding: 0 15px !important; /* Kurangi padding container */
        }
        .mengenal-aksara-title, .pelestarian-title, #galeriTitle, #videoEdukasiTextContent h2 {
            font-size: 1.8rem; /* Kurangi ukuran font judul */
        }
        .text-muted {
            font-size: 0.9rem; /* Kurangi ukuran font paragraf */
        }
        .galeri-card .card-img-top {
            height: 180px; /* Sesuai dengan media query yang sudah ada */
        }
        .slider-container {
            padding-bottom: 100%; /* Mungkin 1:1 di ponsel kecil */
        }
    }

    @media (max-width: 575.98px) { /* Extra small devices (portrait phones) */
        .galeri-card .card-img-top {
            height: 160px; /* Lebih kecil lagi untuk ponsel sangat kecil */
        }
    }

</style>

{{-- Lightbox2 JS dan CSS (pastikan ini diatur di layouts/app.blade.php jika digunakan secara global) --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

{{-- GSAP and ScrollTrigger CDN --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        gsap.registerPlugin(ScrollTrigger);

        // Define a breakpoint for animations
        const LG_BREAKPOINT = 991.98; // Matches Bootstrap's 'lg' breakpoint

        // --- Animasi Masthead (Saat halaman dimuat) ---
        gsap.fromTo("#aboutMastheadTitle", { opacity: 0, y: -50 }, { opacity: 1, y: 0, duration: 1 });
        gsap.fromTo("#aboutMastheadText", { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 1, delay: 0.5 });
        gsap.fromTo("#aboutMastheadButton", { opacity: 0, scale: 0 }, { opacity: 1, scale: 1, duration: 0.75, delay: 1, ease: "back.out(1.7)" });

        // --- Animasi "Mengenal Aksara Batak" ---
        if (window.innerWidth > LG_BREAKPOINT) {
            gsap.fromTo("#mengenalAksaraTextContent", { opacity: 0, x: -100 }, {
                opacity: 1, x: 0, duration: 1,
                scrollTrigger: {
                    trigger: "#mengenal-aksara",
                    start: "top 80%",
                    markers: false,
                    once: true
                }
            });
            gsap.fromTo("#mengenalAksaraSlider", { opacity: 0, x: 100 }, {
                opacity: 1, x: 0, duration: 1, delay: 0.3,
                scrollTrigger: {
                    trigger: "#mengenal-aksara",
                    start: "top 80%",
                    markers: false,
                    once: true
                }
            });
        } else {
            // Animasi vertikal untuk mobile agar tidak bertabrakan dengan layout column stack
            gsap.fromTo("#mengenalAksaraTextContent", { opacity: 0, y: 50 }, {
                opacity: 1, y: 0, duration: 1,
                scrollTrigger: {
                    trigger: "#mengenal-aksara",
                    start: "top 80%",
                    markers: false,
                    once: true
                }
            });
            gsap.fromTo("#mengenalAksaraSlider", { opacity: 0, y: 50 }, {
                opacity: 1, y: 0, duration: 1, delay: 0.3,
                scrollTrigger: {
                    trigger: "#mengenal-aksara",
                    start: "top 80%",
                    markers: false,
                    once: true
                }
            });
        }

        gsap.fromTo("#mengenalAksaraHighlight", { opacity: 0, y: 50 }, {
            opacity: 1, y: 0, duration: 0.8, delay: 0.6,
            scrollTrigger: {
                trigger: "#mengenal-aksara",
                start: "top 80%",
                markers: false,
                once: true
            }
        });

        // --- Animasi "Pelestarian di Masa Kini" ---
        if (window.innerWidth > LG_BREAKPOINT) {
            gsap.fromTo("#pelestarianTextContent", { opacity: 0, x: 100 }, {
                opacity: 1, x: 0, duration: 1,
                scrollTrigger: {
                    trigger: "#pelestarianMasaKini",
                    start: "top 80%",
                    markers: false,
                    once: true
                }
            });
            gsap.fromTo("#pelestarianImageContainer", { opacity: 0, x: -100 }, {
                opacity: 1, x: 0, duration: 1, delay: 0.3,
                scrollTrigger: {
                    trigger: "#pelestarianMasaKini",
                    start: "top 80%",
                    markers: false,
                    once: true
                }
            });
        } else {
            gsap.fromTo("#pelestarianTextContent", { opacity: 0, y: 50 }, {
                opacity: 1, y: 0, duration: 1,
                scrollTrigger: {
                    trigger: "#pelestarianMasaKini",
                    start: "top 80%",
                    markers: false,
                    once: true
                }
            });
            gsap.fromTo("#pelestarianImageContainer", { opacity: 0, y: 50 }, {
                opacity: 1, y: 0, duration: 1, delay: 0.3,
                scrollTrigger: {
                    trigger: "#pelestarianMasaKini",
                    start: "top 80%",
                    markers: false,
                    once: true
                }
            });
        }


        // --- Animasi Galeri Aksara Batak ---
        gsap.fromTo("#galeriTitle", { opacity: 0, y: -50 }, {
            opacity: 1, y: 0, duration: 0.8,
            scrollTrigger: {
                trigger: "#galeri",
                start: "top 80%",
                markers: false,
                once: true
            }
        });
        gsap.utils.toArray(".galeri-card").forEach((card, index) => {
            gsap.fromTo(card, { opacity: 0, scale: 0.8 }, {
                opacity: 1, scale: 1, duration: 0.7, ease: "back.out(1.7)", delay: index * 0.1,
                scrollTrigger: {
                    trigger: card,
                    start: "top 85%",
                    markers: false,
                    once: true
                }
            });
        });

        // --- Animasi Video Edukasi Aksara Batak ---
        if (window.innerWidth > LG_BREAKPOINT) {
            gsap.fromTo("#videoEdukasiTextContent", { opacity: 0, x: -100 }, {
                opacity: 1, x: 0, duration: 1,
                scrollTrigger: {
                    trigger: "#video-edukasi",
                    start: "top 80%",
                    markers: false,
                    once: true
                }
            });
            gsap.fromTo("#videoEdukasiEmbed", { opacity: 0, x: 100 }, {
                opacity: 1, x: 0, duration: 1, delay: 0.3,
                scrollTrigger: {
                    trigger: "#video-edukasi",
                    start: "top 80%",
                    markers: false,
                    once: true
                }
            });
        } else {
            gsap.fromTo("#videoEdukasiTextContent", { opacity: 0, y: 50 }, {
                opacity: 1, y: 0, duration: 1,
                scrollTrigger: {
                    trigger: "#video-edukasi",
                    start: "top 80%",
                    markers: false,
                    once: true
                }
            });
            gsap.fromTo("#videoEdukasiEmbed", { opacity: 0, y: 50 }, {
                opacity: 1, y: 0, duration: 1, delay: 0.3,
                scrollTrigger: {
                    trigger: "#video-edukasi",
                    start: "top 80%",
                    markers: false,
                    once: true
                }
            });
        }
    });
</script>

@endsection