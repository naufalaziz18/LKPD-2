<?php

// Menyimpan kalimat ke dalam variabel $hbd
$hbd = "Selamat Ulang Tahun yang ke-17!";

// Memeriksa apakah ada simbol khusus dalam string $hbd menggunakan preg_match_all digunakan untuk mencari simbol khusus dalam string.
if (preg_match_all('/[\'^£$%&*!()}{@#~?><>,|=_+¬-]/', $hbd, $srt)) {
    // Jika simbol ditemukan, tampil teks asli
    echo "Teks : $hbd";
    echo "<br>";
      // Mengubah array menjadi kalimat 
    echo "Simbol yang terdapat pada kalimat: " . implode(', ', $srt[0]);
} else {
   // Jika tidak ada simbol yang ditemukan, tampilkan teks asli
   echo "Teks : $hbd";
   echo "<br>";
   
   // Menampilkan pesan bahwa tidak terdapat simbol pada kalimat
   echo "Tidak terdapat simbol pada kalimat";
}
?>