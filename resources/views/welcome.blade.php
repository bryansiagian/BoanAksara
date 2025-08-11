@extends('layouts.app')

@section('title', 'Belajar Aksara Batak')

@section('content')
<!-- Masthead (Beranda) -->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-white font-weight-bold" id="mastheadTitle">Boan Aksara</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5" id="mastheadText">Selamat datang di Boan Aksara! Jelajahi keindahan dan kekayaan aksara Batak, warisan budaya yang tak ternilai harganya. Mulai perjalanan Anda sekarang dan lestarikan bersama!</p>
                <a class="btn btn-maroon btn-xl" href="#home" id="mastheadButton">Jelajahi</a>
            </div>
        </div>
    </div>
</header>

<!-- About Aksara Batak -->
<section id="home" class="about-section">
    <div class="container">
        <div class="about-content">
            <!-- Kolom Teks (Kiri) -->
            <div class="text-content" id="aboutContent">
                <h2 id="aboutTitle">
                    <span>
                        Tentang Boan Aksara
                    </span>
                </h2>
                <p id="aboutText">
                    <strong>BoanAksara</strong> adalah platform digital yang didedikasikan untuk melestarikan dan mempromosikan Aksara Batak, warisan budaya leluhur yang tak ternilai. Kami menghadirkan metode pembelajaran interaktif yang mudah dipahami untuk semua kalangan.
                </p>
                <div class="highlight-box">
                    <p>
                        "Melestarikan aksara Batak berarti menjaga identitas budaya kita untuk generasi mendatang"
                    </p>
                </div>
                <div class="cta-button">
                    <a href="#lihatfitur">
                        Lihat Fitur
                    </a>
                </div>
            </div>

            <!-- Gambar (Kanan) -->
            <div class="image-content" id="aboutImage">
                <div class="image-wrapper">
                    <img src="assets/img/horasi.png"
                         alt="Contoh Aksara Batak" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="spacer-section"></section>

