<?php
function hitungTotalBiaya($daftarHarga, $jumlahPesanan)
{
    $totalBiaya = $daftarHarga * $jumlahPesanan;
    return $totalBiaya;
}
list($daftarHarga, $menu) = explode(",", $_POST["menu"]);
$jumlahPesanan = $_POST["jumlahPesanan"];
$totalBiaya = hitungTotalBiaya($daftarHarga, $jumlahPesanan);
echo "Pesanan : $menu <br>"; 
echo "Harga : Rp. ".number_format($daftarHarga,2,",",".")."<br>";
echo "Jumlah Pesanan : $jumlahPesanan <br>";
echo "Total Biaya Pesanan Adalah : Rp. ".number_format($totalBiaya,2,",","."). "<br>";
?>