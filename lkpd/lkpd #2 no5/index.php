<?php

// array index adalah sebuah array yang berisi indeks dan elemen-nya
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

// array_merge() adalah sebuah metode untuk menggabungkan dua buah array
$merge = array_merge($bil1, $bil2);

// array_unique() adalah sebuah metode untuk menghilangkan kemunculan elemen yang sama dari sebuah array
$unique = array_unique($merge);

// arsort() adalah sebuah metode untuk mengurutkan sebuah array secara yang terbesar ke yang terkecil
arsort($unique);

echo "Hasil : ";

// implode() adalah sebuah metode untuk menggabungkan karakter dari sebuah array menjadi sebuah string
echo implode(', ', $unique);