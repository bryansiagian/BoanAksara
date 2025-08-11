@extends('layouts.app')

@section('title', 'Sejarah Aksara Batak')

@section('content')

<!-- Masthead (Header) -->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-white font-weight-bold" id="historyTitle">Jejak Panjang Aksara Batak</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5" id="historyText">
                    Telusuri sejarah aksara Batak, dari asal-usul hingga perkembangannya di era modern.
                    Kenali bagaimana aksara ini menjadi bagian tak terpisahkan dari identitas budaya Batak.
                </p>
                <a class="btn btn-maroon btn-xl" href="#asalusul" id="historyButton">Mulai Menjelajah</a>
            </div>
        </div>
    </div>
</header>

<!-- Masa Awal -->
<section class="page-section history-section-bg-light py-5" id="asalusul">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-lg-6 order-lg-2 history-image">
                <img class="img-fluid rounded mb-4 mb-lg-0 animated-image" src="{{ asset('assets/img/a13.png') }}"
                    alt="Ilustrasi Masa Awal Aksara Batak" />
            </div>
            <div class="col-lg-6 order-lg-1 history-content">
                <div class="p-3">
                    <h2 class="text-center text-lg-start history-section-title"><span style="color:#7B241C">Masa Awal (Sebelum Abad ke-13)</span>
                    </h2>
                    <hr class="divider my-4" />
                    <p class="text-muted">
                        Aksara Batak diperkirakan berasal dari turunan aksara Pallawa yang berkembang di India Selatan sekitar abad ke-4 M.
                        Masuknya aksara ke tanah Batak kemungkinan dibawa oleh pedagang dan penyebar agama Hindu-Buddha melalui jalur
                        perdagangan maritim di Sumatra.
                        Bentuk awalnya belum disebut “Aksara Batak”, melainkan varian lokal dari Aksara Kawi.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Perkembangan di Masyarakat Batak -->
<section class="page-section history-section-bg-white py-5" id="perkembangan">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-lg-6 history-image">
                <img class="img-fluid rounded mb-4 mb-lg-0 animated-image" src="{{ asset('assets/img/a17.png') }}"
                    alt="Perkembangan Aksara Batak" />
            </div>
            <div class="col-lg-6 history-content">
                <div class="p-3">
                    <h2 class="text-center text-lg-start history-section-title"><span style="color:#7B241C">Perkembangan di Masyarakat Batak
                            (Abad ke-13 – 16)</span></h2>
                    <hr class="divider my-4" />
                    <p class="text-muted">
                        Aksara mulai digunakan untuk menulis bahasa daerah di wilayah Toba, Mandailing, Karo, Simalungun, Pakpak-Dairi.
                        Penulisan dilakukan di kulit kayu (laklak), bambu, tanduk kerbau, atau tulang.
                    </p>
                    <p class="text-muted">
                        Fungsi utama:
                    <ul>
                        <li>Surat-menyurat (disebut surat tanda)</li>
                        <li>Naskah adat dan hukum</li>
                        <li>Catatan ramalan & mantra (penggunaan oleh datu/paranormal adat)</li>
                    </ul>
                    Masing-masing sub-suku Batak mengembangkan variasi aksara sendiri, walau inti bentuk hurufnya mirip.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Masa Keemasan -->
<section class="page-section history-section-bg-light py-5" id="masa-keemasan">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-lg-6 order-lg-2 history-image">
                <img class="img-fluid rounded mb-4 mb-lg-0 animated-image" src="{{ asset('assets/img/hukumadat.png') }}"
                    alt="Masa Keemasan Aksara Batak" />
            </div>
            <div class="col-lg-6 order-lg-1 history-content">
                <div class="p-3">
                    <h2 class="text-center text-lg-start history-section-title"><span style="color:#7B241C">Masa Keemasan (Abad ke-17 – 19)</span>
                    </h2>
                    <hr class="divider my-4" />
                    <p class="text-muted">
                        Aksara Batak mencapai puncak penggunaannya dan digunakan untuk menulis:
                    <ul>
                        <li>Hukum adat (uhum)</li>
                        <li>Silsilah marga</li>
                        <li>Surat pribadi antar kampung</li>
                        <li>Doa dan mantra ritual</li>
                    </ul>
                    Muncul perbedaan gaya antar daerah: Batak Toba, Batak Mandailing/Angkola, Batak Karo, Batak Simalungun, dan Batak
                    Pakpak-Dairi.
                    Di masa ini, aksara Batak menjadi bagian penting dalam kehidupan sosial, adat, dan keagamaan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Masa Kemunduran -->
