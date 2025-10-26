<!DOCTYPE html>
<html>
<head>
    <title>Konversi jumlah detik ke satuan jam-menit-detik</title>
</head>
<body>

    <h1>Konversi jumlah detik ke satuan jam-menit-detik</h1>

    <?php
    /*
    Script ini merupakan kebalikan dari script5-3.php
    Script ini akan mengkonversi waktu yang diketahui dalam satuan detik
    ke dalam satuan jam-menit-detik.
    Diketahui waktu dalam detik adalah 15789 detik, akan dikonversi ke
    bentuk x jam, y menit dan z detik
    */
    $totalDetik = 15789; // jumlah total detik Mula-Wula

    // --- Lanjutan kode untuk konversi ---
    $jam = floor($totalDetik / 3600); // Hitung jam
    $sisaDetikJam = $totalDetik % 3600; // Sisa detik setelah dihitung jam

    $menit = floor($sisaDetikJam / 60); // Hitung menit dari sisa detik
    $detik = $sisaDetikJam % 60; // Detik sisanya

    echo "<p>Total detik: **$totalDetik**</p>";
    echo "<p>Konversi: $jam jam, $menit menit, $detik detik.</p>";
    ?>
</body>
</html>