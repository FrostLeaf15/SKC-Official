function formatInput(input) {
    // Hapus karakter selain angka
    let value = input.value.replace(/\D/g, "");

    // Potong ke 13 digit maksimal
    value = value.slice(0, 20);

    // Tambahkan strip setiap 4 angka
    input.value = value.replace(/(\d{4})(?=\d)/g, "$1-");
}

// Alert saat input data
function alertInput(fieldName) {
    alert("Anda sedang mengisi kolom: " + fieldName);
}

// Alert konfirmasi saat form dikirim
function confirmSubmission() {
    return confirm("Apakah Anda yakin ingin mengirim data ini?");
}

// Pilih elemen navbar
const navbar = document.querySelector(".navbar");

// Fungsi untuk menangani scroll
function handleScroll() {
    if (window.scrollY > 0) {
        navbar.classList.add("fixed-top", "mx-2"); // Tambahkan class 'fixed' saat halaman di-scroll
    } else {
        navbar.classList.remove("fixed-top", "mx-2"); // Hapus class 'fixed' saat di posisi paling atas
    }
}

// Tambahkan event listener untuk scroll
window.addEventListener("scroll", handleScroll);