<section class="page-section history-section-bg-white py-5" id="masa-kemunduran">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-lg-6 history-image">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('assets/img/a19.png') }}" alt="Masa Kemunduran Aksara Batak" />
            </div>
            <div class="col-lg-6 history-content">
                <div class="p-3">
                    <h2 class="text-center text-lg-start history-section-title"><span style="color:#7B241C">Masa Kemunduran (Akhir Abad ke-19 –
                            Pertengahan Abad ke-20)</span></h2>
                    <hr class="divider my-4" />
                    <p class="text-muted">
                        Masuknya misionaris Kristen dan kolonial Belanda memperkenalkan huruf Latin yang dianggap lebih praktis untuk percetakan
                        dan administrasi.
                        Banyak naskah aksara Batak dibakar atau ditinggalkan karena dianggap berkaitan dengan praktik kepercayaan lama.
                        Generasi baru mulai meninggalkan penggunaan aksara tradisional.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Masa Pelestarian dan Kebangkitan Kembali -->
<section class="page-section history-section-bg-light py-5" id="pelestarian-modern">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-lg-6 order-lg-2 history-image">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('assets/img/a20.png') }}" alt="Pelestarian Modern Aksara Batak" />
            </div>
            <div class="col-lg-6 order-lg-1 history-content">
                <div class="p-3">
                    <h2 class="text-center text-lg-start history-section-title"><span style="color:#7B241C">Masa Pelestarian dan Kebangkitan
                            Kembali (Akhir Abad ke-20 – Sekarang)</span></h2>
                    <hr class="divider my-4" />
                    <p class="text-muted">
                        Upaya dokumentasi oleh peneliti, filolog, dan budayawan mengumpulkan naskah-naskah Batak.
                        Aksara Batak mulai diajarkan di sekolah-sekolah di beberapa daerah Sumatera Utara sebagai muatan lokal dan masuk ke
                        Unicode (versi 6.0, tahun 2010) sehingga bisa digunakan di komputer dan internet.
                    </p>
                    <p class="text-muted">
                        Muncul gerakan pelestarian seperti:
                    <ul>
                        <li>Workshop penulisan aksara Batak</li>
                        <li>Pameran di museum</li>
                        <li>Desain modern (kaos, mural, logo)</li>
                    </ul>
                    Media sosial dan teknologi ikut membantu memperkenalkan kembali aksara Batak pada generasi muda.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS untuk Responsivitas dan Gaya -->
