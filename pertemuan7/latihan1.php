<?php
// $_GET
$mahasiswa = [
    [
        "nama" => "ilham muadz fakhrizi",
        "nrp" => "07247649",
        "email" => "muadzie@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "foto1.jpg"
    ],
    [
        "nama" => "abdul ghofur",
        "nrp" => "08247649",
        "email" => "abdulghofur@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "foto2.jpg"
    ]
];
?>
<!DOCTYPE html>
<html>

<head>
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <li>
            <a
                href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=
            <?= $mhs["nrp"] ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>">
                <?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>