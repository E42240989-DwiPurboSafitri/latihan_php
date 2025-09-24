<?php
// Harga Tiket Bioskop
echo "<h3>Harga Tiket Bioskop</h3>";
$hari = "Sabtu";
if($hari == "Senin" || $hari == "Selasa" || $hari == "Rabu" || $hari == "Kamis"){
    $harga = 20000;
} elseif($hari == "Jumat"){
    $harga = 30000;
} else {
    $harga = 35000;
}
echo "Hari $hari → Harga Rp$harga<br>";
