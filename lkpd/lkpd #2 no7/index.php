<?php

// function wrapText($text) adalah sebuah fungsi yang berfungsi untuk mengecilkan sebuah teks
function wrapText($text)
{
    // str_split() adalah sebuah metode untuk mengecilkan sebuah teks
    $count = str_split($text);

    // count() adalah sebuah metode untuk menghitung karakter dalam sebuah teks
    if (count($count) > 50) {
        // substr() adalah sebuah metode untuk memotong sebuah teks
        $text = substr($text, 0, 50);
        // .= adalah sebuah operator untuk menambahkan sebuah karakter ke sebuah teks
        $text .= "...";
    }

    echo $text;
}

$kata = "Lorem ipsum dolor sit memet, consectetur adipiscing elit. Nulla vel auctor turpis. Donec vel erat sollicitudin, accumsan lectus eget, blandit orci. Integer ut erat ipsum. Sed porta at erat vitae ornare. Aenean auctor, lacus ac condimentum ultricies, mi enim lobortis nibh, sit amet laoreet arcu felis nec quam. Cras euismod ex magna, in scelerisque urna laoreet quis. Aliquam tincidunt lacus sed tempor dapibus. Morbi sit amet dolor hendrerit, sollicitudin purus non, blandit sem.";

echo "<br>";

echo "<b>Kalimat awal : </b> " . $kata . "</br>";

// wrapText($kata) adalah sebuah fungsi yang berfungsi untuk mengecilkan sebuah teks
wrapText($kata);