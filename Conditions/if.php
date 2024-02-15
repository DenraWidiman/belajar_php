<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditions</title>
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
        <h2>if</h2>
        <hr>
            <?php

            $nilai = 75;

            // Contoh 1: If statement
            if ($nilai >= 70) {
                echo "Nilai Anda $nilai, Anda lulus!";
            } else {
                echo "Nilai Anda $nilai, Anda tidak lulus.";
            }
            ?>
    </div>
</body>
</html>