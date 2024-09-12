<?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $teks = @$_POST['text'];
        
        preg_match_all('/[^a-zA-Z\s]/', $teks, $match);
        
        if (count($match[0]) > 0) {
            $simbolUnik = array_unique($match[0]);
            echo "Simbol istimewa dari teks adalah : <b>". implode(' , ', $simbolUnik) . "</b>";
        } else {
            echo "Tidak ada simbol unik";
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
    <form action="" method="POST">
        <label for="">Masukkan nama: </label>
        <input type="text" name="text" id="text">
        <button type="submit">Kirim</button>
    </form>
    <div class="">
        <?= $teks; ?>
    </div>
</body>
</html>