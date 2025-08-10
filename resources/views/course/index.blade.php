@extends('layouts.app')

@section('title', 'Belajar Aksara Batak')

@section('content')
    <style>
        .drawing-canvas {
            width: 100%;
            height: 400px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            touch-action: none;
        }
        .progress-bar-custom {
            background-color: #a84232; /* Warna merah marun yang sesuai tema */
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
                        <tr> <td>a</td> <td>ᯀ</td> <td>ᯀ</td> <td>ᯀ</td> <td>ᯀ</td> <td>ᯀ</td> </tr>
                        <tr> <td>i</td> <td>ᯪ</td> <td>ᯪ</td> <td>ᯪ</td> <td>ᯪ</td> <td>ᯪ</td> </tr>
                        <tr> <td>u</td> <td>ᯮ</td> <td>ᯮ</td> <td>ᯮ</td> <td>ᯮ</td> <td>ᯮ</td> </tr>
                        <tr> <td>e</td> <td>ᯇᯩ</td> <td>ᯇᯩ</td> <td>ᯇᯩ</td> <td>ᯇᯩ</td> <td>ᯇᯩ</td> </tr>
                        <tr> <td>o</td> <td>ᯅᯬ</td> <td>ᯅᯬ</td> <td>ᯅᯬ</td> <td>ᯅᯬ</td> <td>ᯅᯬ</td> </tr>
                        <tr> <td>ba</td> <td>ᯅ</td> <td>ᯅ</td> <td>ᯅ</td> <td>ᯅ</td> <td>ᯅ</td> </tr>
                        <tr> <td>ca</td> <td>ᯘ</td> <td>ᯘ</td> <td>ᯘ</td> <td>ᯘ</td> <td>ᯘ</td> </tr>
                        <tr> <td>da</td> <td>ᯖ</td> <td>ᯖ</td> <td>ᯖ</td> <td>ᯖ</td> <td>ᯖ</td> </tr>
                        <tr> <td>ga</td> <td>ᯎ</td> <td>ᯎ</td> <td>ᯎ</td> <td>ᯎ</td> <td>ᯎ</td> </tr>
                        <tr> <td>ha</td> <td>ᯄ</td> <td>ᯄ</td> <td>ᯄ</td> <td>ᯄ</td> <td>ᯄ</td> </tr>
                        <tr> <td>ja</td> <td>ᯐ</td> <td>ᯐ</td> <td>ᯐ</td> <td>ᯐ</td> <td>ᯐ</td> </tr>
                        <tr> <td>ka</td> <td>ᯂ</td> <td>ᯂ</td> <td>ᯂ</td> <td>ᯂ</td> <td>ᯂ</td> </tr>
                        <tr> <td>la</td> <td>ᯞ</td> <td>ᯞ</td> <td>ᯞ</td> <td>ᯞ</td> <td>ᯞ</td> </tr>
                        <tr> <td>ma</td> <td>ᯔ</td> <td>ᯔ</td> <td>ᯔ</td> <td>ᯔ</td> <td>ᯔ</td> </tr>
                        <tr> <td>na</td> <td>ᯉ</td> <td>ᯉ</td> <td>ᯉ</td> <td>ᯉ</td> <td>ᯉ</td> </tr>
                        <tr> <td>pa</td> <td>ᯇ</td> <td>ᯇ</td> <td>ᯇ</td> <td>ᯇ</td> <td>ᯇ</td> </tr>
                        <tr> <td>ra</td> <td>ᯒ</td> <td>ᯒ</td> <td>ᯒ</td> <td>ᯒ</td> <td>ᯒ</td> </tr>
                        <tr> <td>sa</td> <td>ᯘ</td> <td>ᯘ</td> <td>ᯘ</td> <td>ᯘ</td> <td>ᯘ</td> </tr>
                        <tr> <td>ta</td> <td>ᯖ</td> <td>ᯖ</td> <td>ᯖ</td> <td>ᯖ</td> <td>ᯖ</td> </tr>
                        <tr> <td>wa</td> <td>ᯋ</td> <td>ᯋ</td> <td>ᯋ</td> <td>ᯋ</td> <td>ᯋ</td> </tr>
                        <tr> <td>ya</td> <td>ᯛ</td> <td>ᯛ</td> <td>ᯛ</td> <td>ᯛ</td> <td>ᯛ</td> </tr>
                        <tr> <td>za</td> <td>ᯗ</td> <td>ᯗ</td> <td>ᯗ</td> <td>ᯗ</td> <td>ᯗ</td> </tr>
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
                    <div class="mb-3">
                        <label for="latinInput" class="form-label">Masukkan Teks Latin:</label>
                        <input type="text" class="form-control" id="latinInput" placeholder="Contoh: Horas" oninput="updateTransliterasi()">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Hasil Aksara Batak:</label>
                        <div id="translitResult" class="border rounded p-3 bg-white"></div>
                        <button class="btn btn-secondary btn-sm mt-2" onclick="copyToClipboard()">Salin ke Papan Klip</button>
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
                    <div id="soalKuis"></div>
                    <div class="mt-3 text-center">
                        <button class="btn btn-success" onclick="periksaJawaban()">Periksa Jawaban</button>
                    </div>
                    <div id="umpanBalikKuis" class="mt-2 text-center"></div>
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
                    <div class="text-center mb-3">
                        <button id="modeGuidedButton" class="btn btn-primary" onclick="setMode('guided')">Latihan Terpandu</button>
                        <button id="modeFreeButton" class="btn btn-outline-primary" onclick="setMode('free')">Latihan Bebas</button>
                    </div>
                    <div id="guided-mode-display" class="text-center mb-3 d-none">
                        <p class="h4">Tuliskan aksara ini:</p>
                        <div id="targetAksara" class="display-1" style="font-family: 'Noto Sans Batak', serif;"></div>
                        <div class="progress mt-3">
                            <div id="levelProgress" class="progress-bar progress-bar-custom" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-2">Level <span id="currentLevel">1</span>: <span id="progressText">0/5 aksara</span></p>
                        <div id="feedbackMessage" class="mt-2"></div>
                    </div>
                    <canvas id="writingCanvas" class="border rounded drawing-canvas"></canvas>
                    <div class="mt-3 text-center">
                        <button class="btn btn-secondary" onclick="clearCanvas()">Hapus Tulisan</button>
                        <button class="btn btn-info" onclick="changeStroke(2)">Tebal</button>
                        <button class="btn btn-info" onclick="changeStroke(1)">Tipis</button>
                        <button id="nextAksaraButton" class="btn btn-success d-none" onclick="checkAksara()">Periksa & Lanjut</button>
                        <button class="btn btn-primary" onclick="downloadCanvas()">Unduh Gambar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // --- Logika untuk Transliterasi ---
                const aksaraMap = {
                    'a_independent': 'ᯀ', 'i_independent': 'ᯤ', 'u_independent': 'ᯥ', 'e_independent': 'ᯀᯩ', 'o_independent': 'ᯀᯬ',
                    'i_vowel_sign': 'ᯪ', 'u_vowel_sign': 'ᯮ', 'e_vowel_sign': 'ᯩ', 'o_vowel_sign': 'ᯬ',
                    'b': 'ᯅ', 'c': 'ᯋ', 'd': 'ᯑ', 'g': 'ᯎ', 'h': 'ᯄ', 'j': 'ᯐ', 'k': 'ᯂ', 'l': 'ᯞ', 'm': 'ᯔ', 'n': 'ᯉ', 'p': 'ᯇ', 'r': 'ᯒ', 's': 'ᯘ', 't': 'ᯖ', 'w': 'ᯋ', 'y': 'ᯛ', 'z': 'ᯗ',
                    'nga_consonant': 'ᯝ', 'pangolat': '᯲', 'ng': 'ᯰ', ' ': ' ', '.': '.', ',': ',', '?': '?', '!': '!'
                };
                const vowels = ['a', 'i', 'u', 'e', 'o'];
                const consonants = ['b', 'c', 'd', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'r', 's', 't', 'w', 'y', 'z'];

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

                // --- Logika untuk Kuis ---
                const daftarSoal = [{ pertanyaan: 'Aksara Batak manakah yang melambangkan "ka"?', jawabanBenar: 'ᯂ', pilihan: ['ᯀ', 'ᯂ', 'ᯄ', 'ᯆ'] }, { pertanyaan: 'Apa bunyi dari aksara ᯔ?', jawabanBenar: 'ma', pilihan: ['ka', 'la', 'ma', 'na'] }, { pertanyaan: 'Aksara Batak untuk "ba" adalah...', jawabanBenar: 'ᯅ', pilihan: ['ᯀ', 'ᯅ', 'ᯘ', 'ᯖ'] }, { pertanyaan: 'Aksara Batak manakah yang mewakili suara "ta"?', jawabanBenar: 'ᯖ', pilihan: ['ᯖ', 'ᯗ', 'ᯘ', 'ᯒ'] }, { pertanyaan: 'Bagaimana cara menulis "la" dalam Aksara Batak?', jawabanBenar: 'ᯞ', pilihan: ['ᯞ', 'ᯟ', 'ᯡ', 'ᯠ'] }, { pertanyaan: 'Pilihlah aksara yang berbunyi "na"...', jawabanBenar: 'ᯉ', pilihan: ['ᯊ', 'ᯉ', 'ᯘ', 'ᯔ'] }, { pertanyaan: 'Aksara apakah ini: ᯄ ?', jawabanBenar: 'ha', pilihan: ['ga', 'ha', 'ja', 'ka'] }, { pertanyaan: 'Jika Anda ingin menulis "pa", aksara apa yang Anda gunakan?', jawabanBenar: 'ᯇ', pilihan: ['ᯇ', 'ᯎ', 'ᯏ', 'ᯐ'] }, { pertanyaan: 'Aksara manakah yang bunyinya "sa"?', jawabanBenar: 'ᯘ', pilihan: ['ᯘ', 'ᯙ', 'ᯚ', 'ᯛ'] }];
                let nomorSoal = 0;
                let jawabanDipilih = null;
                function tampilkanSoal() {
                    let soal = daftarSoal[nomorSoal];
                    let pilihanJawaban = '';
                    soal.pilihan.forEach(pilihan => {
                        pilihanJawaban += `<button class="btn btn-outline-primary m-1" onclick="pilihJawaban('${pilihan}')">${pilihan}</button>`;
                    });
                    document.getElementById('soalKuis').innerHTML = `<h3>Soal ${nomorSoal + 1}</h3><p>${soal.pertanyaan}</p><div>${pilihanJawaban}</div>`;
                }
                function pilihJawaban(jawaban) { jawabanDipilih = jawaban; }
                window.periksaJawaban = function() {
                    if (jawabanDipilih === null) { alert('Pilih jawaban dulu!'); return; }
                    let soal = daftarSoal[nomorSoal];
                    let umpanBalik = document.getElementById('umpanBalikKuis');
                    if (jawabanDipilih === soal.jawabanBenar) { umpanBalik.innerHTML = '<div class="alert alert-success">Benar!</div>'; }
                    else { umpanBalik.innerHTML = `<div class="alert alert-danger">Salah. Jawaban yang benar adalah ${soal.jawabanBenar}</div>`; }
                    jawabanDipilih = null;
                    nomorSoal++;
                    if (nomorSoal < daftarSoal.length) { setTimeout(tampilkanSoalBerikutnya, 1000); }
                    else { document.getElementById('soalKuis').innerHTML = '<div class="alert alert-info">Kuis selesai!</div>'; umpanBalik.innerHTML = ''; }
                }
                function tampilkanSoalBerikutnya() {
                    if (nomorSoal < daftarSoal.length) { tampilkanSoal(); document.getElementById('umpanBalikKuis').innerHTML = ''; }
                }
                tampilkanSoal();

                // --- Logika Kanvas Belajar Menulis (Dengan Validasi Pixel) ---
                const canvas = document.getElementById('writingCanvas');
                const ctx = canvas.getContext('2d');
                let isDrawing = false;
                let lastX = 0;
                let lastY = 0;
                let strokeWidth = 2;
                let currentMode = 'guided';
                let isCanvasEmpty = true;

                // Data Aksara untuk setiap level
                const levelData = [
                    ['ᯀ', 'ᯅ', 'ᯄ', 'ᯂ', 'ᯞ'],
                    ['ᯪ', 'ᯮ', 'ᯩ', 'ᯬ', '᯲'],
                    ['ᯀᯤ', 'ᯅᯮ', 'ᯄᯩ', 'ᯂᯬ', 'ᯖ᯲'],
                ];
                let currentLevel = 0;
                let aksaraInLevel = levelData[currentLevel];
                let completedAksara = [];
                let currentAksaraTarget = '';

                // Kanvas tersembunyi untuk validasi
                const hiddenCanvas = document.createElement('canvas');
                const hiddenCtx = hiddenCanvas.getContext('2d');
                const similarityThreshold = 0.75; // Ambang batas kecocokan (bisa disesuaikan)

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

                window.setMode = function(mode) {
                    currentMode = mode;
                    document.getElementById('modeGuidedButton').classList.remove('btn-primary', 'btn-outline-primary');
                    document.getElementById('modeFreeButton').classList.remove('btn-primary', 'btn-outline-primary');

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
                            document.getElementById('guided-mode-display').innerHTML = '<div class="alert alert-success">Semua level selesai!</div>';
                            document.getElementById('nextAksaraButton').classList.add('d-none');
                        }
                    }
                }

                // Fungsi untuk menggambar aksara target di kanvas tersembunyi
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
                        feedbackDiv.innerHTML = `<div class="alert alert-warning">Tulis aksara terlebih dahulu!</div>`;
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
                        // Perbaikan: gunakan toleransi warna untuk piksel
                        const isUserPixelBlack = userPixels[i] < 100 && userPixels[i+1] < 100 && userPixels[i+2] < 100;
                        const isTargetPixelBlack = targetPixels[i] < 100 && targetPixels[i+1] < 100 && targetPixels[i+2] < 100;

                        if (isUserPixelBlack) totalUserPixels++;
                        if (isTargetPixelBlack) totalTargetPixels++;
                        if (isUserPixelBlack && isTargetPixelBlack) overlapPixels++;
                    }

                    if (totalTargetPixels === 0) {
                        feedbackDiv.innerHTML = `<div class="alert alert-danger">Terjadi kesalahan pada sistem, silakan muat ulang halaman.</div>`;
                        return;
                    }

                    const similarity = (totalUserPixels + totalTargetPixels) > 0 ? (2 * overlapPixels) / (totalUserPixels + totalTargetPixels) : 0;

                    if (similarity >= similarityThreshold) {
                        if (!completedAksara.includes(currentAksaraTarget)) {
                            completedAksara.push(currentAksaraTarget);
                        }
                        feedbackDiv.innerHTML = `<div class="alert alert-success">Bagus! Akurasi: ${Math.round(similarity * 100)}%</div>`;
                        updateProgress();
                        saveProgress();
                        setTimeout(() => {
                            clearCanvas();
                            loadAksaraForLevel();
                            feedbackDiv.innerHTML = '';
                        }, 1500);
                    } else {
                        feedbackDiv.innerHTML = `<div class="alert alert-danger">Coba lagi! Akurasi: ${Math.round(similarity * 100)}%</div>`;
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