<!-- Homepage Features Section -->
<section id="lihatfitur" class="features-section">
    <div class="container my-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: #7B241C;">Fitur Utama</h2>
            <p class="lead">Jelajahi berbagai fitur pembelajaran Aksara Batak</p>
        </div>

        <div class="row g-4">
            <!-- Card Box Fitur (Kamus Aksara) -->
            <div class="col-md-6 col-lg-3 feature-card">
                <div class="card h-100 border-0 shadow-sm hover-effect">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-3" style="background-color: #f8e8e8; width: 80px; height: 80px; margin: 0 auto; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-collection" style="font-size: 2rem; color: #7B241C;"></i>
                        </div>
                        <h5 class="card-title" style="color: #7B241C;">Koleksi Aksara</h5>
                        <p class="card-text">Pelajari semua aksara Batak dari berbagai varian</p>
                        {{-- Mengubah href ke halaman course dan section #kamus --}}
                        <a href="{{ url('/course#kamus') }}" class="btn btn-outline-batak">Jelajahi</a>
                    </div>
                </div>
            </div>

            <!-- Transliterasi -->
            <div class="col-md-6 col-lg-3 feature-card">
                <div class="card h-100 border-0 shadow-sm hover-effect">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-3" style="background-color: #e8f1f8; width: 80px; height: 80px; margin: 0 auto; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-translate" style="font-size: 2rem; color: #1a5276;"></i>
                        </div>
                        <h5 class="card-title" style="color: #1a5276;">Transliterasi</h5>
                        <p class="card-text">Konversi teks Latin ke Aksara Batak secara instan</p>
                        {{-- Mengubah href ke halaman course dan section #transliterasi --}}
                        <a href="{{ url('/course#transliterasi') }}" class="btn btn-outline-primary">Coba Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Kuis -->
            <div class="col-md-6 col-lg-3 feature-card">
                <div class="card h-100 border-0 shadow-sm hover-effect">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-3" style="background-color: #e8f8f0; width: 80px; height: 80px; margin: 0 auto; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-question-circle" style="font-size: 2rem; color: #28a745;"></i>
                        </div>
                        <h5 class="card-title" style="color: #28a745;">Kuis Interaktif</h5>
                        <p class="card-text">Uji pengetahuan Anda tentang Aksara Batak</p>
                        {{-- Mengubah href ke halaman course dan section #quiz --}}
                        <a href="{{ url('/course#quiz') }}" class="btn btn-outline-success">Mulai Kuis</a>
                    </div>
                </div>
            </div>

            <!-- Canvas -->
            <div class="col-md-6 col-lg-3 feature-card">
                <div class="card h-100 border-0 shadow-sm hover-effect">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-3" style="background-color: #f5e8f8; width: 80px; height: 80px; margin: 0 auto; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-pencil" style="font-size: 2rem; color: #9b59b6;"></i>
                        </div>
                        <h5 class="card-title" style="color: #9b59b6;">Canvas Menulis</h5>
                        <p class="card-text">Latihan menulis aksara Batak secara digital</p>
                        {{-- Mengubah href ke halaman course dan section #latihan-menulis --}}
                        <a href="{{ url('/course#latihan-menulis') }}" class="btn btn-outline-purple">Mulai Menulis</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Foto Fitur Utama Besar dengan Keterangan -->
<section class="container my-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold" style="color: #7B241C;">Visualisasi Fitur Utama</h2>
        <p class="lead">Lihat secara jelas tampilan fitur yang membantu pembelajaran Anda</p>
    </div>

    <div class="row g-5">
        <!-- Foto 1 - Koleksi Aksara -->
        <div class="col-md-6 feature-image" id="feature1">
            <div class="feature-image-container">
                <img src="assets/img/kamus.png" alt="Koleksi Aksara"
                     class="img-fluid" />
            </div>
            <p class="mt-3 text-center fw-semibold" style="color: #7B241C; font-size: 1.2rem;">Koleksi Aksara Batak</p>
            <p class="text-center text-muted" style="font-size: 0.9rem; max-width: 90%; margin: 0 auto;">
                Fitur ini menampilkan berbagai varian aksara Batak untuk dipelajari dengan detail dan gambar pendukung.
            </p>
        </div>

        <!-- Foto 2 -->
        <div class="col-md-6 feature-image" id="feature2">
            <div class="feature-image-container">
                <img src="assets/img/transliterasi.png" alt="Transliterasi"
                     class="img-fluid" />
            </div>
            <p class="mt-3 text-center fw-semibold" style="color: #1a5276; font-size: 1.2rem;">Fitur Transliterasi Otomatis</p>
            <p class="text-center text-muted" style="font-size: 0.9rem; max-width: 90%; margin: 0 auto;">
                Mengubah teks Latin menjadi aksara Batak secara instan dengan akurasi tinggi.
            </p>
        </div>
        <!-- Foto 3 - Kuis Interaktif -->
        <div class="col-md-6 feature-image" id="feature3">
            <div class="feature-image-container">
                <img src="assets/img/kuis.png" alt="Kuis Interaktif"
                     class="img-fluid" />
            </div>
            <p class="mt-3 text-center fw-semibold" style="color: #28a745; font-size: 1.2rem;">Kuis Interaktif Mengasah Pengetahuan</p>
            <p class="text-center text-muted" style="font-size: 0.9rem; max-width: 90%; margin: 0 auto;">
                Uji kemampuan Anda dengan kuis yang menantang dan menyenangkan tentang aksara Batak.
            </p>
        </div>
        <!-- Foto 4 - Canvas Menulis -->
        <div class="col-md-6 feature-image" id="feature4">
            <div class="feature-image-container">
                <img src="assets/img/canva.png" alt="Canvas Menulis"
                     class="img-fluid" />
            </div>
            <p class="mt-3 text-center fw-semibold" style="color: #9b59b6; font-size: 1.2rem;">Latihan Menulis Digital</p>
            <p class="text-center text-muted" style="font-size: 0.9rem; max-width: 90%; margin: 0 auto;">
                Praktik menulis aksara Batak secara digital dengan fitur yang interaktif dan mudah digunakan.
            </p>
        </div>
    </div>
</section>

<!-- CSS Kustom untuk Responsivitas dan Gaya -->
<style>
    /* Styling umum */
    ::selection { background: #ffffff; color: #000; }
    ::-moz-selection { background: #ffffff; color: #000; }

    /* Masthead background image (pastikan Anda mengaturnya di CSS jika ada) */
    .masthead {
        background-image: url('{{ asset('assets/img/masthead-bg.jpg') }}'); /* Ganti dengan path gambar Anda */
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        min-height: 100vh;
        position: relative;
    }

    /* Styles untuk About Section (About Aksara Batak) */
    .about-section {
        background: white;
        padding: 5rem 0;
        position: relative;
    }
    .about-section .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }
    .about-content {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 4rem;
    }
    .text-content {
        flex: 1;
        min-width: 300px;
        padding-right: 2rem;
    }
    #aboutTitle {
        font-family: Arial, sans-serif;
        color: #800000;
        font-size: 2.5rem;
        margin-bottom: 1.8rem;
        position: relative;
        line-height: 1.3;
        font-weight: bold;
    }
    #aboutText {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #333;
        margin-bottom: 2rem;
    }
    .highlight-box {
        background: #FFF0F0;
        border-left: 4px solid #800000;
        padding: 1.2rem;
        margin: 2rem 0;
        border-radius: 0 8px 8px 0;
    }
    .highlight-box p {
        margin: 0;
        font-style: italic;
        color: #500000;
    }
    .cta-button {
        margin-top: 1.5rem;
    }
    .cta-button a {
        display: inline-flex;
        align-items: center;
        padding: 0.9rem 2.2rem;
        background: #800000;
        color: white;
        text-decoration: none;
        border-radius: 50px;
        font-weight: bold;
        transition: all 0.3s;
        box-shadow: 0 4px 8px rgba(128,0,0,0.2);
    }

    .image-content {
        flex: 1;
        min-width: 300px;
        position: relative;
        align-self: center;
    }
    .image-wrapper { /* Mengganti div dengan inline style */
        border-radius: 8px;
        overflow: hidden;
    }
    .image-content img {
        width: 100%;
        max-width: 450px;
        height: auto;
        display: block;
        margin: 0 auto;
        /* Transform diatur di media query untuk responsivitas */
        transform: translateY(-100px); /* Default for desktop */
    }

    /* Spacer section (previously the second about-section) */
    .spacer-section {
        background: #7B241C;
        padding: 5rem 0;
        position: relative;
    }

    /* Homepage Features Section */
    .features-section {
        background-color: #f1f1f1;
        padding: 3rem 0;
        border-radius: 0 0 12px 12px;
    }

    /* Hover effect for cards */
    .hover-effect {
        transition: all 0.3s ease;
        border-radius: 12px;
    }
    .hover-effect:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }

    /* Custom button styles */
    .btn-outline-batak { border-color: #7B241C; color: #7B241C; }
    .btn-outline-batak:hover { background-color: #7B241C; color: white; }
    .btn-outline-purple { border-color: #9b59b6; color: #9b59b6; }
    .btn-outline-purple:hover { background-color: #9b59b6; color: white; }
    .card { border: 1px solid rgba(0,0,0,0.1); }

    /* Visualisasi Fitur Utama Section */
    .feature-image-container {
        /* Hapus height: 400px; yang statis */
        padding-bottom: 75%; /* Menjaga rasio aspek 4:3. Sesuaikan jika gambar Anda memiliki rasio aspek berbeda (misal: 56.25% untuk 16:9) */
        position: relative; /* Penting untuk penempatan gambar absolut di dalamnya */
        background: #f8f9fa;
        border-radius: 10px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }
    .feature-image-container img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: contain; /* Memastikan gambar muat tanpa terpotong */
    }

    /* Efek bayangan */
    .shadow-lg {
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        transition: transform 0.3s ease;
    }
    .shadow-lg:hover {
        transform: scale(1.03);
        box-shadow: 0 20px 40px rgba(0,0,0,0.25);
    }

    /* ==================================== */
    /* Media Queries untuk Responsivitas */
    /* ==================================== */

    @media (max-width: 991.98px) { /* Untuk tablet dan mobile (breakpoint Bootstrap 'lg' ke bawah) */
        .about-content {
            gap: 2rem; /* Kurangi jarak antar elemen flex */
        }
        .text-content {
            padding-right: 0; /* Hapus padding kanan saat elemen menumpuk */
            text-align: center; /* Pusatkan teks saat stacked */
        }
        .text-content h2, .text-content p {
            margin-left: auto;
            margin-right: auto;
        }
        .highlight-box {
            margin-left: auto;
            margin-right: auto;
            max-width: 90%; /* Sesuaikan lebar highlight box */
        }
        .cta-button {
            text-align: center; /* Pusatkan tombol CTA */
        }
        .image-content img {
            transform: translateY(0px) !important; /* Nonaktifkan transform pada mobile */
            margin-top: 2rem; /* Beri sedikit ruang setelah teks */
            max-width: 80%; /* Sesuaikan ukuran gambar pada mobile */
        }
    }

    @media (max-width: 767.98px) { /* Untuk mobile (breakpoint Bootstrap 'md' ke bawah) */
        .masthead .col-lg-10,
        .masthead .col-lg-8 {
            padding-left: 15px; /* Pastikan padding standar Bootstrap */
            padding-right: 15px;
        }
        .about-section {
            padding: 3rem 0; /* Kurangi padding section pada mobile */
        }
        .about-section .container {
            padding: 0 1rem; /* Kurangi padding container pada mobile */
        }
        #aboutTitle {
            font-size: 2rem; /* Kurangi ukuran font judul */
            margin-bottom: 1rem;
        }
        #aboutText {
            font-size: 1rem; /* Kurangi ukuran font teks */
            line-height: 1.6;
        }
        .feature-image-container {
            padding-bottom: 75%; /* Bisa juga disesuaikan lagi jika perlu */
        }
        .feature-image p {
            font-size: 1rem !important; /* Sesuaikan ukuran font keterangan gambar fitur */
        }
    }

    @media (max-width: 575.98px) { /* Untuk mobile sangat kecil (breakpoint Bootstrap 'sm' ke bawah) */
        .features-section .container,
        .container.my-5 {
            padding: 0 1rem !important; /* Pastikan padding container konsisten */
        }
        .text-content .highlight-box {
            padding: 1rem; /* Padding highlight box yang lebih kecil */
        }
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
<script>
    gsap.registerPlugin(ScrollTrigger);

    // Animasi Masthead
    gsap.fromTo("#mastheadTitle", { opacity: 0, y: 50 }, {
        opacity: 1, y: 0, duration: 1,
        scrollTrigger: {
            trigger: "#mastheadTitle",
            start: "top 80%",
            end: "bottom 20%",
            markers: false,
            scrub: false,
            once: true
        }
    });

    gsap.fromTo("#mastheadText", { opacity: 0, y: 50 }, {
        opacity: 1, y: 0, duration: 1, delay: 0.5,
        scrollTrigger: {
            trigger: "#mastheadText",
            start: "top 80%",
            end: "bottom 20%",
            markers: false,
            scrub: false,
            once: true
        }
    });

    gsap.fromTo("#mastheadButton", { opacity: 0, scale: 0 }, {
        opacity: 1, scale: 1, duration: 0.75, delay: 1, ease: "back.out(1.7)",
        scrollTrigger: {
            trigger: "#mastheadButton",
            start: "top 80%",
            end: "bottom 20%",
            markers: false,
            scrub: false,
            once: true
        }
    });

    // Animasi About Section
    // Sesuaikan animasi berdasarkan ukuran layar untuk #aboutImage
    if (window.innerWidth > 991.98) { // Gunakan breakpoint yang sama dengan CSS media query untuk konsistensi
        gsap.fromTo("#aboutContent", { opacity: 0, x: -50 }, {
            opacity: 1, x: 0, duration: 1,
            scrollTrigger: {
                trigger: "#aboutContent",
                start: "top 80%",
                end: "bottom 20%",
                markers: false,
                scrub: false,
                once: true
            }
        });
        gsap.fromTo("#aboutImage", { opacity: 0, y: 100 }, {
            opacity: 1, y: -100, duration: 1, // Animasi asli untuk layar besar
            scrollTrigger: {
                trigger: "#aboutImage",
                start: "top 80%",
                end: "bottom 20%",
                markers: false,
                scrub: false,
                once: true
            }
        });
    } else { // Untuk layar kecil, animasi tanpa Y transform
        gsap.fromTo("#aboutContent", { opacity: 0, y: 50 }, { // Animasi hanya dari bawah
            opacity: 1, y: 0, duration: 1,
            scrollTrigger: {
                trigger: "#aboutContent",
                start: "top 80%",
                end: "bottom 20%",
                markers: false,
                scrub: false,
                once: true
            }
        });
        gsap.fromTo("#aboutImage", { opacity: 0, y: 50 }, { // Animasi hanya dari bawah
            opacity: 1, y: 0, duration: 1,
            scrollTrigger: {
                trigger: "#aboutImage",
                start: "top 80%",
                end: "bottom 20%",
                markers: false,
                scrub: false,
                once: true
            }
        });
    }

    // Animasi Fitur Utama Cards
    gsap.utils.toArray(".feature-card").forEach((card, index) => {
        gsap.fromTo(card, { opacity: 0, y: 50 }, {
            opacity: 1, y: 0, duration: 0.75, delay: index * 0.2,
            scrollTrigger: {
                trigger: card,
                start: "top 80%",
                end: "bottom 20%",
                markers: false,
                scrub: false,
                once: true
            }
        });
    });

    // Animasi Gambar Fitur Utama
    gsap.utils.toArray(".feature-image").forEach((image, index) => {
        gsap.fromTo(image, { opacity: 0, y: 50 }, {
            opacity: 1, y: 0, duration: 0.75, delay: index * 0.2,
            scrollTrigger: {
                trigger: image,
                start: "top 80%",
                end: "bottom 20%",
                markers: false,
                scrub: false,
                once: true
            }
        });
    });
</script>
@endsection