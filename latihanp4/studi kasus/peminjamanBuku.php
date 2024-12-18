<?php
$judulBuku = "Harry Potter and the Philosopher's Stone";
$namaPeminjam = "Alice";
$tanggalPeminjaman = date("2023-10-22"); // untuk informasi tanggal peminjaman dan untuk membandingkan dengan tanggal penegembalian
$batasPengembalian = date("2023-10-29");
$tanggalPengembalian = date("2023-11-28");
const tarifDendaPerHari = 2500;

echo "Buku $judulBuku telah dipinjam oleh $namaPeminjam pada $tanggalPeminjaman.<br>";

// Mengubah tanggal dari string ke objek DateTime untuk mempermudah perbandingan
$datetimeBatasPengembalian = new DateTime($batasPengembalian);
$datetimeTanggalPengembalian = new DateTime($tanggalPengembalian);

// Cek apakah tanggal pengembalian melebihi batas pengembalian
if ($datetimeTanggalPengembalian > $datetimeBatasPengembalian) {
    // Menghitung selisih hari
    $selisihHari = $datetimeBatasPengembalian->diff($datetimeTanggalPengembalian)->days;
    $denda = $selisihHari * tarifDendaPerHari;
    echo "Pengembalian terlambat $selisihHari hari. Denda yang harus dibayar: Rp $denda.";
} else {
    echo "Buku dikembalikan tepat waktu. Tidak ada denda.";
}
?>