<?php
function kalkulatorSederhana(){
    $uang1 = 10000 * 3;
    $uang2 = 5000 * 4;
    $uang3 = 20000 * 5;
    $total = $uang1 + $uang2 + $uang3;
    $kembalian = $total - 55000;
    return $kembalian;


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Fajri Assidiq php logic 2</title>
</head>
<body>
    <p>Kembalian yang diterima Setyo Rp.<?= KalkulatorSederhana();?></p>
</body>
</html>