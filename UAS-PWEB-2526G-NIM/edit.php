<?php include 'koneksi.php';
$id=$_GET['id'];
$data=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM transaksi WHERE id=$id"));
if(isset($_POST['update'])){
$tanggal=$_POST['tanggal']; $jenis=$_POST['jenis']; $kategori=$_POST['kategori'];
$nominal=$_POST['nominal']; $keterangan=$_POST['keterangan'];
mysqli_query($conn,"UPDATE transaksi SET tanggal='$tanggal',jenis='$jenis',kategori='$kategori',
nominal='$nominal',keterangan='$keterangan' WHERE id=$id");
header("Location:data.php");
}
?><html><head><link rel='stylesheet' href='css/style.css'></head><body>
<?php include 'navbar.php'; ?>
<h2>Edit Data</h2>
<form method='post'>
<input type='date' name='tanggal' value='<?= $data["tanggal"] ?>'><br>
<input type='text' name='kategori' value='<?= $data["kategori"] ?>'><br>
<input type='number' name='nominal' value='<?= $data["nominal"] ?>'><br>
<input type='text' name='keterangan' value='<?= $data["keterangan"] ?>'><br>
<button name='update'>Update</button>
</form></body></html>