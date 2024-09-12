<?php 
    if (isset($_POST['kirim'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $aksi = $_POST['aksi'];
        switch ($aksi) {
            case 'tambah':
                $output = $bil1 + $bil2;
                break;
            case 'kurang':
                $output = $bil1 - $bil2;
                break;
            case 'kali':
                $output = $bil1 * $bil2;
                break;
            case 'bagi':
                $output = $bil1 / $bil2;
                break;            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    
</head>
<body>
    <form method="POST" >
        <div class="kal">
        <h1>Kalkulator Sederhana</h1>
        <hr>
        <p>Bilangan Pertama :</p>
        <input class="FormInput" type="number" name="bil1" value="0">
        <p>Bilangan Kedua :</p>
        <input class="FormInput" type="number" name="bil2" value="0">
        <p>Aksi</p>
        <select class="FormSelect" name="aksi">
            <option value="tambah">Penjumlahan</option>
            <option value="kurang">Pengurangan</option>
            <option value="kali">Perkalian</option>
            <option value="bagi">Pembagian</option>
        </select>
        <button type="submit" name="kirim">Hitung</button>
        <?php 
            if (empty($output)) {
                $hasil = 0;
            } else {
                $hasil = $output;
            }
        ?>
        <p>Hasil : <?php echo $output ?></p>
    </div>
    </form>
</body>
</html>