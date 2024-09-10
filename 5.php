<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

// menggabungkan array dan menghilangkan duplikat
$arr = array_merge($bil1,$bil2);
$arr = array_unique($arr);

rsort($arr);
// mencetak hasil untuk menggabungkan elemen-elemen dalam sebuah array menjadi sebuah string tunggal.
echo "hasil : ". implode(",", $arr);
?>