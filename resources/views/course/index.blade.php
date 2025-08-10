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
<section id="kamus"
         class="page-section py-5"
         style="background: linear-gradient(to right, #ffffff, #f3f3f3);">
    <div class="container">
        <h2 class="text-center mb-4">Kamus Aksara Batak - Ina ni Surat</h2>
        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Huruf</th>
                        <th>Toba</th>
                        <th>Mandailing</th>
                        <th>Karo</th>
                        <th>Simalungun</th>
                        <th>Pakpak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>a</td><td>ᯀ</td><td>ᯀ</td><td>ᯀ</td><td>ᯀ</td><td>ᯀ</td></tr>
                    <tr><td>2</td><td>ha/ka</td><td>ᯂ</td><td>ᯂ</td><td>ᯂ</td><td>ᯂ</td><td>ᯂ</td></tr>
                    <tr><td>3</td><td>na</td><td>ᯉ</td><td>ᯉ</td><td>ᯉ</td><td>ᯉ</td><td>ᯉ</td></tr>
                    <tr><td>4</td><td>ra</td><td>ᯒ</td><td>ᯒ</td><td>ᯒ</td><td>ᯒ</td><td>ᯒ</td></tr>
                    <tr><td>5</td><td>ta</td><td>ᯖ</td><td>ᯖ</td><td>ᯖ</td><td>ᯖ</td><td>ᯖ</td></tr>
                    <tr><td>6</td><td>ba</td><td>ᯅ</td><td>ᯅ</td><td>ᯅ</td><td>ᯅ</td><td>ᯅ</td></tr>
                    <tr><td>7</td><td>wa</td><td>ᯋ</td><td>ᯋ</td><td>ᯋ</td><td>ᯋ</td><td>ᯋ</td></tr>
                    <tr><td>8</td><td>i</td><td>ᯤ</td><td>ᯤ</td><td>ᯤ</td><td>ᯤ</td><td>ᯤ</td></tr>
                    <tr><td>9</td><td>ma</td><td>ᯔ</td><td>ᯔ</td><td>ᯔ</td><td>ᯔ</td><td>ᯔ</td></tr>
                    <tr><td>10</td><td>nga</td><td>ᯜ</td><td>ᯜ</td><td>ᯜ</td><td>ᯜ</td><td>ᯜ</td></tr>
                    <tr><td>11</td><td>la</td><td>ᯞ</td><td>ᯞ</td><td>ᯞ</td><td>ᯞ</td><td>ᯞ</td></tr>
                    <tr><td>12</td><td>pa</td><td>ᯇ</td><td>ᯇ</td><td>ᯇ</td><td>ᯇ</td><td>ᯇ</td></tr>
                    <tr><td>13</td><td>sa</td><td>ᯘ</td><td>ᯘ</td><td>ᯘ</td><td>ᯘ</td><td>ᯘ</td></tr>
                    <tr><td>14</td><td>da</td><td>ᯑ</td><td>ᯑ</td><td>ᯑ</td><td>ᯑ</td><td>ᯑ</td></tr>
                    <tr><td>15</td><td>ga</td><td>ᯎ</td><td>ᯎ</td><td>ᯎ</td><td>ᯎ</td><td>ᯎ</td></tr>
                    <tr><td>16</td><td>ja</td><td>ᯐ</td><td>ᯐ</td><td>ᯐ</td><td>ᯐ</td><td>ᯐ</td></tr>
                    <tr><td>17</td><td>u</td><td>ᯥ</td><td>ᯥ</td><td>ᯥ</td><td>ᯥ</td><td>ᯥ</td></tr>
                    <tr><td>18</td><td>ya</td><td>ᯛ</td><td>ᯛ</td><td>ᯛ</td><td>ᯛ</td><td>ᯛ</td></tr>
                    <tr><td>19</td><td>nya</td><td>ᯝ</td><td>ᯝ</td><td>ᯝ</td><td>ᯝ</td><td>ᯝ</td></tr>
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
<section id="anak-ni-surat" style="padding: 50px 0; background-color: #f8f9fa; color: #000">
  <div class="container">
    <h2 style="text-align:center; margin-bottom: 30px;">Anak Ni Surat (Aksara Batak)</h2>
    <table border="1" cellpadding="8" style="border-collapse: collapse; width: 100%; text-align: center;">
      <thead style="background-color: #e9ecef;">
        <tr>
          <th>Nama</th>
          <th>Latin</th>
          <th>Batak (Unicode)</th>
          <th>Contoh</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Haborotan</td>
          <td>u</td>
          <td>ᯮ</td>
          <td>ᯒᯮ (Ru)</td>
        </tr>
        <tr>
          <td>Hatadingan</td>
          <td>e</td>
          <td>ᯩ</td>
          <td>ᯒᯩ (Re)</td>
        </tr>
        <tr>
          <td>Haluaan</td>
          <td>i</td>
          <td>ᯪ</td>
          <td>ᯒᯪ (Ri)</td>
        </tr>
        <tr>
          <td>Cikora</td>
          <td>o</td>
          <td>ᯬ</td>
          <td>ᯒᯬ (Ro)</td>
        </tr>
        <tr>
          <td>Kejeringen</td>
          <td>h</td>
          <td>ᯱ</td>
          <td>ᯒᯱ (Rah)</td>
        </tr>
        <tr>
          <td>Hamisaran</td>
          <td>ng</td>
          <td>ᯰ</td>
          <td>ᯒᯰ (Rang)</td>
        </tr>
        <tr>
          <td>Hatulungan</td>
          <td>ou</td>
          <td>ᯯ</td>
          <td>ᯒᯯ (Rou)</td>
        </tr>
        <tr>
          <td>Pangolat</td>
          <td>-</td>
          <td>᯲</td>
          <td>ᯒ᯲ (R)</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- Section Anak Ni Surat -->
