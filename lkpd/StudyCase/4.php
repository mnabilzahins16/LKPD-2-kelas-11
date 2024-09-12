<?php 
    $angka = isset($_POST['angka']) ? $_POST['angka'] : 0;
    $hasil = '';

    function isPrima($i) {
        if ($i < 1) return false;
        for ($n = 2; $n <= sqrt($i); $n++) {
            if ($i % $n == 0) return false;
        }
        return true;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
        if (is_numeric($angka)) {
            if (isPrima($angka)) {
                $hasilAkhir = "$angka adalah nomor prima";
            } else {
                $hasilAkhir = "$angka bukan nomor prima";
            }
        } else {
            $hasilAkhir = "Harap masukan angka yang valid";
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
    <form action="" method="post">
        <label for="angka">Masukkan angka:</label>
        <input type="number" name="angka" id="angka">
        <button type="submit">Kirim</button>
    </form>
    <div class="hasilAkhir">
        <?= $hasilAkhir ?>
    </div>
</body>
</html>