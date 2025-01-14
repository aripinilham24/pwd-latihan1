<?php 
include '../koneksi.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$pelanggan = $_POST['pelanggan'];
$berat = $_POST['berat'];
$tgl_selesai = $_POST['tgl_selesai'];
$status = $_POST['status'];

// mengambil data harga per kilo dari database
$h = mysqli_query($conn,"select harga_perkilo from harga");
$harga_perkilo = mysqli_fetch_assoc($h);

// menghitung harga laundry, harga perkilo x berat cucian
$harga = $berat * $harga_perkilo['harga_perkilo'];

// update data transaksi
mysqli_query($conn,"update transaksi set transaksi_pelanggan='$pelanggan', transaksi_harga='$harga', transaksi_berat='$berat', transaksi_tgl_selesai='$tgl_selesai', transaksi_status='$status' where transaksi_id='$id'");

// menangkap data form input array (jenis pakaian dan jumlah pakaian)
$jenis_pakaian = $_POST['jenis_pakaian'];
$jumlah_pakaian = $_POST['jumlah_pakaian'];

// menghapus semua pakaian dalam transaksi ini
mysqli_query($conn,"delete from pakaian where pakaian_transaksi='$id'");

// input ulang data cucian berdasarkan id transaksi (invoice) ke table pakaian
for($x=0;$x<count($jenis_pakaian);$x++){
	if($jenis_pakaian[$x] != ""){
		mysqli_query($conn,"INSERT INTO pakaian (jenis_pakaian,jumlah_pakaian, pakaian_transaksi) VALUES('$jenis_pakaian[$x]','$jumlah_pakaian[$x]','$id')");
	}
}
header("location:transaksi.php");
?>

