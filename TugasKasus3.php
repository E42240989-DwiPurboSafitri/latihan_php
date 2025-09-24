<?php
// Waktu Sholat
echo "<h3>Waktu Sholat</h3>";
$jam = 12;
if($jam == 5){
    echo "Sholat Subuh<br>";
} elseif($jam == 12){
    echo "Sholat Dzuhur<br>";
} elseif($jam == 15){
    echo "Sholat Ashar<br>";
} elseif($jam == 18){
    echo "Sholat Maghrib<br>";
} elseif($jam == 19){
    echo "Sholat Isya<br>";
} else {
    echo "Bukan waktu sholat utama<br>";
}