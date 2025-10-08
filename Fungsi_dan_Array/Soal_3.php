<?php
// Membuat array asosiatif multidimensi berisi 3 produk e-commerce
$produk = [
    [
        "nama" => "Headphone Bluetooth",
        "kategori" => "Elektronik",
        "harga" => 350000,
        "rating" => 4.8
    ],
    [
        "nama" => "Tas Kulit Premium",
        "kategori" => "Fashion",
        "harga" => 500000,
        "rating" => 4.6
    ],
    [
        "nama" => "Botol Minum Stainless",
        "kategori" => "Perlengkapan Rumah",
        "harga" => 120000,
        "rating" => 4.9
    ]
];

// Mencari produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $item) {
    if ($item["harga"] > $tertinggi["harga"]) {
        $tertinggi = $item;
    }
}

// Cetak hasil
echo "<h3 style='color: darkblue;'>Produk dengan harga tertinggi adalah: 
      <span style='color: red;'>" . $tertinggi["nama"] . 
      "</span> (Rp " . number_format($tertinggi["harga"], 0, ',', '.') . ")</h3>";

// Cetak semua produk dalam bentuk tabel
echo "<h3 style='color: darkgreen;'>Data Semua Produk:</h3>";
echo "<table border='1' cellpadding='10' cellspacing='0' 
        style='border-collapse: collapse; width: 70%; text-align: center;'>";
echo "<tr style='background-color:rgb(1, 0, 51); color: white;'>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Harga (Rp)</th>
        <th>Rating</th>
      </tr>";

$no = 1;
foreach ($produk as $p) {
    $warna = ($no % 2 == 0) ? "#f2dede" : "#dff0d8";
    echo "<tr style='background-color: $warna;'>
            <td>$no</td>
            <td>{$p['nama']}</td>
            <td>{$p['kategori']}</td>
            <td>" . number_format($p['harga'], 0, ',', '.') . "</td>
            <td>{$p['rating']}</td>
          </tr>";
    $no++;
}

echo "</table>";
?>