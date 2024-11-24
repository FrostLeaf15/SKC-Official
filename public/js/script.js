function formatInput(input) {
    // Hapus karakter selain angka
    let value = input.value.replace(/\D/g, '');
    
    // Potong ke 13 digit maksimal
    value = value.slice(0, 20);
    
    // Tambahkan strip setiap 4 angka
    input.value = value.replace(/(\d{4})(?=\d)/g, '$1-');
}

// Alert saat input data
function alertInput(fieldName) {
    alert("Anda sedang mengisi kolom: " + fieldName);
}

// Alert konfirmasi saat form dikirim
function confirmSubmission() {
    return confirm("Apakah Anda yakin ingin mengirim data ini?");
}
