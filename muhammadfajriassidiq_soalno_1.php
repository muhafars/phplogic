<?php
function kalkulatorSederhana($harga, $jumlah, $pembayaran){
    $hasil= $harga * $jumlah;
    $kembalian = $pembayaran - $hasil;
   return $kembalian;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Uang kembalian yang diterima andi  Rp.<?= kalkulatorSederhana(1000, 6, 7000);
?></p>
</body>
</html>