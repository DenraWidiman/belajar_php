<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Belajar Tipe Data</h1>
        <h2>Float</h2>
        <?php,  

            $nilaiMatematika = 7.5;
            $nilaiIPA = 7.6;
            $nilaiBahasaIndonesia = 8.3;

            # hitung nilai rata-rata
            $rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

            # Tampilkan data

            echo "Matematika: {$nilaiMatematika} <br>";
            echo "IPA: {$nilaiIPA} <br>";
            echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
            echo "Rata-rata: {$rataRata} <br>";

            # lihat tipe data dari variabel $rataRata
            var_dump($rataRata);
        ?>
    </div>
</body>
</html>