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
            // Data Aksara Batak (kamus kita sekarang lebih rapi dan terstruktur)
            // Data Aksara Batak (kamus kita sekarang lebih rapi dan terstruktur)
            const aksaraMap = {
                // INI YANG DIUBAH - Vokal Mandiri dan Anak ni Surat kini memiliki nama kunci yang jelas
                // untuk menghindari kebingungan.
                // Vokal Mandiri (digunakan di awal kata, tidak setelah konsonan)
                'a_independent': 'ᯀ',
                'i_independent': 'ᯤ',
                'u_independent': 'ᯮ',
                'e_independent': 'ᯧ',
                'o_independent': 'ᯥ',

                // Anak ni Surat (Tanda untuk mengubah vokal, diletakkan setelah aksara konsonan)
                'i_vowel_sign': 'ᯪ',
                'u_vowel_sign': 'ᯮ',
                'e_vowel_sign': 'ᯩ',
                'o_vowel_sign': 'ᯬ',

                // Ina ni Surat (Konsonan dasar yang sudah memiliki vokal 'a')
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

                // Pangolat (Tanda pemati vokal)
                'pangolat': '᯲',

                // Kombinasi Khusus
                'ng': 'ᯰ',

                // Tanda baca dan spasi
                ' ': ' ',
                '.': '.',
                ',': ',',
                '?': '?',
                '!': '!'
            };

            // Daftar vokal dan konsonan untuk membantu logika
            const vowels = ['a', 'i', 'u', 'e', 'o'];
            const consonants = ['b', 'c', 'd', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'r', 's', 't', 'w', 'y', 'z'];

            /**
             * Fungsi ini bertugas mengubah teks Latin menjadi Aksara Batak.
             * Kami akan memproses teksnya suku kata per suku kata.
             */
            function transliterasi(text) {
                let hasil = '';
                let i = 0;
                const textLower = text.toLowerCase();
                const len = textLower.length;

                while (i < len) {
                    let matched = false;

                    // INI YANG DIUBAH
                    // Langkah 1: Prioritas paling tinggi adalah Vokal Mandiri di awal kata.
                    // Jika karakter saat ini (i) adalah 0 (awal kata) dan merupakan vokal,
                    // kita langsung pakai aksara vokal mandiri.
                    if (i === 0 && vowels.includes(textLower.charAt(i))) {
                        const char = textLower.charAt(i);
                        hasil += aksaraMap[`${char}_independent`];
                        i++;
                        matched = true;
                    }

                    // Langkah 2: Cek apakah ada suku kata yang lebih dari satu huruf
                    if (!matched && i + 1 < len) {
                        const duaHuruf = textLower.substring(i, i + 2);
                        if (duaHuruf === 'ng') {
                            hasil += aksaraMap['ng'];
                            i += 2;
                            matched = true;
                        }
                    }

                    // Langkah 3: Cek kombinasi konsonan + vokal (ini untuk Anak ni Surat)
                    if (!matched && i + 1 < len) {
                        const konsonan = textLower.charAt(i);
                        const vokal = textLower.charAt(i + 1);

                        if (consonants.includes(konsonan) && vowels.includes(vokal)) {
                            // Jika vokal adalah 'a', langsung gunakan Ina ni Surat karena sudah mengandung 'a'
                            if (vokal === 'a') {
                                hasil += aksaraMap[konsonan];
                            }
                            // Jika vokal lainnya, gunakan Ina ni Surat + Anak ni Surat
                            else {
                                hasil += aksaraMap[konsonan] + aksaraMap[`${vokal}_vowel_sign`];
                            }
                            i += 2;
                            matched = true;
                        }
                    }

                    // Langkah 4: Jika tidak ada yang cocok, periksa per karakter
                    if (!matched) {
                        const char = textLower.charAt(i);

                        // Jika karakternya konsonan tunggal (di akhir kata atau tidak diikuti vokal)
                        if (consonants.includes(char)) {
                            hasil += aksaraMap[char] + aksaraMap['pangolat'];
                        }
                        // Jika karakternya vokal tunggal di tengah atau akhir kata
                        else if (vowels.includes(char)) {
                            // Karena kita sudah menangani vokal di awal kata di langkah 1,
                            // vokal di sini tidak mungkin vokal mandiri. Jadi, kita harus
                            // mencari tahu aksara sebelumnya untuk menambahkan Anak ni Surat yang benar.
                            // Logika ini masih perlu penyempurnaan, tapi untuk sementara kita
                            // perlakukan vokal tunggal sebagai Vokal Mandiri.
                            hasil += aksaraMap[`${char}_independent`];
                        }
                        // Jika bukan vokal atau konsonan (seperti spasi, tanda baca)
                        else {
                            hasil += char;
                        }
                        i++;
                    }
                }
                return hasil;
            }

            // Fungsi-fungsi lain tetap sama seperti sebelumnya
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
@endsection
