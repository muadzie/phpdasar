<?php
//$mahasiswa = [
// ["ilham muadz fakhrizi", "07247649", "muadzie@gmail.com", "teknik informatika"],
//["abdul ghofur", "08247649", "ghofur@gmail.com", "teknik informatika"],
//];


//Array Associative
// key nya adalah string yang kita buat sendiri
//definisinya sama dengan array numerik, kecuali keynya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "ilham muadz fakhrizi",
        "nrp" => "07247649",
        "email" => "muadzie@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "kucing.jpg"
    ],
    [
        "nama" => "abdul ghofur",
        "nrp" => "08247649",
        "email" => "abdulghofur@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "meong.jpg"
    ]
];


?>
<!DOCTYPE html>
<html>

<head>

    <title>Data Mahasiswa</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama :<?= $mhs["nama"]; ?></li>
        <li>NRP :<?= $mhs["nrp"]; ?></li>
        <li>Email :<?= $mhs["email"]; ?></li>
        <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>