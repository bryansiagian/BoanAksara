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
                <a class="btn btn-maroon btn-xl" href="#home">Pelajari Aksara</a>
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

<div class="row g-4">
    <!-- Homepage Features Section -->
    <section class="container my-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: #7B241C;">Fitur Utama</h2>
            <p class="lead">Jelajahi berbagai fitur pembelajaran Aksara Batak</p>
        </div>

        <div class="row g-4">
            <!-- Koleksi Aksara -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-effect">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-3" style="background-color: #f8e8e8; width: 80px; height: 80px; margin: 0 auto; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-collection" style="font-size: 2rem; color: #7B241C;"></i>
                        </div>
                        <h5 class="card-title" style="color: #7B241C;">Koleksi Aksara</h5>
                        <p class="card-text">Pelajari semua aksara Batak dari berbagai varian</p>
                        <a href="{{ url('course#index') }}#koleksi" class="btn btn-outline-batak">Jelajahi</a>
                    </div>
                </div>
            </div>

            <!-- Transliterasi -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-effect">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-3" style="background-color: #e8f1f8; width: 80px; height: 80px; margin: 0 auto; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-translate" style="font-size: 2rem; color: #1a5276;"></i>
                        </div>
                        <h5 class="card-title" style="color: #1a5276;">Transliterasi</h5>
                        <p class="card-text">Konversi teks Latin ke Aksara Batak secara instan</p>
                        <a href="{{ url('course') }}#kuis-top" class="btn btn-outline-primary">Coba Sekarang</a>


                    </div>
                </div>
            </div>

            <!-- Kuis -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-effect">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-3" style="background-color: #e8f8f0; width: 80px; height: 80px; margin: 0 auto; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-question-circle" style="font-size: 2rem; color: #28a745;"></i>
                        </div>
                        <h5 class="card-title" style="color: #28a745;">Kuis Interaktif</h5>
                        <p class="card-text">Uji pengetahuan Anda tentang Aksara Batak</p>
                        <a href="index.php#kuis" class="btn btn-outline-success">Mulai Kuis</a>
                    </div>
                </div>
            </div>

            <!-- Canvas -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-effect">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-3" style="background-color: #f5e8f8; width: 80px; height: 80px; margin: 0 auto; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-pencil" style="font-size: 2rem; color: #9b59b6;"></i>
                        </div>
                        <h5 class="card-title" style="color: #9b59b6;">Canvas Menulis</h5>
                        <p class="card-text">Latihan menulis aksara Batak secara digital</p>
                        <a href="index.php#canvas" class="btn btn-outline-purple">Mulai Menulis</a>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Custom Styles */
        .hover-effect {
            transition: all 0.3s ease;
            border-radius: 12px;
        }

        .hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        }

        .btn-outline-batak {
            border-color: #7B241C;
            color: #7B241C;
        }

        .btn-outline-batak:hover {
            background-color: #7B241C;
            color: white;
        }

        .btn-outline-purple {
            border-color: #9b59b6;
            color: #9b59b6;
        }

        .btn-outline-purple:hover {
            background-color: #9b59b6;
            color: white;
        }

        .card {
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
    </style>


    <!-- Section Foto Fitur Utama Besar dengan Keterangan -->
    <section class="container my-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: #7B241C;">Visualisasi Fitur Utama</h2>
            <p class="lead">Lihat secara jelas tampilan fitur yang membantu pembelajaran Anda</p>
        </div>

        <div class="row g-5">
            <!-- Foto 1 -->
            <div class="col-md-6">
                <img src="images/koleksi-aksara.jpg" alt="Koleksi Aksara" class="img-fluid rounded shadow-lg" style="height: 400px; object-fit: cover; width: 100%;" />
                <p class="mt-3 text-center fw-semibold" style="color: #7B241C; font-size: 1.2rem;">Koleksi Aksara Batak Lengkap</p>
                <p class="text-center text-muted" style="font-size: 0.9rem; max-width: 90%; margin: 0 auto;">
                    Fitur ini menampilkan berbagai varian aksara Batak untuk dipelajari dengan detail dan gambar pendukung.
                </p>
            </div>

            <!-- Foto 2 -->
            <div class="col-md-6">
                <img src="images/transliterasi.jpg" alt="Transliterasi" class="img-fluid rounded shadow-lg" style="height: 400px; object-fit: cover; width: 100%;" />
                <p class="mt-3 text-center fw-semibold" style="color: #1a5276; font-size: 1.2rem;">Fitur Transliterasi Otomatis</p>
                <p class="text-center text-muted" style="font-size: 0.9rem; max-width: 90%; margin: 0 auto;">
                    Mengubah teks Latin menjadi aksara Batak secara instan dengan akurasi tinggi.
                </p>
            </div>

            <!-- Foto 3 -->
            <div class="col-md-6">
                <img src="images/kuis.jpg" alt="Kuis Interaktif" class="img-fluid rounded shadow-lg" style="height: 400px; object-fit: cover; width: 100%;" />
                <p class="mt-3 text-center fw-semibold" style="color: #28a745; font-size: 1.2rem;">Kuis Interaktif Mengasah Pengetahuan</p>
                <p class="text-center text-muted" style="font-size: 0.9rem; max-width: 90%; margin: 0 auto;">
                    Uji kemampuan Anda dengan kuis yang menantang dan menyenangkan tentang aksara Batak.
                </p>
            </div>

            <!-- Foto 4 -->
            <div class="col-md-6">
                <img src="images/canvas-menulis.jpg" alt="Canvas Menulis" class="img-fluid rounded shadow-lg" style="height: 400px; object-fit: cover; width: 100%;" />
                <p class="mt-3 text-center fw-semibold" style="color: #9b59b6; font-size: 1.2rem;">Latihan Menulis Digital</p>
                <p class="text-center text-muted" style="font-size: 0.9rem; max-width: 90%; margin: 0 auto;">
                    Praktik menulis aksara Batak secara digital dengan fitur yang interaktif dan mudah digunakan.
                </p>
            </div>
        </div>
    </section>

    <style>
        .shadow-lg {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }

        .shadow-lg:hover {
            transform: scale(1.03);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
        }
    </style>


    @endsection