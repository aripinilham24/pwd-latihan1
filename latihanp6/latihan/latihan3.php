<?php
$makanan = [
    ["nama" => "kue lapis", "harga" => 15000, "stok" => 20],
    ["nama" => "donut", "harga" => 10000, "stok" => 50],
    ["nama" => "martabak", "harga" => 35000, "stok" => 10],
];
foreach ($makanan as $item) {
    echo "nama produk :" . $item["nama"] . "<br>";
    echo "harga produk : Rp. " .number_format($item["harga"], 2,",",".") . "<br>";
    echo "stok produk :" . $item["stok"] . "<br><br>";
}
?>