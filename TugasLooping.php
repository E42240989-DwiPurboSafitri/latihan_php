<?php
echo "DAFTAR NOMOR KURSI BIOSKOP (SAMPAI 1000) <br><br>";

$baris = "A";     // mulai dari baris A
$mulai = 100;     // nomor kursi awal
$akhir = 199;     // nomor kursi akhir

while ($mulai <= 1000) {
    $kursi = $mulai;

    while ($kursi <= $akhir && $kursi <= 1000) {
        echo "Kursi : " . $baris . $kursi . "<br>";
        $kursi++;
    }

    // naik ke baris berikutnya
    $baris++;
    $mulai += 100;
    $akhir += 100;
}
?>