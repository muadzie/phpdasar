<?php
$pertanian = [
    ["supartina,S.Keb", "pertanyaan kesehatan", "082345677689", "abcd****@gmail.com"],



];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ASK TO BIDAN HEALTY</title>
</head>

<body>

    <h1>ASK TO BIDAN HEALTY</h1>

    <?php foreach ($pertanian as $tani) : ?>
    <ul>
        <li>NAMA BIDAN : <?= $tani[0]; ?></li>
        <li>TENTANG : <?= $tani[1]; ?></li>
        <li>NO HP : <?= $tani[2]; ?></li>
        <li>EMAIL : <?= $tani[3]; ?></li>
    </ul>
    <?php endforeach; ?>
    <br>
</body>

</html>