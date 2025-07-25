/*!
 * Start Bootstrap - Creative v7.0.7 (https://startbootstrap.com/theme/creative)
 * Copyright 2013-2023 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-creative/blob/master/LICENSE)
 */
//
// Scripts
//

window.addEventListener("DOMContentLoaded", (event) => {
    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector("#mainNav");
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove("navbar-shrink");
        } else {
            navbarCollapsible.classList.add("navbar-shrink");
        }
    };

    // Shrink the navbar
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener("scroll", navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector("#mainNav");
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: "#mainNav",
            rootMargin: "0px 0px -40%",
        });
    }

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector(".navbar-toggler");
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll("#navbarResponsive .nav-link")
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener("click", () => {
            if (window.getComputedStyle(navbarToggler).display !== "none") {
                navbarToggler.click();
            }
        });
    });

    // Activate SimpleLightbox plugin for portfolio items
    new SimpleLightbox({
        elements: "#portfolio a.portfolio-box",
    });
});

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
        });
    });
});

// Inisialisasi Canvas
const canvas = document.getElementById("canvasAksara");
const ctx = canvas ? canvas.getContext("2d") : null;

if (canvas) {
    let drawing = false;

    canvas.addEventListener("mousedown", startDrawing);
    canvas.addEventListener("mouseup", stopDrawing);
    canvas.addEventListener("mouseout", stopDrawing);
    canvas.addEventListener("mousemove", draw);

    document
        .getElementById("clearCanvas")
        .addEventListener("click", function () {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        });

    function startDrawing(e) {
        drawing = true;
        draw(e);
    }

    function stopDrawing() {
        drawing = false;
        ctx.beginPath();
    }

    function draw(e) {
        if (!drawing) return;

        ctx.lineWidth = 5;
        ctx.lineCap = "round";
        ctx.strokeStyle = "#000";

        ctx.lineTo(e.offsetX, e.offsetY);
        ctx.stroke();
        ctx.beginPath();
        ctx.moveTo(e.offsetX, e.offsetY);
    }
}

// Data mapping (Ini HANYA contoh, perlu diperbaiki!)
const mapping = {
    a: "ᯀ",
    b: "ᯅ",
    c: "…",
    d: "…",
    e: "…",
    f: "…",
    g: "…",
    h: "…",
    i: "ᯤ",
    j: "…",
    k: "…",
    l: "…",
    m: "…",
    n: "ᯐ",
    o: "…",
    p: "ᯇ",
    q: "…",
    r: "…",
    s: "ᯘ",
    t: "ᯖ",
    u: "ᯥ",
    v: "…",
    w: "…",
    x: "…",
    y: "…",
    z: "…",
    " ": " ", // Spasi
};

// Transliterasi
const formTransliterasi = document.getElementById("formTransliterasi");
if (formTransliterasi) {
    formTransliterasi.addEventListener("submit", function (e) {
        e.preventDefault();
        const teksLatin = document
            .getElementById("teksLatin")
            .value.toLowerCase();
        let hasil = "";

        for (let i = 0; i < teksLatin.length; i++) {
            const char = teksLatin[i];
            hasil += mapping[char] || char;
        }

        document.getElementById("hasilTransliterasi").textContent = hasil;
    });

    document
        .getElementById("salinHasil")
        .addEventListener("click", function () {
            const hasilTransliterasi =
                document.getElementById("hasilTransliterasi").textContent;
            navigator.clipboard
                .writeText(hasilTransliterasi)
                .then(() => {
                    alert("Hasil transliterasi berhasil disalin!");
                })
                .catch((err) => {
                    console.error("Gagal menyalin: ", err);
                });
        });
}

// Tulis Nama
const formNama = document.getElementById("formNama");
if (formNama) {
    formNama.addEventListener("submit", function (e) {
        e.preventDefault();
        const namaLatin = document
            .getElementById("namaLatin")
            .value.toLowerCase();
        let hasil = "";

        for (let i = 0; i < namaLatin.length; i++) {
            const char = namaLatin[i];
            hasil += mapping[char] || char;
        }

        document.getElementById("hasilNama").textContent = hasil;
    });

    document.getElementById("salinNama").addEventListener("click", function () {
        const hasilNama = document.getElementById("hasilNama").textContent;
        navigator.clipboard
            .writeText(hasilNama)
            .then(() => {
                alert("Nama berhasil disalin!");
            })
            .catch((err) => {
                console.error("Gagal menyalin: ", err);
            });
    });
}

// Quiz
const formQuiz = document.getElementById("formQuiz");
if (formQuiz) {
    formQuiz.addEventListener("submit", function (e) {
        e.preventDefault();
        let skor = 0;
        // Periksa jawaban
        if (document.querySelector('input[name="soal1"]:checked')) {
            if (
                document.querySelector('input[name="soal1"]:checked').value ===
                "ᯀ"
            ) {
                skor++;
            }
        }

        // ... tambahkan logika untuk soal lain

        document.getElementById("hasilQuiz").textContent =
            "Skor Anda: " + skor + " dari [Jumlah Soal]";
    });
}
