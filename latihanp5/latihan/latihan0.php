<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style>
    </style>
</head>
<body>
    <form action="" method="get">
        <label for="pilihan">masukan pilihan: <ul>
            <li>1. Sistem Infromasi</li>
            <li>2. Teknik Informatika </li>
        </ul></label>
        <input type="number" name="pilihan" id="pilihan" min="1" max="3">
        <button type="submit">submit</button>
        <button type="reset">reset</button>
    </form>

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
</body>
</html>