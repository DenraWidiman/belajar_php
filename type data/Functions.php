<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="identity">
        <img src="potrait.png" alt="Denra Widiman">
        <h1>Denra Widiman</h1>
        <p>Software Engineer</p>
    </div>
    <div class="container">
        <h1>Belajar Tipe Data</h1>
        <h2>Functions</h2>
        <hr>
        <?php
            function sayHallo($name, $umur) {
                return "Hallo nama saya $name, saya berumur $umur tahun";
            }
        ?>
        <p><?= sayHallo("Revan Permana", 17) ?></p>
        <p><?= sayHallo("Sandi", 16) ?></p>
        <p><?= sayHallo("Denra", 76) ?></p>
    </div>
</body>
</html>