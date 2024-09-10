<?php
// Fungsi untuk memotong kalimat menjadi 50 karakter dan menambahkan tiga titik di akhir
function potongKalimat($kalimat) {
    // Menghitung jumlah karakter dalam kalimat
    $jumlahKarakter = strlen($kalimat);
    
    // Memotong kalimat menjadi 50 karakter dan menambahkan tiga titik di akhir
    $kalimat = substr($kalimat, 0, 50) . "...";
    
    // Mengembalikan kalimat yang telah dipotong
    return $kalimat;
};

$kalimatPanjang = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.";

// Menampilkan kalimat awal dan kalimat yang telah dipotong
echo "<b> Kalimat awal : </b>" . potongKalimat($kalimatPanjang);
?>