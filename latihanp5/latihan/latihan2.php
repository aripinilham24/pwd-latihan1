<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <center>
            <h1>PERPUSTAKAAN "PINTAR MEMBACA"</h1>
            <h3>Pendaftaran Anggota Secara Online</h3>
            <h5><i>Jl. Sejahtea No.11 Bekasi Tenggara <br></i></h5>
            <hr color="red">
        </center>
        <p>
            Nama Lengkap: <input type="text" name="nama" size="35" maxlength="30"> <br>
            TTL: <input type="text" name="tempatLahir" maxlength="20" size="20"> <select name="tanggalLahir" size="1"
                id="">
                <?
                for ($i = 1; $i <= 31; $i++) {
                    echo "<option value=$i>$i</option>";
                }
                ?>
            </select>
            <select name="bulanLahir" size="1" id="">
                <option>Januari</option>
                <option>Februari</option>
                <option>Maret</option>
                <option>April</option>
                <option>Mei</option>
                <option>Juni</option>
                <option>Juli</option>
                <option>Agustus</option>
                <option>September</option>
                <option>Oktober</option>
                <option>November</option>
                <option>Desember</option>
            </select>
            <input type="text" name="tahunLahir" size="10" maxlength="4" value="2009" id=""> <br>
            Jenis Kelamin: <input type="radio" name="jk" value="l" id="">Laki-laki
            <input type="radio" name="jk" value="p" id="">Perempuan <br>
            Alamat: <textarea name="alamat" rows="3" cols="35" id=""></textarea><br>
            No. Telp: <input type="text" name="telp" size="15" maxlength="15" id=""> <br>
            <input type="submit" value="kirim" name="" id=""> <input type="reset" value="bersih" name="" id="">
        </p>
    </form>
    <hr color="red">
    <marquee behavior="" direction="right"><i>- - - Pendaftaran Anggota Perpustakaan Secara Online - - -</i></marquee>

    <center>
        <h1>PERPUSTAKAAN "PINTAR MEMBACA"</h1>
        <h3>Pendaftaran Anggota Secara Online</h3>
        <h5><i>Jl. Sejahtea No.11 Bekasi Tenggara <br></i></h5>
        <hr color="red">
    </center>
    <p>

            <center><h2>***** BUKTI PENDAFTARAN *****</h2></center>
            <?
            $nama = $_POST['nama'];
            $tempat = $_POST['tempatLahir'];
            $tgl = $_POST['tanggalLahir'];
            $bln = $_POST['bulanLahir'];
            $thn = $_POST['tahunLahir'];
            $jenis = $_POST['jk'];
            $alamat = $_POST['alamat'];
            $telp = $_POST['telp'];
            echo "Tanggal Cetak : ";
            echo date("D - d/M/Y <p>");
            echo "Nama Lengkap : $nama <br>";
            echo "TTL : $tempat - $tgl/$bln/$thn <br>";
            if ($jenis == 'l') {
                $jk = 'Laki-Laki';
            } else {
                $jk = 'Perempuan';
            }
            echo "Jenis Kelamin : $jk <br>";
            echo "Alamat : $alamat <br>";
            echo "No.telp : $telp <br>";
            ?>
            
        
    </p>
    <a href="kasus03.php">
        <<< Input Lagi</a>
            <hr color="red">
            <marquee behavior="" direction="right"><i>- - - Pendaftaran Anggota Perpustakaan Secara Online - - -</i>
            </marquee>
</body>

</html>