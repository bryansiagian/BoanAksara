<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Platform pembelajaran Aksara Batak interaktif." />
    <meta name="author" content="Tim Pengembang BoanAksara" />

    <title>@yield('title', 'Default Title') - BoanAksara</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />

    {{-- Bootstrap CSS (pastikan versi 5.2.3 karena menggunakan data-bs-toggle) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    {{-- Google Fonts (Merriweather Sans, Merriweather, Poppins, Noto Sans Batak) --}}
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Batak&display=swap" rel="stylesheet">
    {{-- SimpleLightbox CSS --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    {{-- Custom CSS --}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    {{-- Slick Carousel CSS (jika masih digunakan) --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    {{-- AOS CSS (jika masih digunakan, meskipun GSAP lebih disarankan) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    {{-- Font Awesome (untuk ikon) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- jQuery (pastikan di load sebelum slick jika slick digunakan) --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- Slick Carousel JS (jika masih digunakan) --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#page-top" style="gap: 8px;">
                <img src="{{ asset('assets/img/logoBoanAksara.png') }}" alt="Logo BoanAksara" style="height: 55px; width: auto; animation: pulse 2s infinite;" />
                <span class="align-middle" style="font-size: 1.25rem;">BoanAksara</span>
            </a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="/history">Sejarah</a></li>
                    <li class="nav-item"><a class="nav-link" href="/course">Kursus</a></li>
                    <li class="nav-item"><a class="nav-link" href="/course#quiz">Kuis</a></li> {{-- Link Kuis baru --}}
                    <li class="nav-item"><a class="nav-link" href="/contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="text-white-50 py-5" style="background-color: #7B2F28;"> {{-- Warna utama footer --}}
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-between align-items-start text-center text-md-start">

                <div class="col-md-4 col-lg-4 mb-4 mb-md-0">
                    <h3 class="text-white fw-bold mb-3">BoanAksara</h3>
                    <p class="small">
                        BoanAksara adalah platform edukasi budaya Batak, khususnya dalam pelestarian dan pembelajaran Aksara Batak secara digital dan interaktif.
                    </p>
                    <img src="{{ asset('assets/img/logoBoanAksara.png') }}" alt="Logo BoanAksara" style="height: 80px; width: auto; margin-top: 15px;" />
                </div>

                <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                    <h4 class="text-white fw-bold mb-3">Navigasi Cepat</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}" class="text-white-50 text-decoration-none py-1 d-block">Beranda</a></li>
                        <li><a href="{{ route('about') }}" class="text-white-50 text-decoration-none py-1 d-block">Tentang Kami</a></li>
                        <li><a href="{{ route('history') }}" class="text-white-50 text-decoration-none py-1 d-block">Sejarah Aksara</a></li>
                        <li><a href="{{ route('course') }}" class="text-white-50 text-decoration-none py-1 d-block">Kursus</a></li>
                        <li><a href="/course#quiz" class="text-white-50 text-decoration-none py-1 d-block">Kuis</a></li>
                        <li><a href="{{ route('contact') }}" class="text-white-50 text-decoration-none py-1 d-block">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-lg-4">
                    <h4 class="text-white fw-bold mb-3">Hubungi Kami</h4>
                    <p class="small mb-1"><i class="bi bi-envelope-fill me-2"></i>Email: <a href="mailto:boanaksara@gmail.com" class="text-white-50 text-decoration-none">boanaksara@gmail.com</a></p>
                    <p class="small mb-1"><i class="bi bi-whatsapp me-2"></i>WhatsApp: <a href="https://wa.me/6282163526363" target="_blank" class="text-white-50 text-decoration-none">+6282163526363</a></p>

                    <h5 class="text-white fw-bold mt-4 mb-2">Ikuti Kami</h5>
                    <div class="d-flex justify-content-center justify-content-md-start gap-3">
                        <a href="https://instagram.com/boanaksara" target="_blank" class="text-white-50 fs-4"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@BoanAksara" target="_blank" class="text-white-50 fs-4"><i class="fab fa-youtube"></i></a>
                        <a href="https://wa.me/6282163526363" target="_blank" class="text-white-50 fs-4"><i class="fab fa-whatsapp"></i></a>
                        <a href="#" target="_blank" class="text-white-50 fs-4"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid text-white-50 text-center py-3 mt-4"
            <div class="container">
                <small>© 2025 | BoanAksara - Melestarikan Budaya Lewat Teknologi</small>
            </div>
        </div>
    </footer>

    {{-- Bootstrap JS Bundle --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    {{-- SimpleLightbox JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    {{-- Custom scripts.js (jika ada) --}}
    <script src="{{ asset('js/scripts.js') }}"></script>
    {{-- SB Forms JS (jika digunakan untuk form) --}}
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    {{-- Popper JS (sering diperlukan untuk Bootstrap, tapi sudah ada di bundle 5.x) --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script> --}}

    {{-- AOS JS (jika masih digunakan) --}}
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Inisialisasi AOS jika masih digunakan pada halaman lain yang belum di-GSAP
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    </script>

    @stack('scripts')
</bod