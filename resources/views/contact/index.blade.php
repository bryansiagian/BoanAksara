@extends('layouts.app')

@section('title', 'Sejarah Aksara Batak')

@section('content')

<!-- Header -->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end" data-aos="fade-down">
                <h1 class="text-white font-weight-bold">Kontak Kami</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline" data-aos="fade-up" data-aos-delay="100">
                <p class="text-white-75 mb-5">
                    Mari Terhubung dan Jaga Warisan Batak Bersama!
                </p>
                <a class="btn btn-maroon btn-xl" href="#kontak">Hubungi Kami</a>
            </div>
        </div>
    </div>
</header>

<!-- Kontak -->
<section id="kontak" class="py-5 bg-light">
    <div class="container" data-aos="fade-up">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Hubungi Kami</h2>
            <p class="text-muted">Horas! Mari kita diskusikan Aksara Batak bersama - apa yang kami tahu akan kami bagi dengan senang hati!</p>
        </div>

        <div class="row g-5">
            <!-- Info Kontak -->
            <div class="col-md-6" data-aos="fade-right">
                <div class="card shadow rounded h-100 d-flex flex-column justify-content-between">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-3">Informasi Kontak</h5>
                        <p>
                            <i class="bi bi-envelope-fill text-maroon me-2"></i>
                            <a href="mailto:boanaksara@gmail.com" class="text-decoration-none text-dark">boanaksara@gmail.com</a>
                        </p>
                        <p>
                            <i class="bi bi-globe text-maroon me-2"></i>
                            <a href="http://www.BoanAksarabatak.id" target="_blank" class="text-decoration-none text-dark">www.BoanAksarabatak.id</a>
                        </p>

                        <div class="mt-4">
                            <h6 class="fw-bold">Ikuti Kami:</h6>
                            <a href="https://www.instagram.com/boanaksara/" target="_blank" class="text-decoration-none me-3">
                                <i class="bi bi-instagram text-danger fa-2x"></i>
                            </a>
                            <a href="https://www.youtube.com/@BoanAksara" target="_blank" class="text-decoration-none">
                                <i class="bi bi-youtube text-danger fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Google Maps -->
            <div class="col-md-6" data-aos="fade-left">
                <div class="card shadow rounded h-100">
                    <div class="card-body p-0">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.775204329608!2d99.1526964147559!3d2.208970397544146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fdad2d8d2f%3A0x3a1f96ae48827771!2sMuseum%20Batak%20TB%20Silalahi%20Center!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection