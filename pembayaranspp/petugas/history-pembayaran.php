<?php
$nisn	= $_GET['nisn'];
?>
<h5>History Pembayaran</h5>

 <hr>
 <table class="table table-striped table-bordered">
 	<tr class="fw-bold">
 		<td align=center valign=top>NO</td>
 		<td align=center valign=top>NISN</td>
 		<td align=center valign=top>NAMA</td>
 		<td align=center valign=top>KELAS</td>
 		<td align=center valign=top>TAHUN SPP</td>
 		<td align=center valign=top>NOMINAL DIBAYAR</td>
 		<td align=center valign=top>SUDAH BAYAR</td>
 		<td align=center valign=top>TANGGAL BAYAR</td>
 		<td align=center valign=top>PETUGAS</td>
 		<td align=center valign=top>HAPUS</td>
 	</tr>
 	<?php
	include '../koneksi.php';
	$no = 1;
	$sql = "SELECT * FROM pembayaran,siswa,kelas,spp,petugas WHERE pembayaran.nisn=siswa.nisn AND siswa.id_kelas=kelas.id_kelas AND pembayaran.id_spp=spp.id_spp AND pembayaran.id_petugas=petugas.id_petugas AND pembayaran.nisn='$nisn' ORDER BY tgl_bayar DESC";
	$query = mysqli_query($koneksi, $sql);
	foreach ($query as $data ) {

		?>
	<tr>
		<td align=center><?= $no++ ?></td>
		<td><?= $data['nisn'] ?></td>
		<td><?= $data['nama'] ?></td>
		<td><?= $data['nama_kelas'] ?></td>
		<td><?= $data['tahun'] ?></td>
		<td><?= number_format($data['nominal'],2,',','.'); ?></td>
		<td><?= number_format($data['jumlah_bayar'],2,',','.'); ?></td>
		<td><?= $data['tgl_bayar'] ?></td>
		<td><?= $data['nama_petugas'] ?></td>
		<td>
			<center><a href="?url=hapus-pembayaran&id_pembayaran=<?= $data ['id_pembayaran'] ?>" class = "btn btn-danger">Hapus</a></center>
		</td>
	</tr>
	<?php } ?>
</table>