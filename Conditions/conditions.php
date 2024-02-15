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
        <h2>Conditions</h2>
        <hr>
            <?php

            $nilai = 75;

            // Contoh 1: If statement
            if ($nilai >= 70) {
                echo "Nilai Anda $nilai, Anda lulus!";
            } else {
                echo "Nilai Anda $nilai, Anda tidak lulus.";
            }

            echo "\n";

            // Contoh 2: If-else if-else statement
            if ($nilai >= 90) {
                echo "Nilai Anda $nilai, Anda mendapatkan nilai A.";
            } elseif ($nilai >= 80) {
                echo "Nilai Anda $nilai, Anda mendapatkan nilai B.";
            } elseif ($nilai >= 70) {
                echo "Nilai Anda $nilai, Anda mendapatkan nilai C.";
            } else {
                echo "Nilai Anda $nilai, Anda tidak lulus.";
            }

            echo "\n";

            // Contoh 3: Switch statement
            $grade = '';

            switch (true) {
                case $nilai >= 90:
                    $grade = 'A';
                    break;
                case $nilai >= 80:
                    $grade = 'B';
                    break;
                case $nilai >= 70:
                    $grade = 'C';
                    break;
                default:
                    $grade = 'D';
            }

            echo "Grade Anda: $grade\n";
            ?>
    </div>
</body>
</html>