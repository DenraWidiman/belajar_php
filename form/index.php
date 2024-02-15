<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = clean_input($_POST["nama"]);
    $email = clean_input($_POST["email"]);
    $umur = clean_input($_POST["umur"]);
    $jenis_kelamin = clean_input($_POST["jenis_kelamin"]);

    // Validasi umur
    if (!is_numeric($umur) || $umur <= 0) {
        die("Error: Umur harus berupa angka positif.");
    }

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Format email tidak valid.");
    }

    // Proses data
    echo "Data yang Anda masukkan:<br>";
    echo "Nama: $nama<br>";
    echo "Email: $email<br>";
    echo "Umur: $umur tahun<br>";
    echo "Jenis Kelamin: $jenis_kelamin";
}

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>