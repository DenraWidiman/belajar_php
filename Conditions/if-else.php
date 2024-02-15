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
        <h2>if-else</h2>
        <hr>
            <?php
            // Contoh 2: If-else if-else statement
            
            $nilai = 75;

            if ($nilai >= 90) {
                echo "Nilai Anda $nilai, Anda mendapatkan nilai A.";
            } elseif ($nilai >= 80) {
                echo "Nilai Anda $nilai, Anda mendapatkan nilai B.";
            } elseif ($nilai >= 70) {
                echo "Nilai Anda $nilai, Anda mendapatkan nilai C.";
            } else {
                echo "Nilai Anda $nilai, Anda tidak lulus.";
            }
            ?>
    </div>
</body>
</html>