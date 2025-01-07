<?php include 'header.php'; ?>
<?php
include "../koneksi.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $noHp = $_POST['hp'];
    $alamat = $_POST['alamat'];
    $simpan = mysqli_query($conn, "INSERT into pelanggan(namaPelanggan, hpPelanggan, alamatPelanggan) values ('$nama', '$noHp', '$alamat')");
    if($simpan) {
        header("location:pelanggan.php");
        exit;
    } else {
        echo "error";
    }
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <h4 class="mb-0">Tambah Data Pelanggan</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Masukkan nama ..">
                        </div>
                        <div class="mb-3">
                            <label for="hp" class="form-label">HP</label>
                            <input type="number" class="form-control" id="hp" name="hp" placeholder="Masukkan no.hp ..">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat"
                                placeholder="Masukkan alamat ..">
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Tambah</button>
                        <a href="pelanggan.php" class="btn btn-outline-primary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>