<?php
echo "<h2>Jadwal Mata Kuliah Hari Rabu</h2>";

$jam = 15; // ubah nilai jam sesuai waktu untuk cek jadwal (contoh: 9, 11, 14)

// Cek jadwal berdasarkan jam
if($jam >= 7 && $jam < 10){
    echo "Jam $jam:00 - Mata Kuliah: Workshop Sistem Pengambilan Keputusan";
} elseif($jam >= 10 && $jam < 12){
    echo "Jam $jam:00 - Mata Kuliah: Jaringan Komputer";
} elseif($jam >= 13 && $jam < 17){
    echo "Jam $jam:00 - Mata Kuliah: Workshop Sistem Terintegrasi";
} else {
    echo "Jam $jam:00 - Tidak ada jadwal mata kuliah.";
}
?>