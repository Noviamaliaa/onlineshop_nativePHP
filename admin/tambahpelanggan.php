<h2>Tambah Pelanggan</h2>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" name="email">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" class="form-control" name="password">
	</div>
	<div class="form-group">
		<label>No Telepon</label>
		<input type="text" class="form-control" name="telepon">
	</div>
	
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php 
	if(isset($_POST['save'])){
		$koneksi->query("INSERT INTO pelanggan (nama_pelanggan, email_pelanggan, password_pelanggan,  telpon_pelanggan)
			VALUES ('$_POST[nama]', '$_POST[email]', '$_POST[password]', '$_POST[telepon]')");
		echo "<div class='alert alert-info'>Data Tersimpan</div>";
		echo "<script>location='index.php?halaman=pelanggan';</script>";
	}
?>