<?php
function formatRupiah($angka){
    return "Rp ".number_format($angka,0,",",".");
}
function hitungSaldo($pemasukan,$pengeluaran){
    return $pemasukan - $pengeluaran;
}
?>