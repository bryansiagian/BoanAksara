@extends('layouts.app')

@section('title', 'Belajar Aksara Batak')

@section('content')
    <!-- Masthead (Course Header) -->
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

    <!-- Kamus Aksara Batak -->
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
                            <th>Pakpak</th>
                            <th>... (Lainnya)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>a</td>
                            <td>ᯀ</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                        <tr>
                            <td>ba</td>
                            <td>ᯅ</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                        <tr>
                            <td>ka</td>
                            <td>ᯂ</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                        <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Transliterasi Section -->
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

    <!-- Quiz Section -->
    <section id="quiz" class="page-section bg-white py-5">
        <div class="container">
            <h2 class="text-center mb-4">Kuis Tebak Aksara</h2>
            <p class="text-center">Uji pengetahuan Anda tentang Aksara Batak!</p>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div id="soalKuis">
                        <!-- Soal kuis akan ditampilkan di sini -->
                    </div>
                    <div class="mt-3 text-center">
                        <button class="btn btn-success" onclick="periksaJawaban()">Periksa Jawaban</button>
                    </div>
                    <div id="umpanBalikKuis" class="mt-2 text-center"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tulis Namamu Section -->
    <section id="tulis-nama" class="page-section bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Tulis Namamu dalam Aksara Batak</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Masukkan Nama Anda:</label>
                        <input type="text" class="form-control" id="nameInput" placeholder="Nama Anda" oninput="updatePratinjauNama()">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Hasil:</label>
                        <div id="nameResult" class="border rounded p-3 bg-white"></div>
                        <button class="btn btn-info btn-sm mt-2" onclick="unduhSebagaiGambar()">Unduh Gambar</button>
                    </div>
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
                pertanyaan: 'Jika Anda ingin menulis "pa", aksara apa yang Anda gunakan?',
                jawabanBenar: 'ᯇ',
                pilihan: ['ᯇ', 'ᯎ', 'ᯏ', 'ᯐ']
            },
            {
                pertanyaan: 'Aksara manakah yang bunyinya "sa"?',
                jawabanBenar: 'ᯘ',
                pilihan: ['ᯘ', 'ᯙ', 'ᯚ', 'ᯛ']
            }
        ];

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