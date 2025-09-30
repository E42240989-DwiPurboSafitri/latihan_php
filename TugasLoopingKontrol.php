<?php
echo "TOTAL PENGELUARAN DWI<br><br>";

$pengeluaran = [15000, 5000, 20000, 6000];
$total = 0;

for ($i = 0; $i < count($pengeluaran); $i++) {
    echo "Pengeluaran ke-" . ($i+1) . ": Rp " . $pengeluaran[$i] . "<br>";
    $total += $pengeluaran[$i];
}

echo "<br>Total Pengeluaran: Rp " . $total;
?>