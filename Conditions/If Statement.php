<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if Statement</title>
    <link rel="stylesheet" href="../type data/style.css">
</head>
<body>
    <div class="identity">
        <img src="../type data/potrait.png" alt="Denra Widiman">
        <h1>Denra Widiman</h1>
        <p>Software Engineer</p>
    </div>
    <div class="container">
        <h1>Belajar Tipe Data</h1>
        <h2>if Statement</h2>
        <hr>
        <?php
            $nilai = 74;

            if ($nilai > 90) {
                $grade = "A+";
            } elseif($nilai > 80){
                $grade = "A";
            } elseif($nilai > 70){
                $grade = "B+";
            } elseif($nilai > 60){
                $grade = "B";
            } elseif($nilai > 50){
                $grade = "C+";
            } elseif($nilai > 40){
                $grade = "C";
            } elseif($nilai > 30){
                $grade = "D";
            } elseif($nilai > 20){
                $grade = "E";
            } else {
                $grade = "F";
            }

            echo "Nilai anda: $nilai<br>";
            echo "Grade: $grade";
        ?>
    </div>
</body>
</html>