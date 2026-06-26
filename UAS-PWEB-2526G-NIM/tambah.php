<?php include 'koneksi.php';
if(isset($_POST['simpan'])){
$tanggal=$_POST['tanggal']; $jenis=$_POST['jenis']; $kategori=$_POST['kategori'];
$nominal=$_POST['nominal']; $keterangan=$_POST['keterangan'];
mysqli_query($conn,"INSERT INTO transaksi(tanggal,jenis,kategori,nominal,keterangan)
VALUES('$tanggal','$jenis','$kategori','$nominal','$keterangan')");
header("Location:data.php");
}
?><!DOCTYPE html><html><head><link rel='stylesheet' href='css/style.css'></head><body>
<?php include 'navbar.php'; ?>
<h2>Tambah Data</h2>
<form method='post'>
<input type='date' name='tanggal' required><br>
<select name='jenis'><option>Pemasukan</option><option>Pengeluaran</option></select><br>
<input type='text' name='kategori' placeholder='Kategori'><br>
<input type='number' name='nominal' placeholder='Nominal'><br>
<input type='text' name='keterangan' placeholder='Keterangan'><br>
<button name='simpan'>Simpan</button>
</form></body></html>