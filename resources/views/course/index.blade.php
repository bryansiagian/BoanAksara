{{-- @extends('layouts.app')

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
                        <input type="text" class="form-control" id="latinInput" placeholder="Contoh: Horas"
                            oninput="updateTransliterasi()">
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Hasil Aksara Batak:</label>
                        <div id="translitResult" class="border rounded p-3 bg-white"></div>
                        <button class="btn btn-secondary btn-sm mt-2" onclick="copyToClipboard()">Salin ke Papan
                            Klip</button>
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
                        <input type="text" class="form-control" id="nameInput" placeholder="Nama Anda"
                            oninput="updatePratinjauNama()">
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
            const aksaraMap = {
                'a': 'ᯀ',
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

                'i': 'ᯪ',
                'u': 'ᯮ',
                'e': 'ᯩ',
                'o': 'ᯬ',

                'pangolat': '᯲',

                'ng': 'ᯰ',

                ' ': ' ',
                '.': '.',
                ',': ',',
                '?': '?',
                '!': '!'
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

                    if (i + 1 < len) {
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
                            }
                            else {
                                hasil += aksaraMap[konsonan] + aksaraMap[vokal];
                            }
                            i += 2;
                            matched = true;
                        }
                    }

                    if (!matched) {
                        const char = textLower.charAt(i);

                        if (vowels.includes(char)) {
                            hasil += aksaraMap[char];
                        }
                        else if (consonants.includes(char)) {
                            hasil += aksaraMap[char] + aksaraMap['pangolat'];
                        }
                        else {
                            hasil += char;
                        }
                        i++;
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
            tampilkanSoal();

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
                    pilihanJawaban +=
                        `<button class="btn btn-outline-primary m-1" onclick="pilihJawaban('${pilihan}')">${pilihan}</button>`;
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
                    umpanBalik.innerHTML =
                        `<div class="alert alert-danger">Salah. Jawaban yang benar adalah ${soal.jawabanBenar}</div>`;
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
@endsection --}}

{{-- ================================================================================== --}}
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

<style>
    #aksaraCanvas {
        cursor: crosshair;
        touch-action: none;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        max-width: 100%;
        height: auto;
    }

    @media (max-width: 768px) {
        #aksaraCanvas {
            width: 300px;
            height: 300px;
        }
    }
</style>

