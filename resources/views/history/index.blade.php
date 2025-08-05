@extends('layouts.app')

@section('title', 'Sejarah Aksara Batak')

@section('content')
    <!-- Masthead (Header) -->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-white font-weight-bold">Jejak Panjang Aksara Batak</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">
                        Telusuri sejarah aksara Batak, dari asal-usul hingga perkembangannya di era modern.
                        Kenali bagaimana aksara ini menjadi bagian tak terpisahkan dari identitas budaya Batak.
                    </p>
                    <a class="btn btn-maroon btn-xl" href="#asal-usul">Mulai Menjelajah</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Sejarah Aksara Batak -->
    <section class="page-section bg-light py-5" id="asal-usul" style="background: linear-gradient(to right, #f3f3f3, #ffffff);">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('assets/img/sejarah1.jpg') }}" alt="Ilustrasi Naskah Batak Kuno" />
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-3">
                        <h2 class="text-center text-lg-start"><span style="color:#7B241C">Asal-Usul dan Perkembangan</span></h2>
                        <hr class="divider my-4" />
                        <p class="text-muted">
                            Aksara Batak diperkirakan berasal dari aksara Pallawa yang dibawa oleh pedagang dan pendeta dari India ke Sumatera pada abad ke-13. Aksara ini kemudian mengalami perkembangan dan adaptasi sesuai dengan kebutuhan bahasa dan budaya masyarakat Batak.
                        </p>
                        <p class="text-muted">
                            Setiap kelompok etnis Batak (Toba, Karo, Simalungun, Pakpak, Mandailing) mengembangkan variasi aksara mereka sendiri, meskipun dengan dasar yang sama.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Penggunaan Aksara Batak -->
    <section class="page-section bg-white py-5" id="penggunaan">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('assets/img/sejarah2.jpg') }}" alt="Penggunaan Aksara Batak pada Bambu" />
                </div>
                <div class="col-lg-6">
                    <div class="p-3">
                        <h2 class="text-center text-lg-start"><span style="color:#7B241C">Penggunaan dalam Kehidupan</span></h2>
                        <hr class="divider my-4" />
                        <p class="text-muted">
                            Aksara Batak digunakan dalam berbagai aspek kehidupan tradisional, termasuk:
                        </p>
                        <ul>
                            <li>Surat-menyurat</li>
                            <li>Catatan sejarah dan silsilah</li>
                            <li>Manuskrip keagamaan dan magis</li>
                            <li>Ukiran pada artefak budaya</li>
                        </ul>
                        <p class="text-muted">
                            Naskah-naskah Batak kuno, yang sering ditulis pada kulit kayu atau bambu, merupakan sumber informasi penting tentang adat, hukum, dan kepercayaan masyarakat Batak.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Era Modern dan Pelestarian -->
    <section class="page-section bg-light py-5" id="pelestarian" style="background: linear-gradient(to right, #f3f3f3, #ffffff);">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('assets/img/sejarah3.jpg') }}" alt="Upaya Pelestarian Aksara Batak" />
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-3">
                        <h2 class="text-center text-lg-start"><span style="color:#7B241C">Aksara Batak di Era Modern</span></h2>
                        <hr class="divider my-4" />
                        <p class="text-muted">
                            Penggunaan aksara Batak semakin berkurang seiring dengan masuknya pengaruh bahasa Latin dan teknologi modern.
                        </p>
                        <p class="text-muted">
                            Namun, berbagai upaya pelestarian terus dilakukan oleh komunitas, akademisi, dan pemerintah untuk menjaga warisan budaya ini tetap hidup. BoanAksara adalah salah satu inisiatif untuk mendukung pelestarian aksara Batak melalui pendidikan dan teknologi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection