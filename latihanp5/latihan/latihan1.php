<?php
$pilih = $_GET["pilihan"];
switch ($pilih) {
    case '1':
        echo "Sistem Informasi";
        break;
    case '2':
        echo "Teknik Informatika";
        break;
    default:
        echo "Tidak ada pilihan prodi";
}
?>