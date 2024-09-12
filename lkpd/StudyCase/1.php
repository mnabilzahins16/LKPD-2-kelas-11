<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $teks = $_POST['teks'];
    preg_match_all('/[$a-zA-Z]/', $teks, $matches);

    if (count($matches[0]) > 0) {
        $uniqueSymbols = $matches[0];
        $yangDiPisah = "Karakter yang terdapat pada kalimat : " . implode(', ', $uniqueSymbols);
    } else {
        $yangDiPisah = "Tidak sesuai";
    }

    $hasilAkhir = "Teks yang tampil adalah : " . $teks;

    $hurufDicari = "Huruf dicari adalah 'a' dan ada " . substr_count($teks, 'a');
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
    <form action="" method="POST">
        <label for="teks">Masukan Teks : </label>
        <input type="text" name="teks" id="teks">
        <button type="submit">Kirim</button>
    </form>
    <div class="inputHasil">
        <?= $hasilAkhir ?>
        <br>
        <?= $hurufDicari ?>
        <br>
        <?= $yangDiPisah ?>
        <br>
        <?= $hasil ?>
    </div>
</body>
</html>