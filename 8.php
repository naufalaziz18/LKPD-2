<?php
// Array asosiatif yang berisi data jurusan
$dataJurusan = ["PPLG", "HTL", "KLN", "PMN", "pplg", "htl"];

// Menggunakan fungsi array_unique untuk menghilangkan duplikat data jurusan
// dan array_map untuk mengubah semua data menjadi huruf besar menggunakan fungsi strtoupper
$uniqueJurusan = array_unique(array_map('strtoupper', $dataJurusan));

// Menampilkan hasil array yang telah dihilangkan duplikatnya
print_r($uniqueJurusan);
?>