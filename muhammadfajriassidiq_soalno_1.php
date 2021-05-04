<?php
function kalkulatorSederhana($harga, $jumlah, $pembayaran){
    $hasil= $harga * $jumlah;
    $kembalian = $pembayaran - $hasil;
    echo ('kembalian' + $kembalian);
}
kalkulatorSederhana(1000, 6, 7000);
?>
