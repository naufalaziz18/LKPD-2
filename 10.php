<?php
// Array asosiatif yang berisi jawaban benar
$jawabanBenar = ['a', 'b', 'c', 'a', 'c', 'b', 'a', 'a', 'a', 'a'];

// Array yang berisi jawaban siswa
$jawabanSiswa = ['a', 'b', 'c', 'a', 'b', 'b', 'a', 'a', 'a', 'a'];

// Nama siswa
$namaSiswa = 'Nopal';

// Inisialisasi jumlah jawaban benar dan salah
$jumlahBenar = 0; // Perlu diubah menjadi 0, karena akan dihitung dari awal
$jumlahSalah = 0; // Perlu diubah menjadi 0, karena akan dihitung dari awal

// Looping untuk membandingkan jawaban siswa dengan jawaban benar
for ($i = 0; $i < count($jawabanBenar); $i++) {
    // Cek jika jawaban siswa sama dengan jawaban benar
    if ($jawabanSiswa[$i] === $jawabanBenar[$i]) {
        // Jika sama, maka tambahkan 1 ke jumlah benar
        $jumlahBenar++;
    } else {
        // Jika tidak sama, maka tambahkan 1 ke jumlah salah
        $jumlahSalah++;
    }
}

// Tampilkan hasil
echo "Nama: {$namaSiswa} <br> Jumlah Benar: {$jumlahBenar} <br> Jumlah Salah: {$jumlahSalah}";
?>