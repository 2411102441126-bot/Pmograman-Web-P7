<?php
// Soal 1: Menghitung Saldo Akhir Nasabah
// Saldo awal: Rp 1.000.000,-
// Bunga: 0,25% per bulan dari saldo awal
// Periode: 11 bulan

$saldoAwal = 1000000;
$bunga = 0.0025; // 0.25%
$bulan = 11;

// Perhitungan: Bunga per bulan = $saldoAwal * $bunga
// Total bunga selama $bulan = Bunga per bulan * $bulan
$totalBunga = $saldoAwal * $bunga * $bulan;

// Saldo Akhir = Saldo Awal + Total Bunga
$saldoAkhir = $saldoAwal + $totalBunga;

// Tampilkan hasil
echo "<h2>1. Menghitung Saldo Akhir Nasabah</h2>";
echo "Saldo awal: Rp. " . number_format($saldoAwal, 0, ',', '.') . "<br>";
echo "Bunga per bulan: " . ($bunga * 100) . "% dari saldo awal<br>";
echo "Periode: $bulan bulan<br>";
echo "---------------------------------------------------<br>";
echo "Total bunga yang diperoleh: Rp. " . number_format($totalBunga, 0, ',', '.') . "<br>";
echo "<b>Saldo akhir setelah $bulan bulan adalah: Rp. " . number_format($saldoAkhir, 0, ',', '.') . "</b>";
echo "<br><br>";
?>