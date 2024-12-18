<?php
$usia = 35;
    echo "<h1>Perkenalan Diri</h1>";
    echo "Hello nama saya M. Aripin Ilham <br>";
    echo "Saya sedang belajar bahasa pemrograman PHP";
    echo "<br>";
    echo "di Laboratorium Komputer B <br>";
    echo "Saat ini usia saya".$usia."<br>";
    echo "Usia saya: $usia <br>";
    echo "Usia: {$usia} <br>";
    echo 'Usia: $usia'."<br>"; // '' tidak bisa menampilkan nilai variabel
    var_dump($usia); // untuk menampilkan tipe data
    echo "<hr> <br>";

    #mendefinisikan variabel
    $nilaiMatematika = 7.5;
    $nilaiBahasaInggris = 8.5;
    $nilaiBahasaIndo = 9.0;

    #menghitung nilai rata"
    $rerata = ($nilaiMatematika + $nilaiBahasaInggris + $nilaiBahasaIndo)/3;

    echo "Nilai Matematika: $nilaiMatematika <br>";
    echo "Nilai Bahasa Inggris: {$nilaiBahasaInggris} <br>";
    echo "Nilai Bahasa Indonesia: {$nilaiBahasaIndo} <br>";
    echo "Nilai Rata-rata: {$rerata} <br>";

    var_dump($rerata);

    echo "<hr> <br>";
    $usia = $usia + 10; // operator aritmatika
    echo "$usia <br>";

    $usia += 10; // operator penugasan
    echo "$usia <br>";

    $usia ++; // increment
    echo "$usia <br>";
    $usia --; //decrement
    echo "$usia <br>";

?>