<section id="anak-ni-surat" style="background-color: #f1f1f1; padding: 60px 0;">
  <div class="container">
    <h2 class="text-center" style="color: #000;">Penggunaan Aksara </h2>
    <hr class="divider" />

    <div class="table-responsive">
      <table class="table table-bordered" style="color: #000; background-color: #fff;">
        <thead class="table-light">
          <tr>
            <th class="text-center">Contoh Kata</th>
            <th class="text-center">Arti</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="font-size: 1.5rem; text-align: center;"> ᯐᯅᯮ</td>
            <td>Jabu (rumah)</td>
          </tr>
          <tr>
            <td style="font-size: 1.5rem; text-align: center;">ᯔᯝᯉ᯲</td>
            <td>Mangan (makan)</td>
          </tr>
          <tr>
            <td style="font-size: 1.5rem; text-align: center;">ᯔᯒ᯲ᯘᯪᯀᯐᯒ᯲</td>
            <td>Marsiajar (belajar)</td>
          </tr>
          <tr>
            <td style="font-size: 1.5rem; text-align: center;"> ᯔᯉ᯲ᯐᯂ</td>
            <td>manjaha (membaca)</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Canvas Section -->
<section id="belajar-aksara" class="page-section py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow">
                    <div class="card-header bg-danger">
                        <h4 style="color : white;"><i class="bi bi-pencil me-2"></i>Latihan Menulis Aksara Batak</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Kontrol Canvas -->
                            <div class="col-md-4 mb-3">
                                <div class="mb-3">
                                    <label class="form-label">Pilih Varian:</label>
                                    <select id="varianSelect" class="form-select">
                                        <option value="Toba">Toba</option>
                                        <option value="Mandailing">Mandailing</option>
                                        <option value="Karo">Karo</option>
                                        <option value="Simalungun">Simalungun</option>
                                        <option value="Pakpak">Pakpak</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pilih Aksara:</label>
                                    <select id="aksaraSelect" class="form-select">
                                        <!-- Akan diisi oleh JavaScript -->
                                    </select>
                                </div>
                                <div class="d-grid gap-2">
                                    <button id="btnContoh" class="btn btn-primary">
                                        <i class="bi bi-eye me-2"></i>Tampilkan Contoh
                                    </button>
                                    <button id="btnClear" class="btn btn-danger">
                                        <i class="bi bi-eraser me-2"></i>Hapus Canvas
                                    </button>
                                </div>
                                <div class="mt-3">
                                    <small class="text-muted">Ukuran Kuas:</small>
                                    <input type="range" id="brushSize" class="form-range" min="1" max="10" value="3">
                                </div>
                            </div>

                            <!-- Canvas Area -->
                            <div class="col-md-8">
                                <div class="text-center mb-3">
                                    <canvas id="aksaraCanvas" width="400" height="400"
                                            style="border:1px solid #ddd; background-color: #fff9f0;"></canvas>
                                </div>
                                <div class="text-center">
                                    <small class="text-muted">Gunakan mouse/touch untuk menulis aksara</small>
                                </div>
                            </div>
                        </div>
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
                    <div id="soalKuis"></div>
                    <div class="mt-3 text-center">
                        <button class="btn btn-success" onclick="periksaJawaban()">Periksa Jawaban</button>
                    </div>
                    <div id="umpanBalikKuis" class="mt-2 text-center"></div>
                </div>
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
<!-- Tambahkan di bagian CSS -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

  #transliterasi {
    font-family: 'Poppins', sans-serif;
  }

  .card {
    border-radius: 15px !important;
    transition: transform 0.3s ease;
  }

  .card:hover {
    transform: translateY(-5px);
  }

  .shadow-inner {
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.05);
  }

  .form-control:focus {
    border-color: #7B241C;
    box-shadow: 0 0 0 0.25rem rgba(123, 36, 28, 0.25);
  }
