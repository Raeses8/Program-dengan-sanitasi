<?php
$koneksi = mysqli_connect("localhost", "root", "", "universitas");
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?>
<h2>Data Mahasiswa</h2>
<table border="1" cellpadding="8">
<tr>
<th>ID</th><th>Nama</th><th>Alamat</th><th>No HP</th><th>Umur</th><th>Status</th><th>Hobi</th>
</tr>
<?php while($row = mysqli_fetch_assoc($data)) { ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['nama'] ?></td>
<td><?= $row['alamat'] ?></td>
<td><?= $row['hp'] ?></td>
<td><?= $row['umur'] ?></td>
<td><?= $row['status_kawin'] ?></td>
<td><?= $row['hobi'] ?></td>
</tr>
<?php } ?>
</table>
