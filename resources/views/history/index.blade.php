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
<section class="page-section bg-light py-5" id="asalusul" style="background: linear-gradient(to right, #f3f3f3, #ffffff);">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-lg-6 order-lg-2 history-image">
                <img class="img-fluid rounded mb-4 mb-lg-0 animated-image" src="{{ asset('assets/img/a13.png') }}"
                    alt="Ilustrasi Masa Awal Aksara Batak" />
            </div>
            <div class="col-lg-6 order-lg-1 history-content">
                <div class="p-3">
                    <h2 class="text-center text-lg-start"><span style="color:#7B241C">Masa Awal (Sebelum Abad ke-13)</span>
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

<section class="page-section bg-white py-5" id="perkembangan">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-lg-6 history-image">
                <img class="img-fluid rounded mb-4 mb-lg-0 animated-image" src="{{ asset('assets/img/a17.png') }}"
                    alt="Perkembangan Aksara Batak" />
            </div>
            <div class="col-lg-6 history-content">
                <div class="p-3">
                    <h2 class="text-center text-lg-start"><span style="color:#7B241C">Perkembangan di Masyarakat Batak
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

<section class="page-section bg-light py-5" id="masa-keemasan"
    style="background: linear-gradient(to right, #f3f3f3, #ffffff);">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-lg-6 order-lg-2 history-image">
                <img class="img-fluid rounded mb-4 mb-lg-0 animated-image" src="{{ asset('assets/img/hukumadat.png') }}"
                    alt="Masa Keemasan Aksara Batak" />
            </div>
            <div class="col-lg-6 order-lg-1 history-content">
                <div class="p-3">
                    <h2 class="text-center text-lg-start"><span style="color:#7B241C">Masa Keemasan (Abad ke-17 – 19)</span>
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

<section class="page-section bg-white py-5" id="masa-kemunduran">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-lg-6 history-image">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('assets/img/a19.png') }}" alt="Masa Kemunduran Aksara Batak" />
            </div>
            <div class="col-lg-6 history-content">
                <div class="p-3">
                    <h2 class="text-center text-lg-start"><span style="color:#7B241C">Masa Kemunduran (Akhir Abad ke-19 –
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

<section class="page-section bg-light py-5" id="pelestarian-modern"
    style="background: linear-gradient(to right, #f3f3f3, #ffffff);">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-lg-6 order-lg-2 history-image">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('assets/img/a20.png') }}" alt="Pelestarian Modern Aksara Batak" />
            </div>
            <div class="col-lg-6 order-lg-1 history-content">
                <div class="p-3">
                    <h2 class="text-center text-lg-start"><span style="color:#7B241C">Masa Pelestarian dan Kebangkitan
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
<script>
    gsap.registerPlugin(ScrollTrigger);

    // Animasi Masthead
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

    // Animasi setiap section
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

    // Animasi gambar di setiap section
    gsap.utils.toArray(".history-image").forEach(image => {
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
    });

    // Animasi konten di setiap section
    gsap.utils.toArray(".history-content").forEach(content => {
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
    });
</script>

@endsection