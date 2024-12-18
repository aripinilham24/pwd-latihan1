<?php
function sapaan()
{
    echo "Halo, Selamat Datang <br>";
    echo "pada matakuliahh pemrograman Web Dasar <br>";
    echo "di Laboratorium B. <br>";
}
sapaan();

function perkenalanDiri($nama,$prodi) {
    echo "Halo nama saya $nama <br>";
    echo "prodi saya: $prodi <br>";
}
perkenalanDiri("Aripin", "Teknik Informatika");
function cekUsia($tahunLahir, $tahunSekarang)
{
    $usia = $tahunSekarang-$tahunLahir;
    return $usia;
}

echo "Usia saya saat ini adalah ".cekUsia(2004,2024)." tahun. <br>"
?>