<?php
// Membuat array $angka1 dengan satu elemen, yaitu 90
$angka1 = [90];

// Membuat array $angka2 dengan beberapa elemen
$angka2 = [1, 2, 3, 5, 6, 9, 10, 15, 18];

// Memulai loop pertama untuk setiap elemen dalam $angka2
foreach ($angka2 as $a2) {
    
    // Memulai loop kedua untuk setiap elemen dalam $angka1 
    foreach ($angka1 as $a1) {
        
        // Melakukan pembagian $a1 (yaitu 90) dengan $a2 
        $hasil = $a1 / $a2;
        
        // Menampilkan hasil pembagian dalam format "90 : a2 = hasil"
        echo "$a1 : $a2 = $hasil";
    }
    
    echo "<br>";
}
?>
