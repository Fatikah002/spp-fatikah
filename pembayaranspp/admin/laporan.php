
<h5>Laporan Pembayaran SPP</h5>
<a href="cetak-laporan.php" class="btn btn-primary">Cetak Laporan</a>

 <hr>
 <table class="table table-striped table-bordered">
 	<tr class="fw-bold">
 		<td align=center valign=top >NO</td>
 		<td align=center valign=top>NISN</td>
 		<td align=center valign=top>NAMA</td>
 		<td align=center valign=top>KELAS</td>
 		<td align=center valign=top>TAHUN SPP</td>
 		<td align=center valign=top>NOMINAL DIBAYAR</td>
 		<td align=center valign=top>SUDAH BAYAR</td>
 		<td align=center valign=top>TANGGAL BAYAR</td>
 		<td align=center valign=top>PETUGAS</td>
 	</tr>
 	<?php
	include '../koneksi.php';
	$no = 1;
	$sql = "SELECT * FROM pembayaran,siswa,kelas,spp,petugas WHERE pembayaran.nisn=siswa.nisn AND siswa.id_kelas=kelas.id_kelas AND pembayaran.id_spp=spp.id_spp AND pembayaran.id_petugas=petugas.id_petugas ORDER BY tgl_bayar DESC";
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
		
	</tr>
	<?php } ?>
</table>