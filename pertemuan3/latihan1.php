<?php
//pengulangan
//for
//while
//do.. while
//foreach : pengulangan khusus array

//for( $i = 0; $i < 5; $i++ ) {
  //  echo "hello world1  <br>";
//}

//$i = 0;
//while( $i < 5  ) {
  //echo " hello woorld <br>";
//$i++; 
//}

//$i = ;
//do {
  // echo "hello world <br>";
 //$i++;  
//} while( $i < 5 );


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>latihan 1</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <?php for($i = 1; $i <= 3; $i++ ) : ?>
        <tr>
            <?php for( $j = 1; $j <= 5; $j++ ) : ?>
            <td><?= "$i, $j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
    </table>
</body>
</html>
