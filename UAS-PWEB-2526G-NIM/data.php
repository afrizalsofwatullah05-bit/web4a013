<?php include 'koneksi.php'; include 'function.php'; ?>
<!DOCTYPE html><html><head><link rel='stylesheet' href='css/style.css'></head><body>
<?php include 'navbar.php'; ?>
<h2>Daftar Transaksi</h2>
<table border='1' cellpadding='8'>
<tr><th>No</th><th>Tanggal</th><th>Jenis</th><th>Kategori</th><th>Nominal</th><th>Keterangan</th><th>Aksi</th></tr>
<?php $no=1; $q=mysqli_query($conn,"SELECT * FROM transaksi");
while($d=mysqli_fetch_assoc($q)){ ?>
<tr>
<td><?= $no++ ?></td>
<td><?= $d['tanggal'] ?></td>
<td><?= $d['jenis'] ?></td>
<td><?= $d['kategori'] ?></td>
<td><?= formatRupiah($d['nominal']) ?></td>
<td><?= $d['keterangan'] ?></td>
<td><a href='edit.php?id=<?= $d['id'] ?>'>Edit</a> |
<a href='hapus.php?id=<?= $d['id'] ?>'>Hapus</a></td>
</tr>
<?php } ?>
</table></body></html>