<style>
    /* Styling umum untuk Masthead */
    .masthead {
        background-image: url('{{ asset('assets/img/masthead-bg-history.jpg') }}'); /* Ganti dengan path gambar yang relevan jika ada */
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        min-height: 100vh;
        position: relative;
    }

    /* Styling untuk Section Sejarah */
    .history-section-bg-light {
        background: linear-gradient(to right, #f3f3f3, #ffffff);
    }
    .history-section-bg-white {
        background: white; /* Konsisten dengan nama class */
    }

    .history-section-title {
        color: #7B241C;
    }

    /* ==================================== */
    /* Media Queries untuk Responsivitas */
    /* ==================================== */

    @media (max-width: 991.98px) { /* Untuk tablet dan mobile (breakpoint Bootstrap 'lg' ke bawah) */
        /* Mengatur agar teks dan gambar di tengah saat menumpuk */
        .page-section .container .row .col-lg-6 {
            text-align: center;
        }

        /* Menyesuaikan margin antara gambar dan teks saat menumpuk */
        .history-image {
            margin-bottom: 1.5rem; /* Tambah margin bawah untuk gambar */
        }
        .history-content {
            margin-top: 1.5rem; /* Tambah margin atas untuk konten teks */
        }
        .history-image img {
            max-width: 80%; /* Sesuaikan ukuran gambar pada mobile agar tidak terlalu besar */
            height: auto;
            margin-left: auto;
            margin-right: auto;
            display: block; /* Pastikan gambar menjadi blok untuk centering */
        }

        /* Pastikan list item tetap rata kiri */
        .history-content ul {
            text-align: left;
            margin-left: auto;
            margin-right: auto;
            max-width: fit-content; /* Untuk memusatkan list */
        }
    }

    @media (max-width: 767.98px) { /* Untuk mobile (breakpoint Bootstrap 'md' ke bawah) */
        .page-section {
            padding: 30px 0 !important; /* Kurangi padding section pada mobile */
        }
        .container {
            padding: 0 15px !important; /* Kurangi padding container pada mobile */
        }
        .history-section-title {
            font-size: 1.8rem; /* Kurangi ukuran font judul */
        }
        .text-muted {
            font-size: 0.9rem; /* Kurangi ukuran font paragraf */
        }
    }

    @media (max-width: 575.98px) { /* Untuk mobile sangat kecil (breakpoint Bootstrap 'sm' ke bawah) */
        .history-image img {
            max-width: 90%; /* Sesuaikan lagi untuk ponsel sangat kecil */
        }
        .history-content ul {
            padding-left: 20px; /* Sesuaikan padding list agar tidak terlalu ke kiri */
        }
    }

</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
<script>
    gsap.registerPlugin(ScrollTrigger);

    // Definisi breakpoint yang sama dengan CSS Bootstrap 'lg'
    const LG_BREAKPOINT = 991.98;

    // Animasi Masthead (Tidak berubah karena ini biasanya fixed layout)
    gsap.fromTo("#historyTitle", { opacity: 0, y: 50 }, {
        opacity: 1, y: 0, duration: 1,
        scrollTrigger: {
            trigger: "#historyTitle",
            start: "top 80%",
            end: "bottom 20%",
            markers: false,
            scrub: false,
            once: true
        }
    });

    gsap.fromTo("#historyText", { opacity: 0, y: 50 }, {
        opacity: 1, y: 0, duration: 1, delay: 0.5,
        scrollTrigger: {
            trigger: "#historyText",
            start: "top 80%",
            end: "bottom 20%",
            markers: false,
            scrub: false,
            once: true
        }
    });

    gsap.fromTo("#historyButton", { opacity: 0, scale: 0 }, {
        opacity: 1, scale: 1, duration: 0.75, delay: 1, ease: "back.out(1.7)",
        scrollTrigger: {
            trigger: "#historyButton",
            start: "top 80%",
            end: "bottom 20%",
            markers: false,
            scrub: false,
            once: true
        }
    });

    // Animasi setiap section (tetap vertikal karena section secara keseluruhan akan selalu full-width)
    gsap.utils.toArray(".page-section").forEach(section => {
        gsap.fromTo(section, { opacity: 0, y: 50 }, {
            opacity: 1, y: 0, duration: 0.75,
            scrollTrigger: {
                trigger: section,
                start: "top 80%",
                end: "bottom 20%",
                markers: false,
                scrub: false,
                once: true
            }
        });
    });

    // Animasi gambar dan konten di setiap section - Adaptif berdasarkan ukuran layar
    gsap.utils.toArray(".history-image").forEach(image => {
        if (window.innerWidth > LG_BREAKPOINT) {
            // Untuk desktop, gunakan animasi horizontal asli
            gsap.fromTo(image, { opacity: 0, x: -50 }, {
                opacity: 1, x: 0, duration: 0.75,
                scrollTrigger: {
                    trigger: image,
                    start: "top 80%",
                    end: "bottom 20%",
                    markers: false,
                    scrub: false,
                    once: true
                }
            });
        } else {
            // Untuk mobile, gunakan animasi vertikal
            gsap.fromTo(image, { opacity: 0, y: 50 }, {
                opacity: 1, y: 0, duration: 0.75,
                scrollTrigger: {
                    trigger: image,
                    start: "top 80%",
                    end: "bottom 20%",
                    markers: false,
                    scrub: false,
                    once: true
                }
            });
        }
    });

    gsap.utils.toArray(".history-content").forEach(content => {
        if (window.innerWidth > LG_BREAKPOINT) {
            // Untuk desktop, gunakan animasi horizontal asli
            gsap.fromTo(content, { opacity: 0, x: 50 }, {
                opacity: 1, x: 0, duration: 0.75,
                scrollTrigger: {
                    trigger: content,
                    start: "top 80%",
                    end: "bottom 20%",
                    markers: false,
                    scrub: false,
                    once: true
                }
            });
        } else {
            // Untuk mobile, gunakan animasi vertikal
            gsap.fromTo(content, { opacity: 0, y: 50 }, {
                opacity: 1, y: 0, duration: 0.75,
                scrollTrigger: {
                    trigger: content,
                    start: "top 80%",
                    end: "bottom 20%",
                    markers: false,
                    scrub: false,
                    once: true
                }
            });
        }
    });
</script>

@endsection