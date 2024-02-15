<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
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
        <h2>Array</h2>
        <hr>
        <?php
            $motocycles2T = [
                ["RX-King", 22, 18],
                ["Ninja RR", 15, 13],
                ["NSR", 5, 2],
                ["F1ZR", 17, 15]
            ];
        ?>
        <ul>
            <?php foreach ($motocycles2T as $motocycle) : ?>
                <li>
                    Merk: <?= $motocycle[0] ?> | Stock: <?= $motocycle[1] ?> | Sold: <?= $motocycle[2] ?>
                </li>
                
            <?php endforeach ?>
        </ul>
    </div>
</body>
</html>