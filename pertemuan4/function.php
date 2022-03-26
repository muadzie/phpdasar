<?php 
//user-defined function
//function yang kita buat sendiri
function salam($waktu = "datang", $nama = "muadzie!") {
    return "selamat $waktu, $nama!";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <title>latihan function</title>
</head>
<body>
    
    <h1><?= salam("pagi", "muadzie"); ?></h1>
     

    </body>
</html>