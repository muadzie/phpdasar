<?php
$mahasiswa = [
    ["ilham muadz fakhrizi", "0483840383", "teknik informatika", "muadzie@gmail.com"],
    ["abdull ghofur", "0573840383", "teknik informatika", "abdullghofur12@gmail.com"],
    ["jeki firmanto", "0657840383", "teknik informatika", "jekifirmanto44@gmail.com"]


];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar mahasiswa</title>
</head>

<body>

    <h1>daftar mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>nama : <?php echo $mhs[0]; ?></li>
        <li>nrp : <?php echo $mhs[1]; ?></li>
        <li>jurusan : <?php echo $mhs[2]; ?></li>
        <li>email : <?php echo $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>


</body>

</html>