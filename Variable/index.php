<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
    <link rel="stylesheet" href="../type data/style.css">
</head>
<body>
    <div class="identity">
        <img src="../type data/potrait.png" alt="Revan Permana">
        <h1>Denra Widiman</h1>
        <p>Software Engineer</p>
    </div>
    <div class="container">
        <h1>Belajar PHP</h1>
        <h2>Variable</h2>
        <hr>
            <?php
            // Contoh variabel string
            $nama = "Revan Permana";

            // Contoh variabel integer
            $umur = 16;

            // Contoh variabel float
            $tinggi = 175.5;

            // Contoh variabel boolean
            $sekolah = true;

            // Contoh variabel array
            $hobi = array("Renang", "Membaca", "Olahraga");

            // Menampilkan nilai variabel
            echo "Nama: " . $nama . "<br>";
            echo "Umur: " . $umur . " tahun<br>";
            echo "Tinggi: " . $tinggi . " cm<br>";
            echo "sekolah: " . ($sekolah ? 'Ya' : 'Tidak') . "<br>";
            echo "Hobi: " . implode(", ", $hobi) . "<br>";
            ?>
    </div>
</body>
</html>