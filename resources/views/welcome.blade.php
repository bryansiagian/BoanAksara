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
                <a class="btn btn-maroon btn-xl" href="#about">Pelajari Aksara</a>
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
<section class="page-section bg-light py-5" id="about" style="background: linear-gradient(to right, #ffffff, #f3f3f3);">
  <div class="container px-4 px-lg-5">
    <div class="row gx-5 gy-4 align-items-center">
      <!-- Kolom Kiri: Teks -->
      <div class="col-lg-6 order-lg-1">
        <h2 class="text-center text-lg-start">
          <span style="color:#7B241C">Mengenal Aksara Batak</span>
        </h2>
        <hr class="divider my-3" />
        <p class="text-muted">
          <strong style="color:#7B241C">Aksara Batak</strong>, atau dikenal sebagai <em>Surat Batak</em>, adalah sistem penulisan kuno yang digunakan masyarakat Batak di Sumatera Utara sejak berabad-abad silam. Aksara ini tidak hanya menjadi alat komunikasi, tapi juga mencerminkan nilai-nilai spiritual, adat, dan filosofi hidup suku Batak.
        </p>
        <p class="text-muted">
          Aksara ini digunakan oleh beberapa suku Batak, seperti Toba, Karo, Simalungun, Pakpak/Dairi, dan Mandailing, dengan bentuk yang disesuaikan menurut dialek masing-masing. Setiap aksara dibangun dari konsonan dasar yang dimodifikasi tanda vokal, sehingga memiliki keunikan tersendiri meski tetap mempertahankan struktur fonetik yang sama.
        </p>
        <p class="text-muted">
          Aksara Batak tetap dipelajari dan dilestarikan sebagai bagian tak terpisahkan dari budaya Batak, memperkuat identitas lokal, khususnya bagi generasi muda.
        </p>
        <div style="background-color: #7B241C; color: #ffffff; padding: 1rem 1.25rem; border-radius: 0.5rem; box-shadow: 0 2px 6px rgba(0,0,0,0.1);" class="mt-4">
          Aksara Batak dahulu ditulis di atas bambu, kulit kayu, bahkan tulang!
        </div>
      </div>

      <!-- Kolom Kanan: Slider -->
      <div class="col-lg-6 order-lg-2 d-flex flex-column align-items-center">
        <div class="slider-container">
          <img id="sliderImage" src="assets/img/suratpertama.png" alt="Ilustrasi Aksara Batak" class="slider-image" />
        </div>
        <div class="dots-container mt-3">
          <!-- Dots akan dibuat via JS -->
        </div>
      </div>
    </div>
  </div>

  <!-- Script Slider -->
  <script>
    const images = [
      "assets/img/suratpertama.png",
      "assets/img/suratkedua.png",
      "assets/img/suratketiga.png"
    ];
    let currentIndex = 0;
    const sliderImage = document.getElementById("sliderImage");
    const dotsContainer = document.querySelector(".dots-container");

    // Buat dots
    images.forEach((_, index) => {
      const dot = document.createElement("span");
      dot.classList.add("dot");
      if (index === 0) dot.classList.add("active");
      dot.addEventListener("click", () => {
        currentIndex = index;
        updateSlider();
      });
      dotsContainer.appendChild(dot);
    });

    const dots = document.querySelectorAll(".dot");

    function updateSlider() {
      sliderImage.style.opacity = 0;
      setTimeout(() => {
        sliderImage.src = images[currentIndex];
        sliderImage.style.opacity = 1;
      }, 150);
      dots.forEach(dot => dot.classList.remove("active"));
      dots[currentIndex].classList.add("active");
    }

    // Auto slide
    setInterval(() => {
      currentIndex = (currentIndex + 1) % images.length;
      updateSlider();
    }, 5000);
  </script>

  <style>
    .slider-container {
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .slider-image {
      width: 100%;
      max-width: 500px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      transition: opacity 0.3s ease;
    }
    .dots-container {
      display: flex;
      gap: 8px;
      justify-content: center;
      align-items: center;
      margin-top: 10px;
    }
    .dot {
      width: 12px;
      height: 12px;
      background-color: #ccc;
      border-radius: 50%;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .dot.active {
      background-color: #7B241C;
    }
  </style>
</section>

<!-- Box dan Card Info Tambahan -->
<div class="container">
    <div class="row mt-5">
        <div class="col-12 mb-4">
            <div class="bg-white rounded shadow history-box">
                <a href="sejarah.html" class="text-decoration-none text-dark">
                    <h4 class="fw-bold">Sejarah Aksara Batak</h4>
                    <p>
                        Asal-usul aksara Batak masih menjadi perdebatan di kalangan ahli, namun berbagai naskah kuno telah membuktikan bahwa aksara ini telah digunakan dalam ritual keagamaan, surat-menyurat, dan pelestarian adat sejak abad ke-18.
                        <br><br>
                        <em>[Klik untuk membaca selengkapnya]</em>
                    </p>
                </a>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <a href="sejarah.html" class="card-link">
                <div class="card h-100 shadow-sm border-0 history-card">
                    <div class="card-body text-center">
                        <i class="fas fa-scroll fa-3x text-primary mb-3"></i>
                        <h5 class="card-title fw-bold">Sejarah dan Filosofi</h5>
                        <p class="card-text text-muted">Pelajari sejarah panjang aksara Batak dan filosofi yang melatarinya. Setiap guratan huruf memiliki makna mendalam dalam struktur sosial dan religius Batak.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="fas fa-code fa-3x text-primary mb-3"></i>
                    <h5 class="card-title fw-bold">Struktur Aksara</h5>
                    <p class="card-text text-muted">Struktur aksara Batak terdiri dari 19 huruf dasar, tanda vokal (diakritik), dan beberapa tanda baca. Pemahaman ini penting dalam proses transliterasi dan pembacaan teks kuno.</p>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a class="btn btn-maroon btn-xl" href="#fitur">Jelajahi Fitur</a>
    </div>
</div>
</section>

<!-- Fitur-Fitur -->
<section class="page-section" id="fitur">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">Fitur Boan Aksara</h2>
        <hr class="divider my-4" />
        <div class="row gx-4 gx-lg-5">
            <div class="col-xl-4 col-md-6 text-center mb-4">
                <div class="feature-item mx-auto mb-5 mb-lg-0">
                    <i class="fas fa-sync fa-3x text-primary mb-3"></i>
                    <h4>Transliterasi</h4>
                    <p class="text-muted mb-0">Konversi teks Latin ke aksara Batak secara otomatis.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 text-center mb-4">
                <div class="feature-item mx-auto mb-5 mb-lg-0">
                    <i class="fas fa-question-circle fa-3x text-primary mb-3"></i>
                    <h4>Kuis Interaktif</h4>
                    <p class="text-muted mb-0">Uji pengetahuan Anda tentang aksara Batak dengan kuis yang menarik.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 text-center mb-4">
                <div class="feature-item mx-auto mb-5 mb-lg-0">
                    <i class="fas fa-edit fa-3x text-primary mb-3"></i>
                    <h4>Tulis Nama Anda</h4>
                    <p class="text-muted mb-0">Lihat bagaimana nama Anda ditulis dalam aksara Batak.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <!-- Transliterasi Section -->
    <section id="transliterasi" class="page-section">
        <h2 class="mb-3">Transliterasi Latin ke Aksara Batak</h2>
        <div class="mb-3">
            <label for="latinInput" class="form-label">Masukkan Teks Latin:</label>
            <input type="text" class="form-control" id="latinInput" placeholder="Contoh: amang inang" oninput="updateTransliterasi()">
        </div>
        <div class="mt-3">
            <label class="form-label">Hasil Aksara Batak:</label>
            <div id="translitResult" class="border rounded p-3 bg-light"></div>
            <button class="btn btn-secondary btn-sm mt-2" onclick="copyToClipboard()">Salin ke Papan Klip</button>
        </div>
    </section>

    <!-- Quiz Section -->
    <section id="quiz" class="page-section">
        <h2 class="mb-3">Quiz Tebak Aksara</h2>
        <p>Uji pengetahuan Anda tentang Aksara Batak!</p>
        <div id="soalKuis">
            <!-- Soal kuis akan ditampilkan di sini -->
        </div>
        <div class="mt-3">
            <button class="btn btn-success" onclick="periksaJawaban()">Periksa Jawaban</button>
        </div>
        <div id="umpanBalikKuis" class="mt-2"></div>
    </section>

    <!-- Tulis Namamu Section -->
    <section id="tulis-nama" class="page-section">
        <h2 class="mb-3">Tulis Namamu dalam Aksara Batak</h2>
        <div class="mb-3">
            <label for="nameInput" class="form-label">Masukkan Nama Anda:</label>
            <input type="text" class="form-control" id="nameInput" placeholder="Nama Anda" oninput="updatePratinjauNama()">
        </div>
        <div class="mt-3">
            <label class="form-label">Hasil:</label>
            <div id="nameResult" class="border rounded p-3 bg-light"></div>
            <button class="btn btn-info btn-sm mt-2" onclick="unduhSebagaiGambar()">Unduh Gambar</button>
        </div>
    </section>
</div>

<!-- Portfolio -->
<div id="portfolio">
    <div class="container-fluid p-0">
        <div class="portfolio-grid"> <!-- Ubah jadi grid -->
            <div class="portfolio-item">
                <a class="portfolio-link" href="{{ asset('assets/img/portfolio/fullsize/1.jpg') }}" title="Project Name">
                    <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/1.jpg') }}" alt="Project 1" />
                    <div class="portfolio-caption">
                        <div class="portfolio-category">Category</div>
                        <div class="portfolio-name">Project Name</div>
                    </div>
                </a>
            </div>
            <div class="portfolio-item">
                <a class="portfolio-link" href="{{ asset('assets/img/portfolio/fullsize/2.jpg') }}" title="Project Name">
                    <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/2.jpg') }}" alt="Project 2" />
                    <div class="portfolio-caption">
                        <div class="portfolio-category">Category</div>
                        <div class="portfolio-name">Project Name</div>
                    </div>
                </a>
            </div>
            <div class="portfolio-item">
                <a class="portfolio-link" href="{{ asset('assets/img/portfolio/fullsize/3.jpg') }}" title="Project Name">
                    <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/3.jpg') }}" alt="Project 3" />
                    <div class="portfolio-caption">
                        <div class="portfolio-category">Category</div>
                        <div class="portfolio-name">Project Name</div>
                    </div>
                </a>
            </div>
            <div class="portfolio-item">
                <a class="portfolio-link" href="{{ asset('assets/img/portfolio/fullsize/4.jpg') }}" title="Project Name">
                    <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/4.jpg') }}" alt="Project 4" />
                    <div class="portfolio-caption">
                        <div class="portfolio-category">Category</div>
                        <div class="portfolio-name">Project Name</div>
                    </div>
                </a>
            </div>
            <div class="portfolio-item">
                <a class="portfolio-link" href="{{ asset('assets/img/portfolio/fullsize/5.jpg') }}" title="Project Name">
                    <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/5.jpg') }}" alt="Project 5" />
                    <div class="portfolio-caption">
                        <div class="portfolio-category">Category</div>
                        <div class="portfolio-name">Project Name</div>
                    </div>
                </a>
            </div>
            <div class="portfolio-item">
                <a class="portfolio-link" href="{{ asset('assets/img/portfolio/fullsize/6.jpg') }}" title="Project Name">
                    <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/6.jpg') }}" alt="Project 6" />
                    <div class="portfolio-caption">
                        <div class="portfolio-category">Category</div>
                        <div class="portfolio-name">Project Name</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Call to action -->
<section class="page-section bg-dark text-white">
    <div class="container px-4 px-lg-5 text-center">
        <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
        <a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Download Now!</a>
    </div>
</section>

<!-- Contact -->
<section class="page-section bg-light" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Hubungi Kami</h2>
                <hr class="divider" />
                <p class="text-muted mb-5">Ingin bertanya lebih lanjut tentang aksara Batak? Kirimkan pesan kepada kami, dan kami akan segera merespons!</p>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Masukkan nama lengkap Anda..." data-sb-validations="required" />
                        <label for="name">Nama Lengkap</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">Nama wajib diisi.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="nama@contoh.com" data-sb-validations="required,email" />
                        <label for="email">Alamat Email</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">Email wajib diisi.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Format email tidak valid.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="Contoh: 081234567890" data-sb-validations="required" />
                        <label for="phone">Nomor Telepon</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">Nomor telepon wajib diisi.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Tulis pesan Anda di sini..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Pesan</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Pesan wajib diisi.</div>
                    </div>
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Pesan Berhasil Terkirim!</div>
                            Terima kasih atas pesan Anda! Kami akan segera menghubungi Anda.
                        </div>
                    </div>
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Maaf, terjadi kesalahan saat mengirim pesan. Silakan coba lagi nanti.</div>
                    </div>
                    <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Kirim Pesan</button></div>
                </form>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-4 text-center mb-5 mb-lg-0">
                <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                <div>+62 812 3456 7890</div>
                <i class="fas fa-envelope fa-3x mb-3 mt-4 text-muted"></i>
                <div><a href="mailto:info@boanaksara.com">info@boanaksara.com</a></div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    // Data Aksara Batak (perlu dilengkapi dengan lengkap)
    const aksaraMap = {
        'a': 'ᯀ',
        'b': 'ᯅ',
        'c': 'ᯘ',
        'd': 'ᯖ',
        'g': 'ᯎ',
        'h': 'ᯄ',
        'j': 'ᯐ',
        'k': 'ᯂ',
        'l': 'ᯞ',
        'm': 'ᯔ',
        'n': 'ᯉ',
        'p': 'ᯇ',
        'r': 'ᯒ',
        's': 'ᯘ',
        't': 'ᯖ',
        'w': 'ᯋ',
        'y': 'ᯛ',
        'z': 'ᯗ',
        'i': 'ᯪ',
        'u': 'ᯮ',
        'e': 'ᯇᯩ',
        'o': 'ᯅᯬ',
        'ai': 'ᯅᯤ',
        'au': 'ᯅᯥ',
        'ang': 'ᯀᯰ',
        'ing': 'ᯪᯰ',
        'ung': 'ᯮᯰ',
        'eng': 'ᯇᯩᯰ',
        'ong': 'ᯅᯬᯰ',
        'ar': 'ᯀᯒ᯲',
        'ir': 'ᯪᯒ᯲',
        'ur': 'ᯮᯒ᯲',
        'er': 'ᯇᯩᯒ᯲',
        'or': 'ᯅᯬᯒ᯲',

        //Konsonan ganda (dengan фонетическим приближением)
        'bb': 'ᯅᯅ',
        'cc': 'ᯘᯘ',
        'dd': 'ᯖᯖ',
        'ff': 'ᯇᯇ',
        'gg': 'ᯎᯎ',
        'hh': 'ᯄᯄ',
        'jj': 'ᯐᯐ',
        'kk': 'ᯂᯂ',
        'll': 'ᯞᯞ',
        'mm': 'ᯔᯔ',
        'nn': 'ᯉᯉ',
        'pp': 'ᯇᯇ',
        'qq': 'ᯂᯂ',
        'rr': 'ᯒᯒ',
        'ss': 'ᯘᯘ',
        'tt': 'ᯖᯖ',
        'vv': 'ᯋᯋ',
        'ww': 'ᯋᯋ',
        'xx': 'ᯂᯘ',
        'yy': 'ᯛᯛ',
        'zz': 'ᯗᯗ',

        //Kombinasi konsonan dengan vokal
        'ba': 'ᯅ',
        'ca': 'ᯘ',
        'da': 'ᯖ',
        'ga': 'ᯎ',
        'ha': 'ᯄ',
        'ja': 'ᯐ',
        'ka': 'ᯂ',
        'la': 'ᯞ',
        'ma': 'ᯔ',
        'na': 'ᯉ',
        'pa': 'ᯇ',
        'ra': 'ᯒ',
        'sa': 'ᯘ',
        'ta': 'ᯖ',
        'wa': 'ᯋ',
        'ya': 'ᯛ',
        'za': 'ᯗ',

        'bi': 'ᯅᯪ',
        'ci': 'ᯘᯪ',
        'di': 'ᯖᯪ',
        'gi': 'ᯎᯪ',
        'hi': 'ᯄᯪ',
        'ji': 'ᯐᯪ',
        'ki': 'ᯂᯪ',
        'li': 'ᯞᯪ',
        'mi': 'ᯔᯪ',
        'ni': 'ᯉᯪ',
        'pi': 'ᯇᯪ',
        'ri': 'ᯒᯪ',
        'si': 'ᯘᯪ',
        'ti': 'ᯖᯪ',
        'wi': 'ᯋᯪ',
        'yi': 'ᯛᯪ',
        'zi': 'ᯗᯪ',

        'bu': 'ᯅᯮ',
        'cu': 'ᯘᯮ',
        'du': 'ᯖᯮ',
        'gu': 'ᯎᯮ',
        'hu': 'ᯄᯮ',
        'ju': 'ᯐᯮ',
        'ku': 'ᯂᯮ',
        'lu': 'ᯞᯮ',
        'mu': 'ᯔᯮ',
        'nu': 'ᯉᯮ',
        'pu': 'ᯇᯮ',
        'ru': 'ᯒᯮ',
        'su': 'ᯘᯮ',
        'tu': 'ᯖᯮ',
        'wu': 'ᯋᯮ',
        'yu': 'ᯛᯮ',
        'zu': 'ᯗᯮ',

        'be': 'ᯅᯇᯩ',
        'ce': 'ᯘᯇᯩ',
        'de': 'ᯖᯇᯩ',
        'ge': 'ᯎᯇᯩ',
        'he': 'ᯄᯇᯩ',
        'je': 'ᯐᯇᯩ',
        'ke': 'ᯂᯇᯩ',
        'le': 'ᯞᯇᯩ',
        'me': 'ᯔᯇᯩ',
        'ne': 'ᯉᯇᯩ',
        'pe': 'ᯇᯇᯩ',
        're': 'ᯒᯇᯩ',
        'se': 'ᯘᯇᯩ',
        'te': 'ᯖᯇᯩ',
        'we': 'ᯋᯇᯩ',
        'ye': 'ᯛᯇᯩ',
        'ze': 'ᯗᯇᯩ',

        'bo': 'ᯅᯬ',
        'co': 'ᯘᯬ',
        'do': 'ᯖᯬ',
        'go': 'ᯎᯬ',
        'ho': 'ᯄᯬ',
        'jo': 'ᯐᯬ',
        'ko': 'ᯂᯬ',
        'lo': 'ᯞᯬ',
        'mo': 'ᯔᯬ',
        'no': 'ᯉᯬ',
        'po': 'ᯇᯬ',
        'ro': 'ᯒᯬ',
        'so': 'ᯘᯬ',
        'to': 'ᯖᯬ',
        'wo': 'ᯋᯬ',
        'yo': 'ᯛᯬ',
        'zo': 'ᯗᯬ',

        //Inffixes (sisipan)
        'in': 'ᯪᯉ᯲',
        'um': 'ᯮᯔ᯲',
        'ar': 'ᯀᯒ᯲',

        //Simbol Vokal di akhir kata (membutuhkan *pangolat*)
        'a\'': 'ᯀ᯲',
        'i\'': 'ᯪ᯲',
        'u\'': 'ᯮ᯲',
        'e\'': 'ᯇᯩ᯲',
        'o\'': 'ᯅᯬ᯲',

        //Tanda baca (disesuaikan)
        '.': '.',
        ',': ',',
        '?': '?',
        '!': '!',
        ' ': ' '
    };

    // Fungsi Transliterasi
    function transliterasi(text) {
        let hasil = '';
        text = text.toLowerCase();
        for (let i = 0; i < text.length; i++) {
            let char = text[i];
            let nextChar = (i + 1 < text.length) ? text[i + 1] : '';
            let kombinasi = char + nextChar;

            if (aksaraMap[kombinasi]) {
                hasil += aksaraMap[kombinasi];
                i++; // Lewati karakter berikutnya
            } else if (aksaraMap[char]) {
                hasil += aksaraMap[char];
            } else {
                hasil += char; // Karakter tidak dikenal
            }
        }
        return hasil;
    }

    function updateTransliterasi() {
        let latinText = document.getElementById('latinInput').value;
        document.getElementById('translitResult').innerText = transliterasi(latinText);
    }

    function copyToClipboard() {
        let aksaraText = document.getElementById('translitResult').innerText;
        navigator.clipboard.writeText(aksaraText).then(() => {
            alert('Teks Aksara Batak telah disalin!');
        });
    }

    // Kuis
    const daftarSoal = [{
            pertanyaan: 'Aksara Batak manakah yang melambangkan "ka"?',
            jawabanBenar: 'ᯂ',
            pilihan: ['ᯀ', 'ᯂ', 'ᯄ', 'ᯆ']
        },
        {
            pertanyaan: 'Apa bunyi dari aksara ᯔ?',
            jawabanBenar: 'ma',
            pilihan: ['ka', 'la', 'ma', 'na']
        },
        {
            pertanyaan: 'Aksara Batak untuk "ba" adalah...',
            jawabanBenar: 'ᯅ',
            pilihan: ['ᯀ', 'ᯅ', 'ᯘ', 'ᯖ']
        },
        {
            pertanyaan: 'Aksara Batak manakah yang mewakili suara "ta"?',
            jawabanBenar: 'ᯖ',
            pilihan: ['ᯖ', 'ᯗ', 'ᯘ', 'ᯒ']
        },
        {
            pertanyaan: 'Bagaimana cara menulis "la" dalam Aksara Batak?',
            jawabanBenar: 'ᯞ',
            pilihan: ['ᯞ', 'ᯟ', 'ᯡ', 'ᯠ']
        },
        {
            pertanyaan: 'Pilihlah aksara yang berbunyi "na"...',
            jawabanBenar: 'ᯉ',
            pilihan: ['ᯊ', 'ᯉ', 'ᯘ', 'ᯔ']
        },
        {
            pertanyaan: 'Aksara apakah ini: ᯄ ?',
            jawabanBenar: 'ha',
            pilihan: ['ga', 'ha', 'ja', 'ka']
        },
        {
            pertanyaan: 'Jika Anda ingin menulis "pa", aksara apa
        }];

    let nomorSoal = 0;
    let jawabanDipilih = null;

    function tampilkanSoal() {
        let soal = daftarSoal[nomorSoal];
        let pilihanJawaban = '';
        soal.pilihan.forEach(pilihan => {
            pilihanJawaban += `<button class="btn btn-outline-primary m-1" onclick="pilihJawaban('${pilihan}')">${pilihan}</button>`;
        });

        document.getElementById('soalKuis').innerHTML = `
                <h3>Soal ${nomorSoal + 1}</h3>
                <p>${soal.pertanyaan}</p>
                <div>${pilihanJawaban}</div>
            `;
    }

    function pilihJawaban(jawaban) {
        jawabanDipilih = jawaban;
    }

    function periksaJawaban() {
        if (jawabanDipilih === null) {
            alert('Pilih jawaban dulu!');
            return;
        }

        let soal = daftarSoal[nomorSoal];
        let umpanBalik = document.getElementById('umpanBalikKuis');
        if (jawabanDipilih === soal.jawabanBenar) {
            umpanBalik.innerHTML = '<div class="alert alert-success">Benar!</div>';
        } else {
            umpanBalik.innerHTML = `<div class="alert alert-danger">Salah. Jawaban yang benar adalah ${soal.jawabanBenar}</div>`;
        }

        jawabanDipilih = null; // Reset jawaban
        nomorSoal++; // Lanjut ke soal berikutnya

        if (nomorSoal < daftarSoal.length) {
            tampilkanSoal();
        } else {
            document.getElementById('soalKuis').innerHTML = '<div class="alert alert-info">Kuis selesai!</div>';
            umpanBalik.innerHTML = '';
        }

        // Setelah menjawab, soal berikutnya ditampilkan setelah 1 detik
        setTimeout(tampilkanSoalBerikutnya, 1000);
    }

    function tampilkanSoalBerikutnya() {
        if (nomorSoal < daftarSoal.length) {
            tampilkanSoal();
            document.getElementById('umpanBalikKuis').innerHTML = ''; // Bersihkan umpan balik
        }
    }

    // Tulis Nama
    function updatePratinjauNama() {
        let nama = document.getElementById('nameInput').value;
        document.getElementById('nameResult').innerText = transliterasi(nama);
    }

    function unduhSebagaiGambar() {
        alert('Fitur ini belum tersedia.');
        // Tambahkan logika untuk mengubah teks Aksara Batak menjadi gambar dan mengunduhnya
    }

    // Inisialisasi Kuis
    tampilkanSoal();
</script>
@endpush
@endsection