const contactForm = document.getElementById("contactForm");
const formFeedback = document.getElementById("formFeedback");

const namaInput = document.getElementById("nama");
const emailInput = document.getElementById("email");
const nohpInput = document.getElementById("nohp");
const pesanInput = document.getElementById("pesan");
const nimInput = document.getElementById("nim");
const tanggalInput = document.getElementById("tanggal");


contactForm.addEventListener("submit", (event) => {
    event.preventDefault();
    formFeedback.className = "form-feedback-error";
    const nama = namaInput.value.trim();
    if (nama.length < 3 || nama.length > 50) {
        formFeedback.textContent = "Nama lengkap harus diisi 3 sampai 50 karakter.";
        return;
    }

    const email = emailInput.value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        formFeedback.textContent = "Masukkan alamat email yang valid.";
        return;
    }

   const nohp = nohpInput.value.trim();
    if (nohp.length < 3 || nohp.length > 15) {
        formFeedback.textContent = "No.Hp harus diisi";
        return;
    }

    const pesan = pesanInput.value.trim();
   if (pesan.length < 3 || pesan.length > 401 ) {
        formFeedback.textContent = "Pesan harus diisi";
        return;
    }

    const nim = nimInput.value.trim();
    if (nim.length < 3 || nim.length > 10) {
        formFeedback.textContent = "NIM harus diisi 10 karakter.";
        return;
    }

    const ApakahPanjiGanteng = document.querySelector(
        'input[name="Apakah_Panji_Ganteng?"]:checked',
    );
    if (!ApakahPanjiGanteng) {
        formFeedback.textContent = "Pilih jenis pesan.";
        return;
    }

    const tanggal = tanggalInput.value;
    if (tanggal === "") {
        formFeedback.textContent = "Tanggal kunjungan harus diisi.";
        return;
    }

    formFeedback.textContent = "Form berhasil divalidasi.";
    formFeedback.className = "form-feedback-success";
});

contactForm.addEventListener("reset", () => {
    formFeedback.textContent = "";
});

contactForm.addEventListener("input", () => {
    formFeedback.textContent = "";
});