<h5>Halaman Data Petugas</h5>
<a href="?url=tambah-petugas" class="btn btn-primary"> Tambah Petugas </a>
 <hr>
 <table class="table table-striped table-bordered">
 	<tr class="fw-bold">
 		<td align=center valign=top>No</td>
 		<td align=center valign=top>USERNAME</td>
 		<td align=center valign=top>PASSWORD</td>
 		<td align=center valign=top>NAMA PETUGAS</td>
 		<td align=center valign=top>LEVEL</td>
 		<td align=center valign=top>EDIT</td>
 		<td align=center valign=top>HAPUS</td>
 	</tr>
 	<?php
	include '../koneksi.php';
	$no = 1;
	$sql = "SELECT * FROM petugas ORDER BY id_petugas DESC ";
	$query = mysqli_query($koneksi, $sql);
	foreach ($query as $data ) { ?>
	<tr>
		<td align=center><?= $no++ ?></td>
		<td><?= $data['username'] ?></td>
		<td><?= $data['password'] ?></td>
		<td><?= $data['nama_petugas'] ?></td>
		<td><?= $data['level'] ?></td>
		
		<td>
			<center><a href="?url=edit-petugas&id_petugas=<?= $data ['id_petugas'] ?>" class = "btn btn-warning">EDIT</a></center>
		</td>
		<td>
			<center><a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"href="?url=hapus-petugas&id_petugas=<?= $data ['id_petugas'] ?>" class = "btn btn-danger">HAPUS</a></center>
		</td>
	</tr>
	<?php } ?>
	
 </table>