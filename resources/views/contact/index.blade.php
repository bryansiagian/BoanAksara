@extends('layouts.app')

@section('title', 'Kontak Kami') {{-- Mengubah title agar lebih sesuai dengan halaman kontak --}}

@section('content')

<!-- Header -->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-white font-weight-bold" id="contactMastheadTitle">Kontak Kami</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5" id="contactMastheadText">
                    Mari Terhubung dan Jaga Warisan Batak Bersama!
                </p>
                <a class="btn btn-maroon btn-xl" href="#kontak" id="contactMastheadButton">Hubungi Kami</a>
            </div>
        </div>
    </div>
</header>

<!-- Kontak -->
<section id="kontak" class="py-5 bg-light page-section"> {{-- Menambahkan class page-section untuk animasi umum --}}
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" id="contactSectionTitle">Hubungi Kami</h2>
            <p class="text-muted" id="contactSectionSubtitle">Horas! Mari kita diskusikan Aksara Batak bersama - apa yang kami tahu akan kami bagi dengan senang hati!</p>
        </div>

        <div class="row g-5">
            <!-- Info Kontak -->
            <div class="col-md-6" id="contactInfoCard">
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
            <div class="col-md-6" id="googleMapsCard">
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

{{-- GSAP and ScrollTrigger CDN --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        gsap.registerPlugin(ScrollTrigger);

        // --- Animasi Masthead (Saat halaman dimuat) ---
        gsap.fromTo("#contactMastheadTitle", { opacity: 0, y: -50 }, { opacity: 1, y: 0, duration: 1 });
        gsap.fromTo("#contactMastheadText", { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 1, delay: 0.5 });
        gsap.fromTo("#contactMastheadButton", { opacity: 0, scale: 0 }, { opacity: 1, scale: 1, duration: 0.75, delay: 1, ease: "back.out(1.7)" });

        // --- Animasi Bagian "Kontak Kami" ---
        gsap.fromTo("#contactSectionTitle", { opacity: 0, y: 50 }, {
            opacity: 1, y: 0, duration: 0.8,
            scrollTrigger: {
                trigger: "#kontak",
                start: "top 80%",
                markers: false,
                once: true
            }
        });
        gsap.fromTo("#contactSectionSubtitle", { opacity: 0, y: 50 }, {
            opacity: 1, y: 0, duration: 0.8, delay: 0.2,
            scrollTrigger: {
                trigger: "#kontak",
                start: "top 80%",
                markers: false,
                once: true
            }
        });

        // Animasi Kartu Info Kontak (muncul dari kiri)
        gsap.fromTo("#contactInfoCard", { opacity: 0, x: -100 }, {
            opacity: 1, x: 0, duration: 1, ease: "power3.out",
            scrollTrigger: {
                trigger: "#contactInfoCard",
                start: "top 80%",
                markers: false,
                once: true
            }
        });

        // Animasi Google Maps Card (muncul dari kanan)
        gsap.fromTo("#googleMapsCard", { opacity: 0, x: 100 }, {
            opacity: 1, x: 0, duration: 1, ease: "power3.out", delay: 0.3, // Sedikit delay agar ada efek staggered
            scrollTrigger: {
                trigger: "#googleMapsCard",
                start: "top 80%",
                markers: false,
                once: true
            }
        });
    });
</script>

@endsection