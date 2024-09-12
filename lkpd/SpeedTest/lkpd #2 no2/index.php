<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="teks">Masukan jumlah uang:</label>
        <input type="number" id="pulus" name="hitungAngka" required>
        <button type="submit">Cek Jumlah</button>
    </form>
</body>
</html>
<?php 

function Ratusan($uang) {
    $arr = [];
    $koinRatusan = [100000, 50000, 20000, 10000, 5000, 2000, 1000];

    foreach ($koinRatusan as $nilai) {
        $jumlah = intdiv($uang, $nilai);
        if ($jumlah > 0) {
            $arr[] = "Rp. " . number_format($nilai, 0, '.', '.') . " sebanyak " . $jumlah . " lembar";
            $uang -= $nilai * $jumlah;
        }
    }

    return $arr;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uang = intval($_POST['hitungAngka']);
    $arr = Ratusan($uang);

    echo "Jenis dan jumlah pecahan untuk Uang Rp. " . number_format($uang, 0, '.', '.') . " : <br>";
    echo "<ul>";
    foreach ($arr as $value) {
        echo "<li>$value</li>";
    }
    echo "</ul>";
}

?>