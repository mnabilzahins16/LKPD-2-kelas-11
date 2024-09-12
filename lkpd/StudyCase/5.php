<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $message = $_POST['kata'];
        $hasil = "Kata yang anda masukan adalah <b>$message</b>, dan memiliki <b>". strlen($message) . "</b> huruf.";
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
    <form action="" method="post">
        <label for="kata">Masukkan kata:</label>
        <input type="text" name="kata" id="kata">
        <button type="submit">Kirim</button>
    </form>
    <div class="hasilAkhir">
        <?= $hasil ?>
    </div>
</body>
</html>