<script>
    // Data Aksara Batak Lengkap
    const aksaraBatak = [
        { no: 1,  huruf: 'a',      Toba: 'ᯀ', Mandailing: 'ᯀ', Karo: 'ᯀ', Simalungun: 'ᯀ', Pakpak: 'ᯀ' },
        { no: 2,  huruf: 'ha/ka',  Toba: 'ᯂ', Mandailing: 'ᯂ', Karo: 'ᯂ', Simalungun: 'ᯂ', Pakpak: 'ᯂ' },
        { no: 3,  huruf: 'na',     Toba: 'ᯉ', Mandailing: 'ᯉ', Karo: 'ᯉ', Simalungun: 'ᯉ', Pakpak: 'ᯉ' },
        { no: 4,  huruf: 'ra',     Toba: 'ᯒ', Mandailing: 'ᯒ', Karo: 'ᯒ', Simalungun: 'ᯒ', Pakpak: 'ᯒ' },
        { no: 5,  huruf: 'ta',     Toba: 'ᯖ', Mandailing: 'ᯖ', Karo: 'ᯖ', Simalungun: 'ᯖ', Pakpak: 'ᯖ' },
        { no: 6,  huruf: 'ba',     Toba: 'ᯅ', Mandailing: 'ᯅ', Karo: 'ᯅ', Simalungun: 'ᯅ', Pakpak: 'ᯅ' },
        { no: 7,  huruf: 'wa',     Toba: 'ᯋ', Mandailing: 'ᯋ', Karo: 'ᯋ', Simalungun: 'ᯋ', Pakpak: 'ᯋ' },
        { no: 8,  huruf: 'i',      Toba: 'ᯤ', Mandailing: 'ᯤ', Karo: 'ᯤ', Simalungun: 'ᯤ', Pakpak: 'ᯤ' },
        { no: 9,  huruf: 'ma',     Toba: 'ᯔ', Mandailing: 'ᯔ', Karo: 'ᯔ', Simalungun: 'ᯔ', Pakpak: 'ᯔ' },
        { no: 10, huruf: 'nga',    Toba: 'ᯜ', Mandailing: 'ᯜ', Karo: 'ᯜ', Simalungun: 'ᯜ', Pakpak: 'ᯜ' },
        { no: 11, huruf: 'la',     Toba: 'ᯞ', Mandailing: 'ᯞ', Karo: 'ᯞ', Simalungun: 'ᯞ', Pakpak: 'ᯞ' },
        { no: 12, huruf: 'pa',     Toba: 'ᯇ', Mandailing: 'ᯇ', Karo: 'ᯇ', Simalungun: 'ᯇ', Pakpak: 'ᯇ' },
        { no: 13, huruf: 'sa',     Toba: 'ᯘ', Mandailing: 'ᯘ', Karo: 'ᯘ', Simalungun: 'ᯘ', Pakpak: 'ᯘ' },
        { no: 14, huruf: 'da',     Toba: 'ᯑ', Mandailing: 'ᯑ', Karo: 'ᯑ', Simalungun: 'ᯑ', Pakpak: 'ᯑ' },
        { no: 15, huruf: 'ga',     Toba: 'ᯎ', Mandailing: 'ᯎ', Karo: 'ᯎ', Simalungun: 'ᯎ', Pakpak: 'ᯎ' },
        { no: 16, huruf: 'ja',     Toba: 'ᯐ', Mandailing: 'ᯐ', Karo: 'ᯐ', Simalungun: 'ᯐ', Pakpak: 'ᯐ' },
        { no: 17, huruf: 'u',      Toba: 'ᯥ', Mandailing: 'ᯥ', Karo: 'ᯥ', Simalungun: 'ᯥ', Pakpak: 'ᯥ' },
        { no: 18, huruf: 'ya',     Toba: 'ᯛ', Mandailing: 'ᯛ', Karo: 'ᯛ', Simalungun: 'ᯛ', Pakpak: 'ᯛ' },
        { no: 19, huruf: 'nya',    Toba: 'ᯝ', Mandailing: 'ᯝ', Karo: 'ᯝ', Simalungun: 'ᯝ', Pakpak: 'ᯝ' }
    ];

    // Inisialisasi Canvas
    const canvas = document.getElementById('aksaraCanvas');
    const ctx = canvas.getContext('2d');
    const varianSelect = document.getElementById('varianSelect');
    const aksaraSelect = document.getElementById('aksaraSelect');
    const brushSize = document.getElementById('brushSize');

    let isDrawing = false;
    let lastX = 0;
    let lastY = 0;

    // Setup Canvas Awal
    function setupCanvas() {
        ctx.fillStyle = '#fff9f0';
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        ctx.strokeStyle = '#7B241C';
        ctx.lineWidth = brushSize.value;
        ctx.lineCap = 'round';
        ctx.lineJoin = 'round';
    }

    // Mengisi dropdown aksara
    function populateAksaraDropdown() {
        aksaraSelect.innerHTML = '';
        aksaraBatak.forEach(aksara => {
            const option = document.createElement('option');
            option.value = aksara.huruf;
            option.textContent = `${aksara.huruf} (${aksara[varianSelect.value]})`;
            aksaraSelect.appendChild(option);
        });
    }

    // Event Listeners untuk Menggambar
    canvas.addEventListener('mousedown', startDrawing);
    canvas.addEventListener('mousemove', draw);
    canvas.addEventListener('mouseup', stopDrawing);
    canvas.addEventListener('mouseout', stopDrawing);

    // Touch support untuk mobile
    canvas.addEventListener('touchstart', handleTouchStart);
    canvas.addEventListener('touchmove', handleTouchMove);
    canvas.addEventListener('touchend', handleTouchEnd);

    function startDrawing(e) {
        isDrawing = true;
        [lastX, lastY] = [e.offsetX, e.offsetY];
    }

    function draw(e) {
        if (!isDrawing) return;

        ctx.beginPath();
        ctx.moveTo(lastX, lastY);
        ctx.lineTo(e.offsetX, e.offsetY);
        ctx.stroke();
        [lastX, lastY] = [e.offsetX, e.offsetY];
    }

    function stopDrawing() {
        isDrawing = false;
    }

    function handleTouchStart(e) {
        e.preventDefault();
        const rect = canvas.getBoundingClientRect();
        const touch = e.touches[0];
        const mouseEvent = new MouseEvent('mousedown', {
            clientX: touch.clientX,
            clientY: touch.clientY,
            offsetX: touch.clientX - rect.left,
            offsetY: touch.clientY - rect.top
        });
        canvas.dispatchEvent(mouseEvent);
    }

    function handleTouchMove(e) {
        e.preventDefault();
        const rect = canvas.getBoundingClientRect();
        const touch = e.touches[0];
        const mouseEvent = new MouseEvent('mousemove', {
            clientX: touch.clientX,
            clientY: touch.clientY,
            offsetX: touch.clientX - rect.left,
            offsetY: touch.clientY - rect.top
        });
        canvas.dispatchEvent(mouseEvent);
    }

    function handleTouchEnd(e) {
        e.preventDefault();
        const mouseEvent = new MouseEvent('mouseup', {});
        canvas.dispatchEvent(mouseEvent);
    }

    // Tampilkan contoh aksara
    document.getElementById('btnContoh').addEventListener('click', function() {
        const selectedVarian = varianSelect.value;
        const selectedAksara = aksaraSelect.value;
        const aksaraData = aksaraBatak.find(a => a.huruf === selectedAksara);

        if (!aksaraData) return;

        const aksaraChar = aksaraData[selectedVarian];

        setupCanvas();
        ctx.font = '200px Batak Unicode';
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillStyle = '#7B241C';
        ctx.fillText(aksaraChar, canvas.width/2, canvas.height/2);
    });

    // Event Listeners lainnya
    document.getElementById('btnClear').addEventListener('click', setupCanvas);
    varianSelect.addEventListener('change', populateAksaraDropdown);
    brushSize.addEventListener('input', function() {
        ctx.lineWidth = this.value;
    });

    // Inisialisasi awal
    setupCanvas();
    populateAksaraDropdown();

    // Load font khusus jika diperlukan
    document.fonts.load('200px "Batak Unicode"').catch(err => {
        console.log('Font Batak Unicode tidak tersedia, menggunakan font default');
    });
