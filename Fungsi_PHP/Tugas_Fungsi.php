<?php
// Atur zona waktu (opsional, biar sesuai Indonesia)
date_default_timezone_set('Asia/Jakarta');

/*
1) Fungsi untuk menentukan bilangan terbesar dari 2 bilangan
*/
function terbesarDariDua($a, $b) {
    return ($a >= $b) ? $a : $b;
}

// Contoh pakai:
$angka1 = 100;
$angka2 = 150;
$terbesar = terbesarDariDua($angka1, $angka2);

echo "1) Bilangan terbesar dari $angka1 dan $angka2 adalah: $terbesar\n";
echo "<br></br>";
/*
2) Tampilkan Tanggal-Bulan-Tahun sekarang dengan getdate()
   getdate() mengembalikan array informasi waktu saat ini.
*/
$now = getdate(); // ['mday'=>hari, 'mon'=>bulan(angka), 'year'=>tahun, dst.]
echo "2) Tanggal sekarang (getdate): " . $now['mday'] . "-" . $now['mon'] . "-" . $now['year'] . "\n";
echo "<br></br>";
/*
3) Tampilkan Tanggal-Bulan-Tahun sekarang dengan date('d-F-Y')
   'd' = hari 2 digit, 'F' = nama bulan lengkap, 'Y' = tahun 4 digit
*/
echo "3) Tanggal sekarang (date): " . date('d-F-Y') . "\n";
echo "<br></br>";