</style>

<!-- Tambahkan di bagian JavaScript -->
<script>
  // Fungsi untuk animasi saat menyalin
  function copyToClipboard() {
    const text = document.getElementById('batakText').innerText;
    navigator.clipboard.writeText(text);

    // Animasi feedback
    const btn = event.target;
    btn.innerHTML = '<i class="bi bi-check2 me-2"></i>Tersalin!';
    btn.classList.remove('btn-primary');
    btn.classList.add('btn-success');

    setTimeout(() => {
      btn.innerHTML = '<i class="bi bi-clipboard me-2"></i>Salin Teks';
      btn.classList.remove('btn-success');
      btn.classList.add('btn-primary');
    }, 2000);
  }

  // Fungsi text-to-speech (opsional)

  // Fungsi transliterasi (contoh sederhana)
  function updateTransliterasi() {
    const latin = document.getElementById('latinInput').value;
    // Logika transliterasi disesuaikan dengan kebutuhan
    const batak = latin.toUpperCase(); // Contoh sederhana
    document.getElementById('batakText').innerText = batak;
  }
</script>

@push('scripts')
<script>
  /* ====== Peta Ina ni Surat (huruf dasar dengan vokal 'a' bawaan) ====== */
  const consonantBase = {
    'h': 'ᯂ', // Ha
    'k': 'ᯂ', // Ka
    'b': 'ᯅ', // Ba
    'p': 'ᯇ', // Pa
    'w': 'ᯋ', // Wa
    'g': 'ᯎ', // Ga
    'j': 'ᯐ', // Ja
    'd': 'ᯑ', // Da
    'r': 'ᯒ', // Ra
    't': 'ᯖ', // Ta
    's': 'ᯘ', // Sa
    'y': 'ᯛ', // Ya
    'ng': 'ᯝ', // Nga
    'n': 'ᯉ', // Na
    'm': 'ᯔ', // Ma
    'l': 'ᯞ', // La
    'ny': 'ᯠ' // Nya
  };

  /* ====== Vokal mandiri (bila di awal kata) ====== */
  const independentVowel = {
    'a': 'ᯀ',
    'i': 'ᯤ',
    'u': 'ᯥ',
    'e': 'ᯧ',
    'o': 'ᯮ' // opsional, variasi aksara daerah
  };

  /* ====== Anak ni Surat (diakritik) ====== */
  const diacritic = {
    'i': 'ᯪ',  // Haluaan
    'u': 'ᯮ',  // Haborotan
    'e': 'ᯩ',  // Hatadingan
    'o': 'ᯬ',  // Cikora
    'ou': 'ᯯ', // Bunyi diftong
    'h': 'ᯱ',  // Kejeringen
    'ng': 'ᯰ', // Hamisaran
    'pangolat': '᯲' // Tanda mati konsonan
  };

  const vowels = ['a','i','u','e','o'];

  /* ====== Fungsi utama transliterasi ====== */
  function transliterate(text) {
    text = (text || '').toLowerCase();
    let out = '';
    let i = 0;

    while (i < text.length) {
      let ch = text[i];

      // 1. Vokal mandiri di awal kata
      if ((i === 0 || text[i-1] === ' ') && independentVowel[ch]) {
        out += independentVowel[ch];
        i++;
        continue;
      }

      // 2. Deteksi digraf konsonan
      let cons = null;
      if (text.startsWith('ng', i) || text.startsWith('ny', i)) {
        cons = text.substr(i, 2);
      } else if (consonantBase[ch]) {
        cons = ch;
      }

      if (cons) {
        out += consonantBase[cons];
        i += cons.length;

        // 3. Cek vokal sesudah konsonan
        let vowel = null;
        if (text.startsWith('ou', i)) {
          vowel = 'ou';
        } else if (i < text.length && vowels.includes(text[i])) {
          vowel = text[i];
        }

        if (vowel) {
          if (vowel !== 'a') {
            out += diacritic[vowel] || '';
          }
          i += vowel.length;

          // 4. Cek konsonan akhir h/ng sebagai anak ni surat
          if (text.startsWith('ng', i) && (i + 2 >= text.length || !vowels.includes(text[i+2]))) {
            out += diacritic['ng'];
            i += 2;
          } else if (text[i] === 'h' && (i + 1 >= text.length || !vowels.includes(text[i+1]))) {
            out += diacritic['h'];
            i++;
          }

        } else {
          // 5. Tidak ada vokal sesudah konsonan → pangolat
          out += diacritic['pangolat'];
        }
        continue;
      }

      // 6. Karakter lain (spasi/tanda baca)
      out += ch;
      i++;
    }

    return out;
  }

  /* ====== Update hasil di UI ====== */
  function updateTransliterasi() {
    const latinText = document.getElementById('latinInput').value || '';
    document.getElementById('translitResult').innerText = transliterate(latinText.trim());
  }

  /* ====== Copy hasil ====== */
  function copyToClipboard() {
    const aksaraText = document.getElementById('translitResult').innerText;
    if (!navigator.clipboard) {
      alert('Clipboard API tidak tersedia di browser ini.');
      return;
    }
    navigator.clipboard.writeText(aksaraText).then(() => {
      alert('Teks Aksara Batak telah disalin!');
    });
  }

  /* ====== Tes cepat di console ====== */
  console.log('Horas ->', transliterate('horas'));      // ᯂᯬᯒᯘ᯲
  console.log('Serdadu ->', transliterate('serdadu')); // ᯘᯩᯒ᯲ᯑᯑᯮ
  console.log('Mangan ->', transliterate('mangan'));   // ᯔᯝᯉ᯲
