<?php
echo "<h2>Rekomendasi Menu Makan</h2>";

$waktu = "siang"; // ubah nilai: pagi, siang, malam

if($waktu == "pagi"){
    echo "Rekomendasi Sarapan: Nasi Pecel + Teh Hangat";
} elseif($waktu == "siang"){
    echo "Rekomendasi Makan Siang: Bakso + Es Teh";
} elseif($waktu == "malam"){
    echo "Rekomendasi Makan Malam: Ayam Bakar + Es Jeruk";
} else {
    echo "Waktu makan tidak dikenali. Pilih: pagi, siang, atau malam.";
}
?>