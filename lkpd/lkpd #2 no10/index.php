<?php
function checkJawaban($nama, ...$arrJawaban)
{
    $jawaban = ['A', 'D', 'C', 'C', 'B', 'A', 'E', 'B', 'A', 'E'];
    $arrBenar = []; //Array untuk menyimpan hasil penilaian jawaban

    //Mengecek jawaban yang diberikan dengan jawaban yang benar
    foreach ($jawaban as $key => $value) {
        if ($arrJawaban[$key] == $value) {
            $arrBenar[$key] = 1; //Jawaban benar
        } else {
            $arrBenar[$key] = 0; //Jawaban salah
        }
    }

    // Menampilkan hasil
    echo "Nama : $nama <br>";
    echo "Jawaban yang benar : <b>" . count(array_keys($arrBenar, 1)) . "</b><br>";
    echo "Jawaban yang benar : <b>" . count(array_keys($arrBenar, 0)) . "</b><br>";
}

checkJawaban('Nabil', 'B', 'A', 'C', 'C', 'E', 'B', 'E', 'B', 'A', 'E');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Pilih jawaban:</label>
        .jawaban
    </form>
</body>
</html> 