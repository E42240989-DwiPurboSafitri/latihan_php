<?php
class Buku {
private $dataBuku = [
["id" => 1, "judul" => "Laskar Pelangi", "pengarang" => "Andrea Hirata", "tahun" => 2005],
["id" => 2, "judul" => "Nanti Kita Cerita Tentang Hari Ini", "pengarang" => "Marchella FP", "tahun" => 2018],
["id" => 3, "judul" => "Seporsi Mie Ayam Sebelum Mati", "pengarang" => " Brian Khrisna", "tahun" => 2023]
];
// Mengambil semua data buku
public function getAllProduk() {
return $this->dataBuku;
}
}