</script>
    <!-- Transliterasi Section -->
    <!-- Transliterasi Latin ke Aksara Batak -->
<section id="transliterasi" style="background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%); padding: 80px 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="display-4 fw-bold" style="color: #2c3e50; position: relative; display: inline-block;">
        <span style="position: relative; z-index: 1;">Transliterasi Latin ke Aksara Batak</span>
        <span style="position: absolute; bottom: 5px; left: 0; width: 100%; height: 10px; background-color: rgba(123, 36, 28, 0.3); z-index: 0;"></span>
      </h2>
      <p class="lead text-muted">Masukkan teks Latin dan lihat ajaibnya aksara Batak!</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card shadow-sm border-0 overflow-hidden">
          <div class="card-body p-4">
            <div class="mb-4">
              <label for="latinInput" class="form-label fw-bold" style="color: #2c3e50; font-size: 1.1rem;">
                <i class="bi bi-input-cursor-text me-2"></i>Masukkan Teks Latin:
              </label>
              <div class="input-group">
                <input type="text" class="form-control form-control-lg" id="latinInput" placeholder="Contoh: Horas" oninput="updateTransliterasi()">
                <button class="btn btn-outline-secondary" type="button" onclick="document.getElementById('latinInput').value = ''; updateTransliterasi()">
                  <i class="bi bi-x-circle"></i>
                </button>
              </div>
            </div>

            <div class="mt-4">
              <label class="form-label fw-bold" style="color: #2c3e50; font-size: 1.1rem;">
                <i class="bi bi-translate me-2"></i>Hasil Aksara Batak:
              </label>
              <div id="translitResult" class="border rounded p-4 bg-white shadow-inner text-center"
                   style="min-height: 100px; font-size: 2rem; line-height: 1.5; background-color: #fff9f0; border: 2px dashed #e9c46a !important;">
                <span id="batakText" style="font-family: 'Aksara Batak', sans-serif; color: #7B241C;"></span>
              </div>

              <div class="d-flex justify-content-between mt-3">
                <button class="btn btn-primary" onclick="copyToClipboard()">
                  <i class="bi bi-clipboard me-2"></i>Salin Teks
                </button>
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
            'i': 'ᯪ',
            'u': 'ᯮ',
            'e': 'ᯇᯩ',
            'o': 'ᯅᯬ',
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

            // Diakritik (tanda vokal)
            'di': 'ᯖᯪ',
            'du': 'ᯖᯮ',
            'de': 'ᯖᯇᯩ',
            'do': 'ᯖᯬ',
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
            for (let i = 0,l = text.length; i < l; i++) {
                let char = text[i];
                if (aksaraMap[char]) {
                    hasil += aksaraMap[char];
                } else {
                    hasil += char;
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
