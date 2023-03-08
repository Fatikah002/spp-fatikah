<h5>Halaman Data Kelas</h5>
<a href="?url=tambah-kelas" class="btn btn-primary"> Tambah Kelas </a>
 <hr>
 <table class="table table-striped table-bordered">
 	<tr class="fw-bold">
 		<td align=center valign=top>NO</td>
 		<td align=center valign=top>NAMA KELAS</td>
 		<td align=center valign=top>KOMPETENSI KEAHLIAN</td>
 		<td align=center valign=top>EDIT</td>
 		<td align=center valign=top>HAPUS</td>
 	</tr>
 	<?php
	include '../koneksi.php';
	$no = 1;
	$sql = "SELECT* FROM kelas ORDER BY id_kelas DESC ";
	$query = mysqli_query($koneksi, $sql);
	foreach ($query as $data ) { ?>
	<tr>
		<td align=center><?= $no++ ?></td>
		<td><?= $data['nama_kelas'] ?></td>
		<td><?= $data['kompetensi_keahlian'] ?></td>
		<td>
			<center><a href="?url=edit-kelas&id_kelas=<?= $data ['id_kelas'] ?>" class = "btn btn-warning">EDIT</a></center>
		</td>
		<td>
			<center><a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"href="?url=hapus-kelas&id_kelas=<?= $data ['id_kelas'] ?>" class = "btn btn-danger">HAPUS</a></center>
		</td>
	</tr>
	<?php } ?>
	
 </table>