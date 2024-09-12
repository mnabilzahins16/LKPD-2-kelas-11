<?php
$array1 = ["PPLG", "pplg", "HTL", "htl", "KLN", "kln", "DKV", "dkv"];

// array_filter() adalah sebuah metode untuk menghilangkan elemen yang bernilai false
// function adalah sebuah fungsi yang dijalankan
$kalimat_array = array_filter($array1, function ($value) {
    // ctype_upper() adalah sebuah fungsi untuk mengecek apakah sebuah karakter merupakan huruf kapital
    return ctype_upper($value);
});

// array_unique() adalah sebuah metode untuk menghilangkan kemunculan elemen yang sama
$unique_array = array_unique($kalimat_array);

// ksort() adalah sebuah metode untuk mengurutkan sebuah array secara yang terkecil ke yang terbesar
ksort($unique_array);

// foreach adalah sebuah perulangan untuk mengulang sebuah array
foreach ($unique_array as $value) {
    // \n adalah karakter new line
    echo $value . "," . "\n";
}