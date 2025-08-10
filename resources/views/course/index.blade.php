@extends('layouts.app')

@section('title', 'Belajar Aksara Batak')

@section('content')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            /* Menggunakan font Poppins */
            color: #333;
            /* Warna teks abu-abu kehitaman */
        }

        .masthead {
            margin-top: -6rem;
            position: relative;
        }

        /* Perbaikan: Gaya untuk kanvas dengan garis dan ikon pensil */
        .drawing-canvas {
            width: 100%;
            height: 400px;
            background-color: #f8f9fa;
            /* Latar belakang abu-abu muda */
            border: 1px solid #ddd;
            border-radius: 8px;
            /* Sudut membulat */
            touch-action: none;
            cursor: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12.067 15.341l-2.062 2.062-1.938-1.938 2.062-2.062 1.938 1.938zm-3.082 3.082l2.361-2.361 2.938 2.938-2.361 2.361-2.938-2.938zm-1.768 1.768l2.938-2.938 2.361 2.361-2.938 2.938z" fill="%23a84232"/><path d="M14.005 5.518l-1.938 1.938 2.062 2.062 1.938-1.938-2.062-2.062zm-4.329 4.329l-3.328 3.328 1.938 1.938 3.328-3.328-1.938-1.938zm-1.895 1.895l-3.328 3.328 1.938 1.938 3.328-3.328-1.938-1.938z" fill="%23a84232"/><path d="M17.172 13.067l-2.062 2.062-1.938-1.938 2.062-2.062 1.938 1.938zm-3.082 3.082l-2.361 2.361 2.938 2.938-2.361 2.361-2.938-2.938z" fill="%23a84232"/><path d="M22.029 4.808l-2.188-2.188c-1.125-1.125-2.956-1.125-4.081 0l-12.75 12.75c-1.125 1.125-1.125 2.956 0 4.081l2.188 2.188c1.125 1.125 2.956 1.125 4.081 0l12.75-12.75c1.125-1.125 1.125-2.956 0-4.081zm-10.428 13.91l-4.14-4.14-1.938 1.938 4.14 4.14 1.938-1.938zm-2.062-2.062l-1.938 1.938-2.062-2.062 1.938-1.938 2.062 2.062zm-1.938-1.938l-4.14-4.14 1.938-1.938 4.14 4.14-1.938 1.938zm-1.768-1.768l-2.938-2.938 2.361-2.361 2.938 2.938-2.361 2.361zm11.233-11.233l2.938 2.938-2.361 2.361-2.938-2.938 2.361-2.361z" fill="%23a84232"/></svg>') 12 12, auto;
            position: relative;
        }

        .drawing-canvas::before {
            content: "\f244";
            /* Ikon pensil dari FontAwesome */
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            top: 10px;
            left: 10px;
            color: #ccc;
            font-size: 1.5rem;
            pointer-events: none;
            opacity: 0.5;
        }

        .progress-bar-custom {
            background-color: #a84232;
        }

        .card-custom {
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            background-color: #ffffff;
        }

        .transliteration-container {
            background-color: #fcf8f3;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .input-group-custom .form-control {
            border-radius: 8px;
            border: 2px solid #a84232;
            padding-right: 10px;
            font-size: 1.25rem;
        }

        .input-group-custom .clear-input {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #999;
            font-size: 1.5rem;
            line-height: 1;
            display: none;
        }

        .result-box {
            background-color: #ffffff;
            border-radius: 8px;
            border: 2px dashed #f2b705;
            padding: 10px;
            position: relative;
            min-height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .copy-button {
            background-color: #a84232;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.1rem;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .copy-button:hover {
            background-color: #8c362b;
        }

        .aksara-result {
            font-family: 'Noto Sans Batak', serif;
            font-size: 2rem;
            color: #333;
            width: 100%;
            text-align: center;
        }

        /* Gaya baru untuk bagian belajar menulis */
        .writing-header {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            color: #555;
        }

        .target-aksara {
            font-size: 4rem;
            /* Ukuran lebih besar */
            font-weight: bold;
            color: #a84232;
            /* Warna aksara target */
            margin-bottom: 1.5rem;
        }

        .progress-bar {
            background-color: #28a745;
            /* Warna hijau untuk progress bar */
            transition: width 0.5s ease-in-out;
            /* Animasi halus */
        }

        .progress-text {
            color: #555;
            font-weight: 600;
        }

        /* Gaya tombol yang lebih konsisten */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-outline-primary {
            color: #007bff;
            border-color: #007bff;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #007bff;
        }

        .btn-success {
            background-color: #28a745;
            /* Hijau */
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-danger {
            background-color: #dc3545;
            /* Merah */
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .btn-secondary,
        .btn-info {
            background-color: #6c757d;
            /* Warna netral */
            border-color: #6c757d;
            color: #fff;
        }

        .btn-secondary:hover,
        .btn-info:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        /* Tambahan CSS untuk animasi confetti */
        .confetti-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 9999;
        }
    </style>

    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-white font-weight-bold">Mulai Belajar Aksara Batak</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">
                        Selamat datang di halaman pembelajaran Aksara Batak!
                        Gunakan fitur-fitur di bawah ini untuk memperdalam pengetahuan Anda.
                    </p>
                    <a class="btn btn-maroon btn-xl" href="#kamus">Lihat Kamus Aksara</a>
                </div>
            </div>
        </div>
    </header>

    <section id="kamus" class="page-section bg-white py-5">
        <div class="container">
            <h2 class="text-center mb-4">Kamus Aksara Batak</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Latin</th>
                            <th>Toba</th>
                            <th>Simalungun</th>
                            <th>Karo</th>
                            <th>Pakpak/Dairi</th>
                            <th>Mandailing</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>a</td>
                            <td>ᯀ</td>
                            <td>ᯀ</td>
                            <td>ᯀ</td>
                            <td>ᯀ</td>
                            <td>ᯀ</td>
                        </tr>
                        <tr>
                            <td>i</td>
                            <td>ᯪ</td>
                            <td>ᯪ</td>
                            <td>ᯪ</td>
                            <td>ᯪ</td>
                            <td>ᯪ</td>
                        </tr>
                        <tr>
                            <td>u</td>
                            <td>ᯮ</td>
                            <td>ᯮ</td>
                            <td>ᯮ</td>
                            <td>ᯮ</td>
                            <td>ᯮ</td>
                        </tr>
                        <tr>
                            <td>e</td>
                            <td>ᯇᯩ</td>
                            <td>ᯇᯩ</td>
                            <td>ᯇᯩ</td>
                            <td>ᯇᯩ</td>
                            <td>ᯇᯩ</td>
                        </tr>
                        <tr>
                            <td>o</td>
                            <td>ᯅᯬ</td>
                            <td>ᯅᯬ</td>
                            <td>ᯅᯬ</td>
                            <td>ᯅᯬ</td>
                            <td>ᯅᯬ</td>
                        </tr>
                        <tr>
                            <td>ba</td>
                            <td>ᯅ</td>
                            <td>ᯅ</td>
                            <td>ᯅ</td>
                            <td>ᯅ</td>
                            <td>ᯅ</td>
                        </tr>
                        <tr>
                            <td>ca</td>
                            <td>ᯘ</td>
                            <td>ᯘ</td>
                            <td>ᯘ</td>
                            <td>ᯘ</td>
                            <td>ᯘ</td>
                        </tr>
                        <tr>
                            <td>da</td>
                            <td>ᯖ</td>
                            <td>ᯖ</td>
                            <td>ᯖ</td>
                            <td>ᯖ</td>
                            <td>ᯖ</td>
                        </tr>
                        <tr>
                            <td>ga</td>
                            <td>ᯎ</td>
                            <td>ᯎ</td>
                            <td>ᯎ</td>
                            <td>ᯎ</td>
                            <td>ᯎ</td>
                        </tr>
                        <tr>
                            <td>ha</td>
                            <td>ᯄ</td>
                            <td>ᯄ</td>
                            <td>ᯄ</td>
                            <td>ᯄ</td>
                            <td>ᯄ</td>
                        </tr>
                        <tr>
                            <td>ja</td>
                            <td>ᯐ</td>
                            <td>ᯐ</td>
                            <td>ᯐ</td>
                            <td>ᯐ</td>
                            <td>ᯐ</td>
                        </tr>
                        <tr>
                            <td>ka</td>
                            <td>ᯂ</td>
                            <td>ᯂ</td>
                            <td>ᯂ</td>
                            <td>ᯂ</td>
                            <td>ᯂ</td>
                        </tr>
                        <tr>
                            <td>la</td>
                            <td>ᯞ</td>
                            <td>ᯞ</td>
                            <td>ᯞ</td>
                            <td>ᯞ</td>
                            <td>ᯞ</td>
                        </tr>
                        <tr>
                            <td>ma</td>
                            <td>ᯔ</td>
                            <td>ᯔ</td>
                            <td>ᯔ</td>
                            <td>ᯔ</td>
                            <td>ᯔ</td>
                        </tr>
                        <tr>
                            <td>na</td>
                            <td>ᯉ</td>
                            <td>ᯉ</td>
                            <td>ᯉ</td>
                            <td>ᯉ</td>
                            <td>ᯉ</td>
                        </tr>
                        <tr>
                            <td>pa</td>
                            <td>ᯇ</td>
                            <td>ᯇ</td>
                            <td>ᯇ</td>
                            <td>ᯇ</td>
                            <td>ᯇ</td>
                        </tr>
                        <tr>
                            <td>ra</td>
                            <td>ᯒ</td>
                            <td>ᯒ</td>
                            <td>ᯒ</td>
                            <td>ᯒ</td>
                            <td>ᯒ</td>
                        </tr>
                        <tr>
                            <td>sa</td>
                            <td>ᯘ</td>
                            <td>ᯘ</td>
                            <td>ᯘ</td>
                            <td>ᯘ</td>
                            <td>ᯘ</td>
                        </tr>
                        <tr>
                            <td>ta</td>
                            <td>ᯖ</td>
                            <td>ᯖ</td>
                            <td>ᯖ</td>
                            <td>ᯖ</td>
                            <td>ᯖ</td>
                        </tr>
                        <tr>
                            <td>wa</td>
                            <td>ᯋ</td>
                            <td>ᯋ</td>
                            <td>ᯋ</td>
                            <td>ᯋ</td>
                            <td>ᯋ</td>
                        </tr>
                        <tr>
                            <td>ya</td>
                            <td>ᯛ</td>
                            <td>ᯛ</td>
                            <td>ᯛ</td>
                            <td>ᯛ</td>
                            <td>ᯛ</td>
                        </tr>
                        <tr>
                            <td>za</td>
                            <td>ᯗ</td>
                            <td>ᯗ</td>
                            <td>ᯗ</td>
                            <td>ᯗ</td>
                            <td>ᯗ</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="transliterasi" class="page-section bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Transliterasi Latin ke Aksara Batak</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card card-custom p-4">
                        <div class="card-body">
                            <label for="latinInput" class="form-label d-flex align-items-center">
                                <i class="fas fa-keyboard me-2"></i>
                                Masukkan Teks Latin:
                            </label>
                            <div class="input-group-custom mb-4">
                                <input type="text" class="form-control" id="latinInput" placeholder="Contoh: Horas"
                                    oninput="updateTransliterasi()">
                                <button type="button" class="clear-input" onclick="clearInput()"
                                    style="display: none;">×</button>
                            </div>

                            <label class="form-label d-flex align-items-center">
                                <i class="fas fa-font me-2"></i>
                                Hasil Aksara Batak:
                            </label>
                            <div class="result-box">
                                <div id="translitResult" class="aksara-result"></div>
                            </div>

                            <button class="btn copy-button mt-3" onclick="copyToClipboard()">
                                <i class="fas fa-copy"></i>
                                Salin Teks
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="quiz" class="page-section bg-white py-5">
        <div class="container">
            <h2 class="text-center mb-4">Kuis Tebak Aksara</h2>
            <p class="text-center">Uji pengetahuan Anda tentang Aksara Batak!</p>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card card-custom p-4">
                        <div class="card-body">
                            <div id="soalKuis"></div>
                            <div class="mt-3 text-center">
                                <button id="periksaBtn" class="btn btn-success" onclick="periksaJawaban()">Periksa Jawaban</button>
                                <button id="lanjutBtn" class="btn btn-primary d-none" onclick="lanjutSoal()">Lanjut</button>
                            </div>
                            <div id="umpanBalikKuis" class="mt-2 text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="latihan-menulis" class="page-section bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Belajar Menulis Aksara Batak</h2>
            <p class="text-center">
                Gunakan mouse atau jari Anda (di perangkat seluler) untuk berlatih menulis aksara.
            </p>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card card-custom p-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-center mb-3">
                                <button id="modeGuidedButton" class="btn btn-primary me-2"
                                    onclick="setMode('guided')">Latihan Terpandu</button>
                                <button id="modeFreeButton" class="btn btn-outline-primary"
                                    onclick="setMode('free')">Latihan Bebas</button>
                            </div>
                            <div id="guided-mode-display" class="text-center mb-3 d-none">
                                <p class="writing-header">Tuliskan aksara ini:</p>
                                <div id="targetAksara" class="target-aksara" style="font-family: 'Noto Sans Batak', serif;">
                                </div>
                                <div class="progress mt-3">
                                    <div id="levelProgress" class="progress-bar" role="progressbar" style="width: 0%;"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="progress-text mt-2">Level <span id="currentLevel">1</span>: <span
                                        id="progressText">0/5 aksara</span></p>
                                <div id="feedbackMessage" class="mt-2"></div>
                            </div>
                            <div class="position-relative">
                                <canvas id="writingCanvas" class="drawing-canvas"></canvas>
                                <div class="position-absolute top-0 start-0 m-2">
                                    <i class="fas fa-pen-alt text-muted" style="font-size: 1.5rem; opacity: 0.5;"></i>
                                </div>
                            </div>

                            <div class="mt-3 text-center d-flex flex-wrap justify-content-center gap-2">
                                <button class="btn btn-outline-secondary" onclick="clearCanvas()">Hapus Tulisan</button>
                                <button class="btn btn-outline-info" onclick="changeStroke(2)">Tebal</button>
                                <button class="btn btn-outline-info" onclick="changeStroke(1)">Tipis</button>
                                <button id="nextAksaraButton" class="btn btn-success d-none"
                                    onclick="checkAksara()">Periksa & Lanjut</button>
                                <button class="btn btn-outline-primary" onclick="downloadCanvas()">Unduh Gambar</button>
                                <button class="btn btn-danger" onclick="resetProgress()">Reset Progres</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const aksaraMap = {
                    'a_independent': 'ᯀ',
                    'i_independent': 'ᯤ',
                    'u_independent': 'ᯥ',
                    'e_independent': 'ᯀᯩ',
                    'o_independent': 'ᯀᯬ',
                    'i_vowel_sign': 'ᯪ',
                    'u_vowel_sign': 'ᯮ',
                    'e_vowel_sign': 'ᯩ',
                    'o_vowel_sign': 'ᯬ',
                    'b': 'ᯅ',
                    'c': 'ᯋ',
                    'd': 'ᯑ',
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
                    'nga_consonant': 'ᯝ',
                    'pangolat': '᯲',
                    'ng': 'ᯰ',
                    ' ': ' ',
                    '.': '.',
                    ',': ',',
                    '?': '?',
                    '!': '!'
                };
                const aksaraReverseMap = {
                    'ᯀ': 'a',
                    'ᯤ': 'i',
                    'ᯥ': 'u',
                    'ᯀᯩ': 'e',
                    'ᯀᯬ': 'o',
                    'ᯪ': 'i',
                    'ᯮ': 'u',
                    'ᯩ': 'e',
                    'ᯬ': 'o',
                    'ᯅ': 'ba',
                    'ᯋ': 'ca/wa',
                    'ᯑ': 'da',
                    'ᯎ': 'ga',
                    'ᯄ': 'ha',
                    'ᯐ': 'ja',
                    'ᯂ': 'ka',
                    'ᯞ': 'la',
                    'ᯔ': 'ma',
                    'ᯉ': 'na',
                    'ᯇ': 'pa',
                    'ᯒ': 'ra',
                    'ᯘ': 'sa',
                    'ᯖ': 'ta',
                    'ᯛ': 'ya',
                    'ᯗ': 'za',
                    'ᯝ': 'nga',
                    '᯲': 'pangolat',
                    'ᯰ': 'ng'
                };
                const vowels = ['a', 'i', 'u', 'e', 'o'];
                const consonants = ['b', 'c', 'd', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'r', 's', 't', 'w', 'y',
                    'z'
                ];

                function transliterasi(text) {
                    let hasil = '';
                    let i = 0;
                    const textLower = text.toLowerCase();
                    const len = textLower.length;
                    while (i < len) {
                        let matched = false;
                        if (i === 0 && vowels.includes(textLower.charAt(i))) {
                            const char = textLower.charAt(i);
                            hasil += aksaraMap[`${char}_independent`];
                            i++;
                            matched = true;
                        }
                        if (!matched && i + 2 < len) {
                            const tigaHuruf = textLower.substring(i, i + 3);
                            if (tigaHuruf.startsWith('ng') && vowels.includes(tigaHuruf.charAt(2))) {
                                const vokal = tigaHuruf.charAt(2);
                                if (vokal === 'a') {
                                    hasil += aksaraMap['nga_consonant'];
                                } else {
                                    hasil += aksaraMap['nga_consonant'] + aksaraMap[`${vokal}_vowel_sign`];
                                }
                                i += 3;
                                matched = true;
                            }
                        }
                        if (!matched && i + 1 < len) {
                            const duaHuruf = textLower.substring(i, i + 2);
                            if (duaHuruf === 'ng') {
                                hasil += aksaraMap['ng'];
                                i += 2;
                                matched = true;
                            }
                        }
                        if (!matched && i + 1 < len) {
                            const konsonan = textLower.charAt(i);
                            const vokal = textLower.charAt(i + 1);
                            if (consonants.includes(konsonan) && vowels.includes(vokal)) {
                                if (vokal === 'a') {
                                    hasil += aksaraMap[konsonan];
                                } else {
                                    hasil += aksaraMap[konsonan] + aksaraMap[`${vokal}_vowel_sign`];
                                }
                                i += 2;
                                matched = true;
                            }
                        }
                        if (!matched) {
                            const char = textLower.charAt(i);
                            if (consonants.includes(char)) {
                                hasil += aksaraMap[char] + aksaraMap['pangolat'];
                            } else if (vowels.includes(char)) {
                                hasil += aksaraMap[`${char}_independent`];
                            } else {
                                hasil += char;
                            }
                            i++;
                        }
                    }
                    return hasil;
                }
                window.updateTransliterasi = function() {
                    let latinText = document.getElementById('latinInput').value;
                    document.getElementById('translitResult').innerText = transliterasi(latinText);
                }
                window.copyToClipboard = function() {
                    let aksaraText = document.getElementById('translitResult').innerText;
                    navigator.clipboard.writeText(aksaraText).then(() => {
                        alert('Teks Aksara Batak telah disalin!');
                    });
                }
                window.clearInput = function() {
                    document.getElementById('latinInput').value = '';
                    updateTransliterasi();
                }

                const daftarSoal = [{
                    pertanyaan: 'Aksara Batak manakah yang melambangkan "ka"?',
                    jawabanBenar: 'ᯂ',
                    pilihan: ['ᯀ', 'ᯂ', 'ᯄ', 'ᯆ']
                }, {
                    pertanyaan: 'Apa bunyi dari aksara ᯔ?',
                    jawabanBenar: 'ma',
                    pilihan: ['ka', 'la', 'ma', 'na']
                }, {
                    pertanyaan: 'Aksara Batak untuk "ba" adalah...',
                    jawabanBenar: 'ᯅ',
                    pilihan: ['ᯀ', 'ᯅ', 'ᯘ', 'ᯖ']
                }, {
                    pertanyaan: 'Aksara Batak manakah yang mewakili suara "ta"?',
                    jawabanBenar: 'ᯖ',
                    jawabanBenarAksara: 'ta',
                    pilihan: ['ᯖ', 'ᯗ', 'ᯘ', 'ᯒ']
                }, {
                    pertanyaan: 'Bagaimana cara menulis "la" dalam Aksara Batak?',
                    jawabanBenar: 'ᯞ',
                    pilihan: ['ᯞ', 'ᯟ', 'ᯡ', 'ᯠ']
                }, {
                    pertanyaan: 'Pilihlah aksara yang berbunyi "na"...',
                    jawabanBenar: 'ᯉ',
                    pilihan: ['ᯊ', 'ᯉ', 'ᯘ', 'ᯔ']
                }, {
                    pertanyaan: 'Aksara apakah ini: ᯄ ?',
                    jawabanBenar: 'ha',
                    pilihan: ['ga', 'ha', 'ja', 'ka']
                }, {
                    pertanyaan: 'Jika Anda ingin menulis "pa", aksara apa yang Anda gunakan?',
                    jawabanBenar: 'ᯇ',
                    pilihan: ['ᯇ', 'ᯎ', 'ᯏ', 'ᯐ']
                }, {
                    pertanyaan: 'Aksara manakah yang bunyinya "sa"?',
                    jawabanBenar: 'ᯘ',
                    pilihan: ['ᯘ', 'ᯙ', 'ᯚ', 'ᯛ']
                }];
                let nomorSoal = 0;
                let jawabanDipilih = null;
                let soalSalah = [];
                let soalRevisi = [];
                let modeRevisi = false;

                const periksaBtn = document.getElementById('periksaBtn');
                const lanjutBtn = document.getElementById('lanjutBtn');
                const soalKuisDiv = document.getElementById('soalKuis');
                const umpanBalikDiv = document.getElementById('umpanBalikKuis');

                function shuffleArray(array) {
                    for (let i = array.length - 1; i > 0; i--) {
                        const j = Math.floor(Math.random() * (i + 1));
                        [array[i], array[j]] = [array[j], array[i]];
                    }
                }

                function tampilkanSoal() {
                    let soal = modeRevisi ? soalRevisi[nomorSoal] : daftarSoal[nomorSoal];
                    if (!soal) {
                         tampilkanPesanSelesai();
                         return;
                    }
                    let pilihanJawaban = '';
                    soal.pilihan.forEach(pilihan => {
                        pilihanJawaban +=
                            `<button class="btn btn-outline-primary m-1" onclick="pilihJawaban('${pilihan}', this)">${pilihan}</button>`;
                    });
                    soalKuisDiv.innerHTML =
                        `<h3>Soal ${nomorSoal + 1}</h3><p>${soal.pertanyaan}</p><div>${pilihanJawaban}</div>`;

                    periksaBtn.classList.remove('d-none');
                    lanjutBtn.classList.add('d-none');
                    umpanBalikDiv.innerHTML = '';
                    jawabanDipilih = null;
                }

                window.pilihJawaban = function(jawaban, element) {
                    jawabanDipilih = jawaban;
                    document.querySelectorAll('#soalKuis .btn').forEach(btn => {
                        btn.classList.remove('btn-success');
                        btn.classList.add('btn-outline-primary');
                    });
                    element.classList.remove('btn-outline-primary');
                    element.classList.add('btn-success');
                }

                window.periksaJawaban = function() {
                    if (jawabanDipilih === null) {
                        alert('Pilih jawaban dulu!');
                        return;
                    }

                    let soalSaatIni = modeRevisi ? soalRevisi[nomorSoal] : daftarSoal[nomorSoal];

                    if (jawabanDipilih === soalSaatIni.jawabanBenar) {
                        let pesanBenar = '';
                        // Logika untuk menentukan pesan yang benar
                        const jawabanBenar = soalSaatIni.jawabanBenar;
                        const pertanyaan = soalSaatIni.pertanyaan;

                        if (pertanyaan.includes('Aksara Batak manakah yang melambangkan')) {
                            const latin = pertanyaan.match(/"(.*?)"/)[1];
                            pesanBenar = `Benar! ${jawabanBenar} dibaca **${latin}**`;
                        } else if (pertanyaan.includes('Apa bunyi dari aksara')) {
                            const aksara = pertanyaan.match(/ᯀ|ᯂ|ᯄ|ᯆ|ᯔ/)[0];
                            pesanBenar = `Benar! ${aksara} dibaca **${jawabanBenar}**`;
                        } else if (pertanyaan.includes('bersimbolkan')) {
                            const latin = pertanyaan.match(/"(.*?)"/)[1];
                            pesanBenar = `Benar! ${latin} bersimbolkan **${jawabanBenar}**`;
                        } else if (pertanyaan.includes('Bagaimana cara menulis')) {
                            const latin = pertanyaan.match(/"(.*?)"/)[1];
                            pesanBenar = `Benar! **${latin}** ditulis ${jawabanBenar}`;
                        }
                         else if (pertanyaan.includes('Pilihlah aksara yang berbunyi')) {
                            const latin = pertanyaan.match(/"(.*?)"/)[1];
                            pesanBenar = `Benar! **${latin}** bersimbolkan ${jawabanBenar}`;
                        } else {
                            pesanBenar = `Benar! Jawaban yang benar adalah **${jawabanBenar}**`;
                        }


                        umpanBalikDiv.innerHTML = `<div class="alert alert-success">${pesanBenar}</div>`;

                        if (modeRevisi) {
                            // Hapus soal yang benar dari array revisi
                            soalRevisi.splice(nomorSoal, 1);
                            // Karena soal dihapus, nomorSoal tidak perlu diincrement
                            // Jika ada soal lagi, tampilkan, jika tidak, lanjutkan
                            if (soalRevisi.length > 0) {
                                nomorSoal = Math.min(nomorSoal, soalRevisi.length - 1);
                            }
                        } else {
                            nomorSoal++;
                        }
                    } else {
                        umpanBalikDiv.innerHTML =
                            `<div class="alert alert-danger">Salah, silakan coba lagi</div>`;
                        // Jika bukan mode revisi, tambahkan soal ke array revisi
                        if (!modeRevisi) {
                            soalSalah.push(soalSaatIni);
                        }
                        // Increment nomorSoal untuk melanjutkan ke soal berikutnya
                        nomorSoal++;
                    }

                    periksaBtn.classList.add('d-none');
                    lanjutBtn.classList.remove('d-none');
                }

                window.lanjutSoal = function() {
                    // Cek jika kita berada di mode revisi
                    if (modeRevisi) {
                        if (soalRevisi.length > 0) {
                            // Tampilkan soal revisi berikutnya
                            tampilkanSoal();
                        } else {
                            // Jika semua soal revisi sudah benar, tampilkan pesan selesai
                            tampilkanPesanSelesai();
                        }
                    } else {
                        // Mode kuis utama
                        if (nomorSoal < daftarSoal.length) {
                            tampilkanSoal();
                        } else if (soalSalah.length > 0) {
                            // Pindah ke mode revisi setelah kuis utama selesai
                            soalRevisi = [...soalSalah]; // Salin array soalSalah
                            soalSalah = []; // Reset array soalSalah untuk siklus revisi berikutnya
                            nomorSoal = 0;
                            modeRevisi = true;
                            soalKuisDiv.innerHTML =
                                '<div class="alert alert-warning">Mari kita ulang kesalahan pada soal sebelumnya</div>';
                            periksaBtn.classList.add('d-none');
                            lanjutBtn.classList.remove('d-none');
                        } else {
                            // Jika tidak ada soal yang salah, tampilkan pesan selesai
                            tampilkanPesanSelesai();
                        }
                    }
                }

                function tampilkanPesanSelesai() {
                    if (modeRevisi) {
                        // Setelah semua revisi selesai
                        soalKuisDiv.innerHTML = '<div class="alert alert-info">Semua soal revisi telah selesai!</div>';
                        umpanBalikDiv.innerHTML = '';
                        lanjutBtn.classList.add('d-none');
                    }

                    // Tampilkan pesan kemenangan dengan animasi
                    const jsConfetti = new JSConfetti();
                    jsConfetti.addConfetti({
                        emojis: ['🎉', '🎊', '🥳', '✨'],
                        confettiNumber: 100
                    }).then(() => {
                        soalKuisDiv.innerHTML = '<div class="alert alert-success">Selamat! Anda telah menyelesaikan semua soal dengan benar!</div>';
                        umpanBalikDiv.innerHTML = '';
                        lanjutBtn.classList.add('d-none');
                    });

                }

                tampilkanSoal();

                const canvas = document.getElementById('writingCanvas');
                const ctx = canvas.getContext('2d');
                let isDrawing = false;
                let lastX = 0;
                let lastY = 0;
                let strokeWidth = 2;
                let currentMode = 'guided';
                let isCanvasEmpty = true;

                const levelData = [
                    ['ᯀ', 'ᯅ', 'ᯄ', 'ᯂ', 'ᯞ'],
                    ['ᯪ', 'ᯮ', 'ᯩ', 'ᯬ', '᯲'],
                    ['ᯀᯤ', 'ᯅᯮ', 'ᯄᯩ', 'ᯂᯬ', 'ᯖ᯲'],
                ];
                let currentLevel = 0;
                let aksaraInLevel = levelData[currentLevel];
                let completedAksara = [];
                let currentAksaraTarget = '';

                const hiddenCanvas = document.createElement('canvas');
                const hiddenCtx = hiddenCanvas.getContext('2d');
                const similarityThreshold = 0.75;

                function saveProgress() {
                    const progress = {
                        level: currentLevel,
                        completed: completedAksara
                    };
                    localStorage.setItem('batakAksaraProgress', JSON.stringify(progress));
                }

                function loadProgress() {
                    const savedProgress = localStorage.getItem('batakAksaraProgress');
                    if (savedProgress) {
                        const progress = JSON.parse(savedProgress);
                        currentLevel = progress.level;
                        completedAksara = progress.completed;
                        aksaraInLevel = levelData[currentLevel] || [];
                    }
                }

                function resizeCanvas() {
                    const rect = canvas.getBoundingClientRect();
                    canvas.width = rect.width;
                    canvas.height = rect.height;
                    hiddenCanvas.width = canvas.width;
                    hiddenCanvas.height = canvas.height;
                }
                resizeCanvas();
                window.addEventListener('resize', resizeCanvas);

                function getCoordinates(e) {
                    const rect = canvas.getBoundingClientRect();
                    let x, y;
                    if (e.touches) {
                        x = e.touches[0].clientX - rect.left;
                        y = e.touches[0].clientY - rect.top;
                    } else {
                        x = e.clientX - rect.left;
                        y = e.clientY - rect.top;
                    }
                    return [x, y];
                }

                function startDrawing(e) {
                    isDrawing = true;
                    isCanvasEmpty = false;
                    [lastX, lastY] = getCoordinates(e);
                    e.preventDefault();
                }

                function draw(e) {
                    if (!isDrawing) return;
                    e.preventDefault();
                    const [currentX, currentY] = getCoordinates(e);

                    ctx.beginPath();
                    ctx.moveTo(lastX, lastY);
                    ctx.lineTo(currentX, currentY);
                    ctx.strokeStyle = '#343a40';
                    ctx.lineWidth = strokeWidth;
                    ctx.lineCap = 'round';
                    ctx.stroke();

                    [lastX, lastY] = [currentX, currentY];
                }

                function stopDrawing() {
                    isDrawing = false;
                }

                window.clearCanvas = function() {
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                    isCanvasEmpty = true;
                }

                window.changeStroke = function(width) {
                    strokeWidth = width;
                }

                window.downloadCanvas = function() {
                    const link = document.createElement('a');
                    link.download = 'tulisan-aksara-batak.png';
                    link.href = canvas.toDataURL('image/png');
                    link.click();
                }

                window.resetProgress = function() {
                    localStorage.removeItem('batakAksaraProgress');
                    alert('Progres belajar Anda telah direset. Halaman akan dimuat ulang.');
                    window.location.reload();
                }

                window.setMode = function(mode) {
                    currentMode = mode;
                    document.getElementById('modeGuidedButton').classList.remove('btn-primary',
                        'btn-outline-primary');
                    document.getElementById('modeFreeButton').classList.remove('btn-primary',
                        'btn-outline-primary');

                    clearCanvas();

                    if (mode === 'guided') {
                        document.getElementById('modeGuidedButton').classList.add('btn-primary');
                        document.getElementById('modeFreeButton').classList.add('btn-outline-primary');
                        document.getElementById('guided-mode-display').classList.remove('d-none');
                        document.getElementById('nextAksaraButton').classList.remove('d-none');
                        loadAksaraForLevel();
                    } else {
                        document.getElementById('modeGuidedButton').classList.add('btn-outline-primary');
                        document.getElementById('modeFreeButton').classList.add('btn-primary');
                        document.getElementById('guided-mode-display').classList.add('d-none');
                        document.getElementById('nextAksaraButton').classList.add('d-none');
                    }
                }

                function loadAksaraForLevel() {
                    const remainingAksara = aksaraInLevel.filter(a => !completedAksara.includes(a));
                    if (remainingAksara.length > 0) {
                        const randomIndex = Math.floor(Math.random() * remainingAksara.length);
                        currentAksaraTarget = remainingAksara[randomIndex];
                        document.getElementById('targetAksara').innerText = currentAksaraTarget;
                    } else {
                        alert(`Level ${currentLevel + 1} Selesai! Selamat!`);
                        currentLevel++;
                        saveProgress();
                        if (currentLevel < levelData.length) {
                            aksaraInLevel = levelData[currentLevel];
                            completedAksara = [];
                            document.getElementById('currentLevel').innerText = currentLevel + 1;
                            updateProgress();
                            loadAksaraForLevel();
                        } else {
                            alert('Anda telah menyelesaikan semua level! Hebat!');
                            document.getElementById('guided-mode-display').innerHTML =
                                '<div class="alert alert-success">Semua level selesai!</div>';
                            document.getElementById('nextAksaraButton').classList.add('d-none');
                        }
                    }
                }

                function drawTargetOnHiddenCanvas(aksara) {
                    hiddenCtx.clearRect(0, 0, hiddenCanvas.width, hiddenCanvas.height);
                    hiddenCtx.fillStyle = 'black';
                    hiddenCtx.font = `bold ${canvas.height * 0.8}px 'Noto Sans Batak', serif`;
                    hiddenCtx.textAlign = 'center';
                    hiddenCtx.textBaseline = 'middle';
                    hiddenCtx.fillText(aksara, hiddenCanvas.width / 2, hiddenCanvas.height / 2);
                }

                window.checkAksara = function() {
                    const feedbackDiv = document.getElementById('feedbackMessage');
                    if (isCanvasEmpty) {
                        feedbackDiv.innerHTML =
                            `<div class="alert alert-warning">Tulis aksara terlebih dahulu!</div>`;
                        return;
                    }

                    drawTargetOnHiddenCanvas(currentAksaraTarget);

                    const userImageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
                    const targetImageData = hiddenCtx.getImageData(0, 0, hiddenCanvas.width, hiddenCanvas.height);

                    const userPixels = userImageData.data;
                    const targetPixels = targetImageData.data;

                    let overlapPixels = 0;
                    let totalUserPixels = 0;
                    let totalTargetPixels = 0;

                    for (let i = 0; i < userPixels.length; i += 4) {
                        const isUserPixelBlack = userPixels[i] < 100 && userPixels[i + 1] < 100 && userPixels[i +
                            2] < 100;
                        const isTargetPixelBlack = targetPixels[i] < 100 && targetPixels[i + 1] < 100 &&
                            targetPixels[i + 2] < 100;

                        if (isUserPixelBlack) totalUserPixels++;
                        if (isTargetPixelBlack) totalTargetPixels++;
                        if (isUserPixelBlack && isTargetPixelBlack) overlapPixels++;
                    }

                    if (totalTargetPixels === 0) {
                        feedbackDiv.innerHTML =
                            `<div class="alert alert-danger">Terjadi kesalahan pada sistem, silakan muat ulang halaman.</div>`;
                        return;
                    }

                    const similarity = (totalUserPixels + totalTargetPixels) > 0 ? (2 * overlapPixels) / (
                        totalUserPixels + totalTargetPixels) : 0;

                    if (similarity >= similarityThreshold) {
                        if (!completedAksara.includes(currentAksaraTarget)) {
                            completedAksara.push(currentAksaraTarget);
                        }
                        feedbackDiv.innerHTML =
                            `<div class="alert alert-success">Bagus! Akurasi: ${Math.round(similarity * 100)}%</div>`;
                        updateProgress();
                        saveProgress();
                        setTimeout(() => {
                            clearCanvas();
                            loadAksaraForLevel();
                            feedbackDiv.innerHTML = '';
                        }, 1500);
                    } else {
                        feedbackDiv.innerHTML =
                            `<div class="alert alert-danger">Coba lagi! Akurasi: ${Math.round(similarity * 100)}%</div>`;
                    }
                }

                function updateProgress() {
                    const total = aksaraInLevel.length;
                    const completed = completedAksara.length;
                    const percentage = (completed / total) * 100;
                    document.getElementById('levelProgress').style.width = percentage + '%';
                    document.getElementById('levelProgress').setAttribute('aria-valuenow', percentage);
                    document.getElementById('progressText').innerText = `${completed}/${total} aksara`;
                    document.getElementById('currentLevel').innerText = currentLevel + 1;
                }

                canvas.addEventListener('mousedown', startDrawing);
                canvas.addEventListener('mousemove', draw);
                canvas.addEventListener('mouseup', stopDrawing);
                canvas.addEventListener('mouseout', stopDrawing);
                canvas.addEventListener('touchstart', startDrawing);
                canvas.addEventListener('touchmove', draw);
                canvas.addEventListener('touchend', stopDrawing);
                canvas.addEventListener('touchcancel', stopDrawing);

                loadProgress();
                setMode('guided');

            });
        </script>
    @endpush
@endsection