</script>
@endpush



<!-- Quiz Section -->
<section id="quiz" class="page-section py-5" style="background: linear-gradient(to bottom, #f8f9fa, #e9ecef);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold" style="color: #7B241C; text-shadow: 1px 1px 2px rgba(0,0,0,0.1);">
                <i class="bi bi-puzzle-fill me-2"></i>Kuis Tebak Aksara
            </h2>
            <p class="lead text-muted">Uji pengetahuanmu tentang Aksara Batak!</p>
            <div class="progress mb-3" style="height: 8px;">
                <div id="progressBar" class="progress-bar bg-danger" role="progressbar" style="width: 0%"></div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-4">
                        <div id="soalKuis" class="text-center p-3">
                            <!-- Soal akan muncul di sini -->
                        </div>

                        <div class="mt-4 text-center">
                            <button id="btnPeriksa" class="btn btn-lg btn-success px-4" onclick="periksaJawaban()" disabled>
                                <i class="bi bi-check-circle me-2"></i>Periksa Jawaban
                            </button>
                            <button id="btnLanjut" class="btn btn-lg btn-primary px-4 d-none" onclick="tampilkanSoalBerikutnya()">
                                <i class="bi bi-arrow-right-circle me-2"></i>Lanjut
                            </button>
                        </div>

                        <div id="umpanBalikKuis" class="mt-3 text-center"></div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <div class="badge bg-dark text-white p-2">
                        Skor: <span id="skor" class="fw-bold">0</span>/<span id="totalSoal">0</span>
                    </div>
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
<style>
    /* Animasi khusus untuk kuis */
    .card {
        border-radius: 15px !important;
        transition: transform 0.3s ease;
        background-color: #fff9f0;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }

    .btn-outline-batak {
        border: 2px solid #7B241C;
        color: #7B241C;
        font-size: 1.2rem;
        min-width: 60px;
        transition: all 0.3s;
    }

    .btn-outline-batak:hover, .btn-outline-batak.active {
        background-color: #7B241C;
        color: white !important;
        transform: scale(1.05);
    }

    .aksara-display {
        font-size: 3rem;
        line-height: 1;
        margin: 15px 0;
        color: #7B241C;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .fade-in {
        animation: fadeIn 0.5s ease-out;
    }
</style>

<script>
    // Data kuis dengan pengacakan
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
            pilihan: ['ga', 'ha', 'ja', 'na']
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
        },
        // Soal baru yang ditambahkan
        {
            pertanyaan: 'Aksara Batak manakah yang melambangkan bunyi "ra"?',
            jawabanBenar: 'ᯙ',
            pilihan: ['ᯚ', 'ᯙ', 'ᯛ', 'ᯘ']
        }
    ];

    // Variabel state kuis
    let nomorSoal = 0;
    let jawabanDipilih = null;
    let skor = 0;
    let soalAcak = [];

    // Fungsi untuk mengacak array (Fisher-Yates shuffle agar lebih stabil)
    function acakArray(array) {
        let currentIndex = array.length, randomIndex;
        while (currentIndex !== 0) {
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex--;
            [array[currentIndex], array[randomIndex]] = [array[randomIndex], array[currentIndex]];
        }
        return array;
    }

    // Inisialisasi kuis
    function mulaiKuis() {
        nomorSoal = 0; // reset nomor soal
        skor = 0;      // reset skor
        soalAcak = acakArray([...daftarSoal]);
        document.getElementById('totalSoal').textContent = soalAcak.length;
        document.getElementById('skor').textContent = skor;
        tampilkanSoal();
    }

    // Tampilkan soal
    function tampilkanSoal() {
        if (nomorSoal >= soalAcak.length) {
            // Kuis selesai
            const persentase = Math.round((skor / soalAcak.length) * 100);
            let pesan = '';

            if (persentase >= 80) {
                pesan = `<div class="alert alert-success fade-in">
                            <h4><i class="bi bi-trophy-fill me-2"></i>Luar Biasa!</h4>
                            <p>Anda benar ${skor} dari ${soalAcak.length} soal (${persentase}%)</p>
                            <p>Pengetahuan Anda tentang Aksara Batak sangat baik!</p>
                        </div>`;
            } else if (persentase >= 50) {
                pesan = `<div class="alert alert-info fade-in">
                            <h4><i class="bi bi-emoji-smile-fill me-2"></i>Bagus!</h4>
                            <p>Anda benar ${skor} dari ${soalAcak.length} soal (${persentase}%)</p>
                            <p>Terus belajar untuk meningkatkan pemahaman!</p>
                        </div>`;
            } else {
                pesan = `<div class="alert alert-warning fade-in">
                            <h4><i class="bi bi-emoji-frown-fill me-2"></i>Belum berhasil</h4>
                            <p>Anda benar ${skor} dari ${soalAcak.length} soal (${persentase}%)</p>
                            <p>Jangan menyerah, coba lagi!</p>
                        </div>`;
            }

            document.getElementById('soalKuis').innerHTML = pesan;
            document.getElementById('btnPeriksa').classList.add('d-none');
            document.getElementById('btnLanjut').classList.add('d-none');
            return;
        }

        let soal = soalAcak[nomorSoal];
        let pilihanJawaban = '';

        // Acak urutan pilihan jawaban
        const pilihanAcak = acakArray([...soal.pilihan]);

        pilihanAcak.forEach(pilihan => {
            pilihanJawaban += `
                <button class="btn btn-outline-batak m-2 p-3"
                        onclick="pilihJawaban('${pilihan}', event)"
                        data-bs-toggle="tooltip"
                        title="Pilih jawaban ini">
                    ${pilihan}
                </button>`;
        });

        // Update progress bar
        const progress = ((nomorSoal) / soalAcak.length) * 100;
        document.getElementById('progressBar').style.width = `${progress}%`;

        // Tampilkan soal
        document.getElementById('soalKuis').innerHTML = `
            <div class="fade-in">
                <h3 class="mb-4">Soal ${nomorSoal + 1}</h3>
                <p class="fs-5">${soal.pertanyaan}</p>
                <div class="d-flex flex-wrap justify-content-center">${pilihanJawaban}</div>
            </div>
        `;

        // Reset tombol
        document.getElementById('btnPeriksa').disabled = true;
        jawabanDipilih = null;
        document.getElementById('btnPeriksa').classList.remove('d-none');
        document.getElementById('btnLanjut').classList.add('d-none');
        document.getElementById('umpanBalikKuis').innerHTML = '';
    }

    // Pilih jawaban
    function pilihJawaban(jawaban, event) {
        // Hapus active dari semua tombol
        document.querySelectorAll('.btn-outline-batak').forEach(btn => {
            btn.classList.remove('active');
        });

        // Tambahkan active ke tombol yang dipilih
        event.target.classList.add('active');

        jawabanDipilih = jawaban;
        document.getElementById('btnPeriksa').disabled = false;
    }

    // Periksa jawaban
    function periksaJawaban() {
        if (jawabanDipilih === null) return;

        let soal = soalAcak[nomorSoal];
        let umpanBalik = document.getElementById('umpanBalikKuis');

        if (jawabanDipilih === soal.jawabanBenar) {
            umpanBalik.innerHTML = `
                <div class="alert alert-success fade-in">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    <strong>Benar!</strong> ${soal.jawabanBenar} adalah jawaban yang tepat.
                </div>`;
            skor++;
        } else {
            umpanBalik.innerHTML = `
                <div class="alert alert-danger fade-in">
                    <i class="bi bi-x-circle-fill me-2"></i>
                    <strong>Salah.</strong> Jawaban yang benar adalah <strong>${soal.jawabanBenar}</strong>.
                </div>`;
        }

        // Update skor
        document.getElementById('skor').textContent = skor;

        // Tampilkan tombol lanjut
        document.getElementById('btnPeriksa').classList.add('d-none');
        document.getElementById('btnLanjut').classList.remove('d-none');
    }

    // Lanjut ke soal berikutnya
    function tampilkanSoalBerikutnya() {
        nomorSoal++;
        document.getElementById('btnPeriksa').classList.remove('d-none');
        document.getElementById('btnLanjut').classList.add('d-none');
        document.getElementById('umpanBalikKuis').innerHTML = '';
        tampilkanSoal();
    }

    // Mulai kuis ketika halaman dimuat
    window.addEventListener('DOMContentLoaded', mulaiKuis);
</script>

@endsection
