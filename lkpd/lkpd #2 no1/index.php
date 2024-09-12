<?php
// $_SERVER adalah arrya yang berisikan informasi yang diterima oleb server
// REQUEST_METHOD adalah method yang dijadikan sebuah permintaan menggunakan sebuah metode
// POST adalah sebuah metode untuk menangani permintaan POST yang dikirim dari sebuah HTML
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // method $_POST adalah sebuah metode untuk menangani permintaan POST yang dikirim dari sebuah HTML
    $teks = $_POST['teks'];

    // method preg_match_all() adalah sebuah metode untuk mencari semua kemunculan dari sebuah pola dalam sebuah teks.
    // method preg_match() adalah sebuah metode untuk mencari sebuah kemunculan dari sebuah pola dalam sebuah teks.
    // regex regular expression adalah sebuah pola yang digunakan untuk mencari sebuah kemunculan
    preg_match_all('/[^a-zA-Z0-9\s]/', $teks, $matches);

    // method count() adalah sebuah metode untuk menghitung jumlah karakter dari sebuah array.
    // method unique() adalah sebuah metode untuk menghilangkan kemunculan karakter yang sama dari sebuah array.
    if (count($matches[0]) > 0) {
        $uniqueSymbols = array_unique($matches[0]);
        // method implode() adalah sebuah metode untuk menggabungkan karakter dari sebuah array menjadi sebuah string.
        $hasil = "Karakter yang terdapat pada kalimat : " . implode(', ', $uniqueSymbols);
    } else {
        $hasil = "Tidak terdapat simbol pada kalimat";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- method $_POST adalah sebuah metode untuk menangani permintaan POST yang dikirim dari sebuah HTML -->
    <form action="" method="post">
        <label for="">Masukkan teks:</label>
        <input type="text" name="teks" id="teks" required>
        <input type="submit" value="Submit">

        <div class="hasil">
            <?= $hasil; ?>
        </div>
    </form>
</body>
</html>