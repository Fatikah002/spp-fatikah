<h5>Halaman Tambah Data SPP</h5>

<a href="?url=spp" class="btn btn-secondary">KEMBALI</a>
<hr>
<form method="post" action="?url=proses-tambah-spp">
	<div class="form-group mb-2">
		<label>Tahun</label>
		<input type="number" name="tahun" maxlenght="4" class="form-control" required>
	</div>
	<div class="form-group mb-2">
		<label>Nominal</label>
		<input type="number" name="nominal" maxlenght="13" class="form-control" required>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success"> SIMPAN</button>
		<button type="reset" class="btn btn-danger"> KOSONGKAN</button>
	</div>
</form>