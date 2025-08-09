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
  <!-- Tentang Boan Aksara Section - Teks Kiri -->
<section class="about-section" style="background: white; padding: 5rem 0; position: relative; border-top: 1px solid rgba(128,0,0,0.2); border-bottom: 1px solid rgba(128,0,0,0.2);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
        <div class="about-content" style="display: flex; flex-wrap: wrap; align-items: center; gap: 4rem;">
            <!-- Kolom Teks (Kiri) -->
<div class="text-content" style="flex: 1; min-width: 300px; padding-right: 2rem;">
    <h2 style="font-family: Arial, sans-serif; color: #800000; font-size: 2.5rem; margin-bottom: 1.8rem; position: relative; line-height: 1.3; font-weight: bold;">
        <span style="display: inline-block; position: relative;">
            Tentang Boan Aksara
                </h2>
                <p style="font-size: 1.1rem; line-height: 1.8; color: #333; margin-bottom: 2rem;">
                    <strong style="color: #800000; ">BoanAksara</strong> adalah platform digital yang didedikasikan untuk melestarikan dan mempromosikan Aksara Batak, warisan budaya leluhur yang tak ternilai. Kami menghadirkan metode pembelajaran interaktif yang mudah dipahami untuk semua kalangan.
                </p>
                <div class="highlight-box" style="background: #FFF0F0; border-left: 4px solid #800000; padding: 1.2rem; margin: 2rem 0; border-radius: 0 8px 8px 0;">
                    <p style="margin: 0; font-style: italic; color: #500000;">
                        "Melestarikan aksara Batak berarti menjaga identitas budaya kita untuk generasi mendatang"
                    </p>
                </div>
                <div class="cta-button" style="margin-top: 1.5rem;">
                    <a href="#lihatfitur" style="display: inline-flex; align-items: center; padding: 0.9rem 2.2rem; background: #800000; color: white; text-decoration: none; border-radius: 50px; font-weight: bold; transition: all 0.3s; box-shadow: 0 4px 8px rgba(128,0,0,0.2);">
                        Lihat Fitur
                    </a>
                </div>
            </div>
            
            <!-- Kolom Gambar (Kanan) -->
            <div class="image-content" style="flex: 1; min-width: 300px; position: relative;">
                <div style="border: 8px solid white; border-radius: 4px; box-shadow: 0 10px 30px rgba(128,0,0,0.15); overflow: hidden;">
                    <img src="https://via.placeholder.com/500x350/FFFFFF/800000?text=Contoh+Aksara+Batak" alt="Contoh Aksara Batak" style="width: 100%; height: auto; display: block; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div style="position: absolute; bottom: -15px; right: 30px; background: #800000; color: white; padding: 0.5rem 1.5rem; border-radius: 50px; font-size: 0.9rem; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                    Warisan Budaya
                </div>
            </div>
        </div>
    </div>
    
    <!-- Ornamen Bawah -->
   <!-- Ornamen Bawah - Solid Maroon dengan Motif Ulos -->
<div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 12px; background: #800000; overflow: hidden;">
    <!-- Motif Garis Ulos -->
    <div style="width: 100%; height: 100%; position: relative;">        
        <!-- Motif Segitiga (Inspirasi Gorga) -->
        <div style="position: absolute; top: 50%; left: 10%; transform: translateY(-50%); width: 0; height: 0; border-left: 8px solid transparent; border-right: 8px solid transparent; border-bottom: 6px solid #500000;"></div>
        <div style="position: absolute; top: 50%; left: 30%; transform: translateY(-50%); width: 0; height: 0; border-left: 8px solid transparent; border-right: 8px solid transparent; border-top: 6px solid #500000;"></div>
        <div style="position: absolute; top: 50%; right: 10%; transform: translateY(-50%); width: 0; height: 0; border-left: 8px solid transparent; border-right: 8px solid transparent; border-bottom: 6px solid #500000;"></div>
    </div>
</div>
</section>   

<!-- Homepage Features Section -->
<section id="lihatfitur" style="background-color: #f1f1f1; padding: 3rem 0; border-radius: 0 0 12px 12px;">
 <div class="container my-5 ">
    <div class="text-center mb-5">
        <h2 class="fw-bold" style="color: #7B241C;">Fitur Utama</h2>
        <p class="lead">Jelajahi berbagai fitur pembelajaran Aksara Batak</p>
    </div>

    <div class="row g-4">
        <!-- Card Box Fitur -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm hover-effect">
                <div class="card-body text-center p-4">
                    <div class="icon-box mb-3" style="background-color: #f8e8e8; width: 80px; height: 80px; margin: 0 auto; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-collection" style="font-size: 2rem; color: #7B241C;"></i>
                    </div>
                    <h5 class="card-title" style="color: #7B241C;">Koleksi Aksara</h5>
                    <p class="card-text">Pelajari semua aksara Batak dari berbagai varian</p>
                    <a href="#card-box" class="btn btn-outline-batak">Jelajahi</a>
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
                    <a href="#transliterasi" class="btn btn-outline-primary">Coba Sekarang</a>
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
                    <a href="#kuis" class="btn btn-outline-success">Mulai Kuis</a>
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
                    <a href="#canvas" class="btn btn-outline-purple">Mulai Menulis</a>
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
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
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
        border: 1px solid rgba(0,0,0,0.1);
    }
</style>

</section> 
<!-- Section Foto Fitur Utama Besar dengan Keterangan -->
<section class="container my-5" >
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
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        transition: transform 0.3s ease;
    }

    .shadow-lg:hover {
        transform: scale(1.03);
        box-shadow: 0 20px 40px rgba(0,0,0,0.25);
    }
</style>


@endsection


