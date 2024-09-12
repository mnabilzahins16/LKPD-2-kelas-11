<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pembelian = 130000;

    // date("l") adalah sebuah metode untuk menampilkan sebuah tanggal
    // date() adalah sebuah metode untuk menangani sebuah tanggal
    $day = date("l");

    $totalBayar = 0;

    if ($pembelian > 100000) {
        // == adalah sebuah operator untuk membandingkan dua buah nilai
        // if adalah sebuah percabangan
        if ($day == "Tuesday") {
            $totalBayar = ($pembelian - ($pembelian * 0.07));
            // -= adalah sebuah operator untuk mengurangi sebuah nilai
            $totalBayar -= ($pembelian - ($pembelian * 0.05));
        } else {
            $totalBayar = ($pembelian - ($pembelian * 0.07));
        }
    } else {
        $totalBayar = $pembelian;
    }

    echo "Tanggal hari ini: " . $day . "<br>";
    // number_format() adalah sebuah metode untuk menampilkan sebuah angka
    echo "Total pembelanjaan: " . number_format($pembelian, 0, '.', '.') . "<br>";
    echo "Total yang harus dibayar: " . number_format($totalBayar, 0, '.', '.');
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
        <div class="">
            <label for="">Pilih hari: </label>
            <select name="days" id="days">
                <option value="sunday">Sunday</option>
                <option value="monday">Monday</option>
                <option value="tuesday">Tuesday</option>
                <option value="wednesday">Wednesday</option>
                <option value="thursday">Thursday</option>
                <option value="friday">Friday</option>
                <option value="saturday">Saturday</option>
            </select>
        </div>
        <div class="">
            <label for="">Masukkan nominal uang anda: </label>
            <input type="number", name="nominal", id="nominal", required></input>
        </div>
        <button type="submit">Submit</button>
        <div class="hasil">

        </div>
    </form>
</body>
</html>