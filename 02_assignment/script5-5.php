<!DOCTYPE html>
<html>
<head>
    <title>Menghitung selisih dua buah waktu</title>
</head>
<body>

    <h1>Menghitung selisih dua buah waktu</h1>

    <?php
    /*
    Script ini akan mencari selisih antara waktu 10:34:45 dengan 12:25:31.
    Hasil selisih waktu dinyatakan dalam detik
    */

    // Waktu 2: 12:25:31
    $jam1 = 12;
    $menit1 = 25;
    $detik1 = 31;

    // Waktu 1: 10:34:45
    $jam2 = 10;
    $menit2 = 34;
    $detik2 = 45;

    // Menghitung total detik untuk waktu kedua (Waktu yang lebih besar)
    $totalDetik1 = $jam1 * 3600 + $menit1 * 60 + $detik1;

    // Menghitung total detik untuk waktu pertama (Waktu yang lebih kecil)
    $totalDetik2 = $jam2 * 3600 + $menit2 * 60 + $detik2;

    // Hitung selisih total detik dari kedua waktu
    $selisih = $totalDetik1 - $totalDetik2;

    echo "<p>Selisih dari kedua waktu adalah **$selisih** detik</p>";
    ?>

</body>
</html>