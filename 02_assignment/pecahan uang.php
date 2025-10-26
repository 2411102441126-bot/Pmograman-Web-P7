<?php
// Soal 2: Menentukan Jumlah Pecahan Uang
// Jumlah uang yang diambil: Rp 1.575.250,-
// Pecahan: 100000, 50000, 20000, 5000, 100, 50

$jumlahUang = 1575250;

// Variabel untuk menyimpan jumlah masing-masing pecahan
$sa; // Rp 100.000
$sb; // Rp 50.000
$sc; // Rp 20.000
$sd; // Rp 5.000
$se; // Rp 100
$sf; // Rp 50

$sisa = $jumlahUang; // Variabel sisa akan terus dikurangi

// 1. Pecahan Rp 100.000
$sa = floor($sisa / 100000);
$sisa = $sisa % 100000;

// 2. Pecahan Rp 50.000
$sb = floor($sisa / 50000);
$sisa = $sisa % 50000;

// 3. Pecahan Rp 20.000
$sc = floor($sisa / 20000);
$sisa = $sisa % 20000;

// 4. Pecahan Rp 5.000
$sd = floor($sisa / 5000);
$sisa = $sisa % 5000;

// 5. Pecahan Rp 100
$se = floor($sisa / 100);
$sisa = $sisa % 100;

// 6. Pecahan Rp 50
$sf = floor($sisa / 50);
$sisa = $sisa % 50;

// Tampilkan hasil
echo "<h2>2. Menentukan Jumlah Pecahan Uang</h2>";
echo "Jumlah uang yang diambil: Rp. " . number_format($jumlahUang, 0, ',', '.') . "<br>";
echo "---------------------------------------------------<br>";
echo "Jumlah pecahan Rp. 100.000,- : **$sa** lembar <br>";
echo "Jumlah pecahan Rp. 50.000,- : **$sb** lembar <br>";
echo "Jumlah pecahan Rp. 20.000,- : **$sc** lembar <br>";
echo "Jumlah pecahan Rp. 5.000,- : **$sd** lembar <br>";
echo "Jumlah pecahan Rp. 100,- : **$se** keping <br>";
echo "Jumlah pecahan Rp. 50,- : **$sf** keping <br>";
echo "Sisa uang yang tidak tercover pecahan (Rp. $sisa,-): **$sisa**";
?>