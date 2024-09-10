<?php 
// Loop pertama untuk membuat 4 baris
for ($baris = 1; $baris <= 4; $baris++) {
    
    // Loop dalam untuk membuat 8 kolom dengan karakter "*"
    for ($kolom = 1; $kolom <= 8; $kolom++) {
        echo "*"; // Mencetak karakter "*" dalam satu baris
    }
    
    // Menambahkan baris baru setelah 8 karakter "*" dicetak
    echo "<br>";
}

echo "<br>"; // Menambahkan baris kosong untuk memisahkan dua bagian output

// Loop kedua, identik dengan loop pertama, untuk mencetak lagi 4 baris
for ($baris = 1; $baris <= 4; $baris++) {
    
    // Loop dalam untuk mencetak 8 karakter "*" per baris
    for ($kolom = 1; $kolom <= 8; $kolom++) {
        echo "*"; // Mencetak karakter "*" dalam satu baris
    }
    
    // Menambahkan baris baru setelah 8 karakter "*" dicetak
    echo "<br>";
}
?>
