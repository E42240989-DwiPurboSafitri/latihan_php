<?php
// Membuat array 2 dimensi berisi data 3 siswa (Nama, Nilai Matematika, Nilai Bahasa)
$siswa = array(
    array("Dwi", 85, 90),
    array("Purbo", 78, 88),
    array("Safitri", 92, 95)
);

// Cetak nilai Bahasa dari siswa ke-2
echo "<h3 style='color: darkblue;'>Nilai Bahasa dari siswa ke-2 (" . $siswa[1][0] . ") adalah: <span style='color:red;'>" . $siswa[1][2] . "</span></h3>";

// Cetak semua data dalam bentuk tabel
echo "<h3 style='color: darkgreen;'>Data Semua Siswa:</h3>";
echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; text-align: center; background-color: #f9f9f9; width: 60%;'>";
echo "<tr style='background-color:rgb(11, 0, 49); color: white;'>
        <th>No</th>
        <th>Nama</th>
        <th>Nilai Matematika</th>
        <th>Nilai Bahasa</th>
      </tr>";

for ($i = 0; $i < count($siswa); $i++) {
    // Warna baris bergantian (zebra effect)
    $warna = ($i % 2 == 0) ? "#dff0d8" : "#f2dede";
    
    echo "<tr style='background-color: $warna;'>
            <td>" . ($i + 1) . "</td>
            <td>" . $siswa[$i][0] . "</td>
            <td>" . $siswa[$i][1] . "</td>
            <td>" . $siswa[$i][2] . "</td>
          </tr>";
}

echo "</table>";
?>