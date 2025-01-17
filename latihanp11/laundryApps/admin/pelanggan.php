<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan</title>
</head>

<body>
    <?php include 'header.php' ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h5 class="display-5">Data Pelanggan</h5>
            </div>
            <div class="card-body">
                <a href="tambahPelanggan.php" class="btn btn-outline-primary btn-sm mb-3">Tambah Data</a>
                <table class="table table-bordered table-hover table-striped" id="table-datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No.Handphone</th>
                            <th>Alamat</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../koneksi.php';
                        $no = 1;
                        $query = mysqli_query($conn, "SELECT * FROM pelanggan ORDER BY namaPelanggan ASC");
                        while ($data = mysqli_fetch_array($query)) {

                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['namaPelanggan']; ?></td>
                                <td><?php echo $data['hpPelanggan']; ?></td>
                                <td><?php echo $data['alamatPelanggan']; ?></td>
                                <td>
                                    <a href="editPelanggan.php?id=<?php echo $data['idPelanggan']; ?>"
                                        id="<?php echo $data['idPelanggan']; ?>" class="btn btn-outline-warning">Edit</a>
                                    <a onclick="confirmHapus()"
                                        href="hapusPelanggan.php?id=<?php echo $data['idPelanggan']; ?>"
                                        id="<?php echo $data['idPelanggan']; ?>" class="btn btn-outline-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        
        function confirmHapus() {
            const confir = confirm('Apakah yakin ingin menghapus data ini?');
            if(!confir) {
                event.preventDefault();
            }
            return confir;
        }
    </script>
</body>

</html>