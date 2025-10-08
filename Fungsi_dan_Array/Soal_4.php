<?php
// Buat array 2 dimensi 3x3 berisi angka acak 1–9
$matriks = [];
$total = 0;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9);
        $total += $matriks[$i][$j];
    }
}

// Cetak sebagai matriks (tabel)
echo "<h3 style='color:#EEEEE;margin:6px 0;'>Matriks 3x3 (angka acak 1-9)</h3>";
echo "<table cellpadding='14' cellspacing='0' style='border-collapse:collapse;text-align:center;width:260px;border-radius:10px;overflow:hidden;box-shadow:0 6px 18px rgba(0,0,0,.08)'>";
echo "<tr style='background-color:rgb(1, 0, 51); color:#fff;'>
        <th>c1</th><th>c2</th><th>c3</th>
      </tr>";

for ($i = 0; $i < 3; $i++) {
    // zebra color tiap baris
    $bg = ($i % 2 == 0) ? "#e0f2fe" : "#dcfce7";
    echo "<tr style='background:$bg; font-weight:600; color:#0f172a;'>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td style='border:1px solid #cbd5e1; width:70px;'>" . $matriks[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// Tampilkan total
echo "<h3 style='color:#6b21a8;margin-top:12px;'>Jumlah total semua elemen: <span style='color:#dc2626;'>$total</span></h3>";
?>