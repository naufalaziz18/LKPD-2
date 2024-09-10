<?php
// Array multidimensi asosiatif yang berisi daftar belanjaan dengan informasi nama, harga, dan jumlah beli
$barang = [
    [
        'nama' => 'Pasta Gigi',
        'harga' => 18000,
        'jumlahBeli' => 2,
    ],
    [
        'nama' => 'Sabun Mandi',
        'harga' => 5000,
        'jumlahBeli' => 5,
    ],
    [
        'nama' => 'Aloe Vera Sheet Mask',
        'harga' => 15000,
        'jumlahBeli' => 10,
    ],
];

// Variabel untuk menyimpan total harga
$totalHar = 0;

// Menampilkan judul daftar belanjaan
echo "Daftar belanjaan :";
echo "<ol>";

// Looping untuk menghitung subtotal dan menampilkan daftar belanjaan
foreach ($barang as $item) {
    // Menghitung subtotal dengan mengalikan harga dan jumlah beli
    $subTot = $item['harga'] * $item['jumlahBeli'];
    
    // Menambahkan subtotal ke total harga
    $totalHar += $subTot;
    
    // Mengformat subtotal dengan menggunakan tanda titik sebagai pemisah ribuan
    $formatSub = number_format($subTot, 0, ',', '.');
    
    // Menampilkan daftar belanjaan dengan nama, jumlah beli, dan subtotal
    echo "<li>{$item['nama']} ({$item['jumlahBeli']}) : Rp. {$formatSub}</li>";
}

// Menutup tag ol
echo "</ol>";

// Mengformat total harga dengan menggunakan tanda titik sebagai pemisah ribuan
$formatTot = number_format($totalHar, 0, ',', '.');

// Menampilkan total harga yang harus dibayar
echo "Total harga yang harus Anda bayar adalah Rp. {$formatTot}\n";
?>