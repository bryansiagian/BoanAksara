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

<!-- Services -->
<section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">BoanAksara</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Kaya Budaya</h3>
                    <p class="text-muted mb-0">Aksara Batak adalah bagian dari kekayaan budaya Indonesia.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Up to Date</h3>
                    <p class="text-muted mb-0">Konten dan materi selalu diperbarui secara berkala.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Siap Dipelajari</h3>
                    <p class="text-muted mb-0">Desain responsif dan mudah diakses siapa pun.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Dengan Cinta</h3>
                    <p class="text-muted mb-0">Dibuat dengan cinta terhadap budaya Batak.</p>
                </div>
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

<!-- Video Edukasi -->
<section class="page-section" id="video-edukasi">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="fw-bold">Video Edukasi Aksara Batak</h2>
                <p class="text-muted">Pelajari penulisan dan sejarah Aksara Batak melalui video interaktif berikut.</p>
            </div>
            <div class="col-lg-6">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/PzFSHPQ-X9Y" title="Video Aksara Batak" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Lightbox2 JS dan CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

@endsection