<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
    <link rel="stylesheet" href="../type data/style.css">
</head>
<body>
    <div class="identity">
        <img src="../type data/potrait.png" alt="Denra Widiman">
        <h1>Denra Widiman</h1>
        <p>Software Engineer</p>
    </div>
    <div class="container">
        <h1>Belajar PHP</h1>
        <h2>Operator</h2>
        <hr>
            <?php
            // Operator Aritmatika
            $a = 5;
            $b = 2;

            $penjumlahan = $a + $b;   // Penjumlahan
            $pengurangan = $a - $b;   // Pengurangan
            $perkalian = $a * $b;     // Perkalian
            $pembagian = $a / $b;     // Pembagian
            $modulus = $a % $b;       // Modulus (sisa pembagian)

            echo "Penjumlahan: $penjumlahan<br>";
            echo "Pengurangan: $pengurangan<br>";
            echo "Perkalian: $perkalian<br>";
            echo "Pembagian: $pembagian<br>";
            echo "Modulus: $modulus<br>";

            // Operator Perbandingan
            $a = 10;
            $b = 5;

            if ($a == $b) {
                echo "$a sama dengan $b";
            } elseif ($a > $b) {
                echo "$a lebih besar dari $b";
            } else {
                echo "$a lebih kecil dari $b";
            }

            // Operator Logika
            $nilai1 = true;
            $nilai2 = false;

            if ($nilai1 && $nilai2) {
                echo "Kedua nilai true";
            } elseif ($nilai1 || $nilai2) {
                echo "Salah satu nilai true";
            } else {
                echo "Kedua nilai false";
            }
            ?>
    </div>
</body>
</html>