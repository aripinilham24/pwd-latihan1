<?php include "header.php"; ?>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Pengaturan Harga Laundry</h1>
                </div>
                <div class="card-body">
                    <?php
                    include "../koneksi.php";
                    $data = mysqli_query($conn, "SELECT harga_perkilo FROM harga");
                    if (mysqli_num_rows($data) > 0) {
                        while ($d = mysqli_fetch_array($data)) { ?>
                            <form action="harga_update.php" method="post">
                                <div class="form-group">
                                    <label for="harga">Harga per Kilo</label>
                                    <input type="number" class="form-control" name="harga" id="harga" value="<?php echo $d['harga_perkilo']; ?>" required>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3 w-100">Ubah Harga</button>
                            </form>
                        <?php }
                    } else {
                        echo "<p class='text-center text-danger'>Tidak ada data harga yang ditemukan.</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
