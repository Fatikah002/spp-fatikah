<h5>Halaman Data Siswa.</h5>
<a href="?url=tambah-siswa" class="btn btn-primary"> Tambah Siswa </a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td align=center valign=top>NO</td>
        <td align=center valign=top>NISN</td>
        <td align=center valign=top>NIS</td>
        <td align=center valign=top>NAMA</td>
        <td align=center valign=top>KELAS</td>
        <td align=center valign=top>ALAMAT</td>
        <td align=center valign=top>NO. TELEPON</td>
        <td align=center valign=top>SPP</td>
        <td align=center valign=top>EDIT</td>
        <td align=center valign=top>HAPUS</td>
    </tr>
    <?php
    include'../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp ORDER BY nama ASC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data) { ?>
    <tr>
        <td align=center><?= $no++; ?></td>
        <td><?= $data['nisn'] ?></td>
        <td><?= $data['nis'] ?></td>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['nama_kelas'] ?></td>
        <td><?= $data['alamat'] ?></td>
        <td><?= $data['no_telp'] ?></td>
        <td><?= $data['tahun'] ?> -  <?= number_format($data['nominal'],2,',','.'); ?></td>

        
        <td>
            <center><a href="?url=edit-siswa&nisn=<?= $data['nisn'] ?>" class="btn btn-warning" >EDIT</a></center>
        </td>
        <td>
            <center><a onclick="return confrim('Apakah Anda Yakin Ingin Menghapus Data')" href="?url=hapus-siswa&nisn=<?= $data['nisn'] ?>" class="btn btn-danger" > HAPUS </a></center>
        </td>
    </tr>
    <?php } ?>
</table>