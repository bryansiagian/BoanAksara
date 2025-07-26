@extends('layouts.app')

@section('title', 'Belajar Aksara Batak')

@section('content')
    <!-- Masthead -->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Boan Aksara</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Mulai perjalanan mengenal dan mengeksplor Aksara Batak dengan mudah dan menyenangkan</p>
                    <a class="btn btn-primary btn-xl" href="#about">Cari lebih banyak</a>
                </div>
            </div>
        </div>
    </header>

    <!-- About -->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Apa itu Aksara Batak?</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Aksara Batak adalah sistem tulisan tradisional suku Batak di Sumatera Utara. Digunakan sejak ratusan tahun lalu, aksara ini menuliskan bahasa Batak dalam bentuk suku kata, dan kini dilestarikan sebagai bagian dari kekayaan budaya Indonesia.</p>
                    <br>
                    <p class="text-white-75 mb-4">Ingin memulai mengenal dan mempelajari aksara Batak lebih dalam?</p>
                    <a class="btn btn-light btn-xl" href="#services">Mulai Sekarang!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">BoanAksara</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Sturdy Themes</h3>
                        <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Up to Date</h3>
                        <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Ready to Publish</h3>
                        <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Made with Love</h3>
                        <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
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
            <div class="row g-0">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/1.jpg') }}" title="Project Name">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/1.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/2.jpg') }}" title="Project Name">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/2.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/3.jpg') }}" title="Project Name">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/3.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/4.jpg') }}" title="Project Name">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/4.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/5.jpg') }}" title="Project Name">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/5.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/6.jpg') }}" title="Project Name">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/thumbnails/6.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
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
    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Let's Get In Touch!</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <!-- Message input -->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                        <!-- Submit success message -->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message -->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        <!-- Submit Button -->
                        <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                    <i class="bi-phone fs-2 mb-3 text-muted"></i>
                    <div>+1 (555) 123-4567</div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        // Data Aksara Batak (perlu dilengkapi dengan lengkap)
        const aksaraMap = {
            'a': 'ᯀ', 'b': 'ᯅ', 'c': 'ᯘ', 'd': 'ᯖ', 'g': 'ᯎ', 'h': 'ᯄ', 'j': 'ᯐ', 'k': 'ᯂ',
            'l': 'ᯞ', 'm': 'ᯔ', 'n': 'ᯉ', 'p': 'ᯇ', 'r': 'ᯒ', 's': 'ᯘ', 't': 'ᯖ', 'w': 'ᯋ',
            'y': 'ᯛ', 'z': 'ᯗ',
            'i': 'ᯪ', 'u': 'ᯮ', 'e': 'ᯇᯩ', 'o': 'ᯅᯬ',
            'ai': 'ᯅᯤ', 'au': 'ᯅᯥ',
            'ang': 'ᯀᯰ', 'ing': 'ᯪᯰ', 'ung': 'ᯮᯰ', 'eng': 'ᯇᯩᯰ', 'ong': 'ᯅᯬᯰ',
            'ar': 'ᯀᯒ᯲', 'ir': 'ᯪᯒ᯲', 'ur': 'ᯮᯒ᯲', 'er': 'ᯇᯩᯒ᯲', 'or': 'ᯅᯬᯒ᯲',

            //Konsonan ganda (dengan фонетическим приближением)
            'bb': 'ᯅᯅ', 'cc': 'ᯘᯘ', 'dd': 'ᯖᯖ', 'ff': 'ᯇᯇ', 'gg': 'ᯎᯎ', 'hh': 'ᯄᯄ',
            'jj': 'ᯐᯐ', 'kk': 'ᯂᯂ', 'll': 'ᯞᯞ', 'mm': 'ᯔᯔ', 'nn': 'ᯉᯉ', 'pp': 'ᯇᯇ',
            'qq': 'ᯂᯂ', 'rr': 'ᯒᯒ', 'ss': 'ᯘᯘ', 'tt': 'ᯖᯖ', 'vv': 'ᯋᯋ', 'ww': 'ᯋᯋ',
            'xx': 'ᯂᯘ', 'yy': 'ᯛᯛ', 'zz': 'ᯗᯗ',

            //Kombinasi konsonan dengan vokal
            'ba': 'ᯅ', 'ca': 'ᯘ', 'da': 'ᯖ', 'ga': 'ᯎ', 'ha': 'ᯄ', 'ja': 'ᯐ', 'ka': 'ᯂ',
            'la': 'ᯞ', 'ma': 'ᯔ', 'na': 'ᯉ', 'pa': 'ᯇ', 'ra': 'ᯒ', 'sa': 'ᯘ', 'ta': 'ᯖ', 'wa': 'ᯋ',
            'ya': 'ᯛ', 'za': 'ᯗ',

            'bi': 'ᯅᯪ', 'ci': 'ᯘᯪ', 'di': 'ᯖᯪ', 'gi': 'ᯎᯪ', 'hi': 'ᯄᯪ', 'ji': 'ᯐᯪ', 'ki': 'ᯂᯪ',
            'li': 'ᯞᯪ', 'mi': 'ᯔᯪ', 'ni': 'ᯉᯪ', 'pi': 'ᯇᯪ', 'ri': 'ᯒᯪ', 'si': 'ᯘᯪ', 'ti': 'ᯖᯪ', 'wi': 'ᯋᯪ',
            'yi': 'ᯛᯪ', 'zi': 'ᯗᯪ',

            'bu': 'ᯅᯮ', 'cu': 'ᯘᯮ', 'du': 'ᯖᯮ', 'gu': 'ᯎᯮ', 'hu': 'ᯄᯮ', 'ju': 'ᯐᯮ', 'ku': 'ᯂᯮ',
            'lu': 'ᯞᯮ', 'mu': 'ᯔᯮ', 'nu': 'ᯉᯮ', 'pu': 'ᯇᯮ', 'ru': 'ᯒᯮ', 'su': 'ᯘᯮ', 'tu': 'ᯖᯮ', 'wu': 'ᯋᯮ',
            'yu': 'ᯛᯮ', 'zu': 'ᯗᯮ',

            'be': 'ᯅᯇᯩ', 'ce': 'ᯘᯇᯩ', 'de': 'ᯖᯇᯩ', 'ge': 'ᯎᯇᯩ', 'he': 'ᯄᯇᯩ', 'je': 'ᯐᯇᯩ', 'ke': 'ᯂᯇᯩ',
            'le': 'ᯞᯇᯩ', 'me': 'ᯔᯇᯩ', 'ne': 'ᯉᯇᯩ', 'pe': 'ᯇᯇᯩ', 're': 'ᯒᯇᯩ', 'se': 'ᯘᯇᯩ', 'te': 'ᯖᯇᯩ', 'we': 'ᯋᯇᯩ',
            'ye': 'ᯛᯇᯩ', 'ze': 'ᯗᯇᯩ',

            'bo': 'ᯅᯬ', 'co': 'ᯘᯬ', 'do': 'ᯖᯬ', 'go': 'ᯎᯬ', 'ho': 'ᯄᯬ', 'jo': 'ᯐᯬ', 'ko': 'ᯂᯬ',
            'lo': 'ᯞᯬ', 'mo': 'ᯔᯬ', 'no': 'ᯉᯬ', 'po': 'ᯇᯬ', 'ro': 'ᯒᯬ', 'so': 'ᯘᯬ', 'to': 'ᯖᯬ', 'wo': 'ᯋᯬ',
            'yo': 'ᯛᯬ', 'zo': 'ᯗᯬ',

            //Inffixes (sisipan)
            'in': 'ᯪᯉ᯲', 'um': 'ᯮᯔ᯲', 'ar': 'ᯀᯒ᯲',

            //Simbol Vokal di akhir kata (membutuhkan *pangolat*)
            'a\'': 'ᯀ᯲', 'i\'': 'ᯪ᯲', 'u\'': 'ᯮ᯲', 'e\'': 'ᯇᯩ᯲', 'o\'': 'ᯅᯬ᯲',

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
        const daftarSoal = [
            {
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
            }
            // Tambahkan lebih banyak soal di sini...
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