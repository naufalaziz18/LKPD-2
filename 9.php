<?php
// Fungsi untuk mencari jenis koin yang bisa digunakan untuk membayar sejumlah uang
function cariJenisKoin($jumlahUang) {
    // Array untuk menyimpan jenis koin yang bisa digunakan
    $jenisKoin = [];

    // Cek jika jumlah uang bisa dibayar dengan koin Rp. 1.000
    if ($jumlahUang >= 1000) {
        // Tambahkan koin Rp. 1.000 ke array jenis koin
        $jenisKoin[] = '1.000';
        // Kurangi jumlah uang dengan nilai koin Rp. 1.000
        $jumlahUang -= 1000;
    }

    // Cek jika jumlah uang bisa dibayar dengan koin Rp. 500
    if ($jumlahUang >= 500) {
        // Tambahkan koin Rp. 500 ke array jenis koin
        $jenisKoin[] = '500';
        // Kurangi jumlah uang dengan nilai koin Rp. 500
        $jumlahUang -= 500;
    }

    // Cek jika jumlah uang bisa dibayar dengan koin Rp. 200
    if ($jumlahUang >= 200) {
        // Tambahkan koin Rp. 200 ke array jenis koin
        $jenisKoin[] = '200';
        // Kurangi jumlah uang dengan nilai koin Rp. 200
        $jumlahUang -= 200;
    }

    // Cek jika jumlah uang bisa dibayar dengan koin Rp. 100
    if ($jumlahUang >= 100) {
        // Tambahkan koin Rp. 100 ke array jenis koin
        $jenisKoin[] = '100';
        // Kurangi jumlah uang dengan nilai koin Rp. 100
        $jumlahUang -= 100;
    }

    // Kembalikan array jenis koin yang bisa digunakan
    return $jenisKoin; 
}

// Jumlah uang yang ingin dibayar
$uang = 1100;

// Cari jenis koin yang bisa digunakan untuk membayar uang
$hasil = cariJenisKoin($uang);

// Tampilkan jenis koin yang bisa digunakan
echo "Jenis koin yang bisa digunakan untuk Rp{$uang}: <br>";

// Looping untuk menampilkan jenis koin
foreach ($hasil as $koin) {
    echo "<ul>";
    echo "<li>Rp. {$koin} </li>";
    echo "</ul>";
}
?>