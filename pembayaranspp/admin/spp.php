<h5>Halaman Data SPP</h5>
<a href="?url=tambah-spp" class="btn btn-primary"> Tambah SPP </a>
 <hr>
 <table class="table table-striped table-bordered">
 	<tr class="fw-bold">
 		<td align=center valign=top >NO</td>
 		<td align=center valign=top>TAHUN</td>
 		<td align=center valign=top>NOMINAL</td>
 		<td align=center valign=top>EDIT</td>
 		<td align=center valign=top>HAPUS</td>
 	</tr>
 	<?php
	include '../koneksi.php';
	$no = 1;
	$sql = "SELECT * FROM spp ORDER BY id_spp DESC ";
	$query = mysqli_query($koneksi, $sql);
	foreach ($query as $data ) { ?>
	<tr>
		<td align=center><?= $no++ ?></td>
		<td><?= $data['tahun'] ?></td>
		<td><?= $data['nominal'] ?></td>
		<td>
			<center><a href="?url=edit-spp&id_spp=<?= $data ['id_spp'] ?>" class = "btn btn-warning">EDIT</a></center>
		</td>
		<td>
			<center><a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"href="?url=hapus-spp&id_spp=<?= $data ['id_spp'] ?>" class = "btn btn-danger">HAPUS</a></center>
		</td>
	</tr>
	<?php } ?>
	
 </table>