<?php

$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ]
];

$harga = 0;

echo "Daftar belanjaan :";
echo "<ol>";

foreach ($barang as $item) {
    $subHarga = $item['harga_barang'] * $item['jumlah_beli'];

    echo "<li>" . $item['nama_barang'] . " (" . $item['jumlah_beli'] . ") : " . number_format($subHarga, 0, ".", ".");

    $harga += $subHarga;

}

echo "</ol>";
echo "<br>";

echo "Total harga yang harus dibayar adalah <b>Rp. " . number_format($harga, 0, '.', '.') . "</b>";