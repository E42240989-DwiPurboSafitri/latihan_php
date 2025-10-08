<?php
// Membuat array 2 dimensi berisi data buah (Nama, Harga, Stok)
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// 1. Cetak nama buah pertama
echo "<h3 style='color: darkblue;'>Nama buah pertama adalah: <span style='color:red;'>" . $buah[0][0] . "</span></h3>";

// 2. Hitung total nilai stok * harga untuk semua buah
$totalNilai = 0;
for ($i = 0; $i < count($buah); $i++) {
    $totalNilai += $buah[$i][1] * $buah[$i][2];
}

// Tampilkan hasil per buah dalam tabel
echo "<h3 style='color: darkgreen;'>Data Semua Buah:</h3>";
echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 60%; text-align: center;'>";
echo "<tr style='background-color:rgb(32, 0, 101); color: white;'>
        <th>No</th>
        <th>Nama Buah</th>
        <th>Harga (Rp)</th>
        <th>Stok</th>
        <th>Total Nilai (Harga x Stok)</th>
      </tr>";

for ($i = 0; $i < count($buah); $i++) {
    $warna = ($i % 2 == 0) ? "#dff0d8" : "#f2dede";
    $nilai = $buah[$i][1] * $buah[$i][2];
    echo "<tr style='background-color: $warna;'>
            <td>" . ($i + 1) . "</td>
            <td>" . $buah[$i][0] . "</td>
            <td>" . number_format($buah[$i][1], 0, ',', '.') . "</td>
            <td>" . $buah[$i][2] . "</td>
            <td>" . number_format($nilai, 0, ',', '.') . "</td>
          </tr>";
}

echo "</table>";

// Cetak total keseluruhan
echo "<h3 style='color: purple;'>Total nilai seluruh buah: Rp " . number_format($totalNilai, 0, ',', '.') . "</h3>";
?>