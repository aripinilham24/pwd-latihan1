<?php
include '../koneksi.php';

// menangkap id transaksi dari URL
$id = $_GET['id'];

// mengambil data transaksi berdasarkan id
$transaksi = mysqli_query($conn, "SELECT * FROM transaksi, pelanggan WHERE transaksi.transaksi_pelanggan = pelanggan.idPelanggan AND transaksi.transaksi_id = '$id'");
$d = mysqli_fetch_assoc($transaksi);

// mengambil data pakaian yang terkait dengan transaksi ini
$pakaian = mysqli_query($conn, "SELECT * FROM pakaian WHERE pakaian_transaksi = '$id'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Detail Transaksi</title>
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h4>Detail Transaksi</h4>
            </div>
            <div class="card-body">
                <h5>Informasi Transaksi</h5>
                <table class="table">
                    <tr>
                        <th>Invoice</th>
                        <td>INVOICE-<?php echo $d['transaksi_id']; ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <td><?php echo $d['transaksi_tgl']; ?></td>
                    </tr>
                    <tr>
                        <th>Pelanggan</th>
                        <td><?php echo $d['namaPelanggan']; ?></td>
                    </tr>
                    <tr>
                        <th>Berat (Kg)</th>
                        <td><?php echo $d['transaksi_berat']; ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Selesai</th>
                        <td><?php echo $d['transaksi_tgl_selesai']; ?></td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td><?php echo "Rp. " . number_format($d['transaksi_harga']) . " ,-"; ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <?php 
                            if ($d['transaksi_status'] == "0") {
                                echo "<span class='badge bg-warning text-dark'>PROSES</span>";
                            } elseif ($d['transaksi_status'] == "1") {
                                echo "<span class='badge bg-info text-dark'>DICUCI</span>";
                            } elseif ($d['transaksi_status'] == "2") {
                                echo "<span class='badge bg-success'>SELESAI</span>";
                            }
                            ?>
                        </td>
                    </tr>
                </table>

                <h5>Detail Pakaian</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Pakaian</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        while ($p = mysqli_fetch_assoc($pakaian)) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $p['jenis_pakaian']; ?></td>
                                <td><?php echo $p['jumlah_pakaian']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <a href="transaksi.php" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>
