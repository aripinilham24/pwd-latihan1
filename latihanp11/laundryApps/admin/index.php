<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        main {
            flex: 1;
        }
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 1rem 0;
        }
    </style>
</head>
<body>
<?php 
include 'header.php'; 
include '../koneksi.php';
$result = mysqli_query( $conn, "SELECT COUNT(*) AS total FROM pelanggan");
$data = mysqli_fetch_assoc($result);
$total_pelanggan = $data['total'];
$query_transaksi = mysqli_query( $conn, "SELECT COUNT(*) AS total FROM transaksi");
$data = mysqli_fetch_assoc($query_transaksi);
$total_transaksi = $data['total'];
$query_laporan = mysqli_query($conn, "
    SELECT COUNT(*) AS total 
    FROM transaksi 
    JOIN pelanggan ON transaksi.transaksi_pelanggan = pelanggan.idPelanggan
");
$data = mysqli_fetch_assoc($query_laporan);
$total_laporan = $data['total'];
?>
    
    

    <!-- Konten Utama -->
    <main class="container mt-4">
        <h6 class="alert alert-info" ><b>Welcome!</b> to the laundry information system </h6>
        <h1>Hi, <?php echo $_SESSION['username'];?> </h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Customers</h5>
                        <p class="card-text">Total <span class="text-primary"><?php echo $total_pelanggan;?></span> registered customers</p>
                        <a href="pelanggan.php" class="btn btn-primary">View Customers</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-warning">
                    <div class="card-body">
                        <h5 class="card-title">Transaction</h5>
                        <p class="card-text">Total <span class="text-primary"><?php echo $total_transaksi;?></span> transaction.</p>
                        <a href="transaksi.php" class="btn btn-warning">View Transaction</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-success">
                    <div class="card-body">
                        <h5 class="card-title">Reports</h5>
                        <p class="card-text">View <span class="text-primary"><?php echo $total_laporan;?></span> system reports.</p>
                        <a href="laporan.php" class="btn btn-success">View Reports</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        &copy; 2024 Sistem Informasi Laundry. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
