<?php
echo "<h2>Rekomendasi Film Seru</h2>";

$genre = "komedi"; // ubah sesuai genre: aksi, horor, komedi, drama

if($genre == "aksi"){
    echo "Rekomendasi Film Aksi: Spider-Man, Mad Max: Fury Road, The Dark Knight";
} elseif($genre == "horor"){
    echo "Rekomendasi Film Horor: The Conjuring, Insidious, Pengabdi  Setan";
} elseif($genre == "komedi"){
    echo "Rekomendasi Film Komedi: Agak Laen, Sesuai Aplikasi, Onde Mande!";
} elseif($genre == "drama"){
    echo "Rekomendasi Film Drama: Good Boy, The Nice Guy, Beyond The Bar";
} else {
    echo "Genre tidak dikenali. Pilih: aksi, horor, komedi, atau drama.";
}
?>