<?php

    foreach(range(1, 100) as $number) {
        if ($number % 3 != 0 && $number % 5 != 0) {
          echo $number . '<br>';
          continue;
        }
        if ($number % 3 == 0) echo 'Rizz';
        if ($number % 5 == 0) echo 'Buzz';
        echo '<br>';
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
    <div class="hasilAkhir">
        <?= $hasilAkhir ?>
    </div>
</body>
</html>