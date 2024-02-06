<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="identity">
        <img src="potrait.png" alt="Revan Permana">
        <h1>Revan Permana</h1>
        <p>Software Engineer</p>
    </div>
    <div class="container">
        <h1>Belajar Tipe Data</h1>
        <h2>string</h2>
        <hr>
        <?php
            $namaDepan = "Alexander"; # pakai tanda petik dua
            $namaBelakang = 'Asep'; # pakai tanda petik satu

            # menggabungkan dua variabel dengan tanda
            # petik dua
            $namaLengkap = "{$namaDepan} {$namaBelakang}";

            # anda juga bisa menggabungkan string dengan menggunakan tanda titik (.)
            $namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

            # [Tampilkan Data]
            # kita bisa memasukkan variabel lain jika menggunakan tanda petik dua
            echo "Nama Depan: {$namaDepan} <br>"; 
            # ada pun jika pakai tanda petik satu, kita tidak bisa memasukkan variabel 
            # di dalam string akan tetapi menggabungkannya dengan operator titik (.)
            echo 'Nama Belakang: ' . $namaBelakang . '<br>';

            echo $namaLengkap;
        ?>
    </div>
</body>
</html>