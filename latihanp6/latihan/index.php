<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form input</title>
</head>

<body>
    <div class="daftarMenu">
    <?php
            $makanan = [
                ["nama" => "kue lapis", "harga" => 15000, "stok" => 20],
                ["nama" => "donut", "harga" => 10000, "stok" => 50],
                ["nama" => "martabak", "harga" => 35000, "stok" => 10],
            ];
            foreach ($makanan as $item) {
                echo "nama produk :" . $item["nama"] . "<br>";
                echo "harga produk : Rp. " . number_format($item["harga"], 2, ",", ".") . "<br>";
                echo "stok produk :" . $item["stok"] . "<br><br>";
            }
            ?>
    </div>
    <form action="latihan2.php" method="post">
        <label for="menu">menu</label>
        <select name="menu" id="menu">
        <?php
        $makanan = [
            ["nama" => "kue lapis", "harga" => 15000, "stok" => 20],
            ["nama" => "donut", "harga" => 10000, "stok" => 50],
            ["nama" => "martabak", "harga" => 35000, "stok" => 10],
        ];
        foreach ($makanan as $item) {
            echo "<option value='{$item["harga"]}, {$item["nama"]}'>{$item["nama"]}</option>";
        }
        ?>
        </select>
        <label for="jumlahPesanan">Jumlah Pesanan: <input type="number" name="jumlahPesanan" id="jumlahPesanan"></label>
        <button type="submit">submit</button>
        <button type="reset">reset</button>
    </form>
</body>

</html>