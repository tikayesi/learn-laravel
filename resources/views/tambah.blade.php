<!DOCTYPE html>
<html>
<head>
<title>Aplikasi Data Anggota Gereja</title>
<link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
 
	<nav class="navbar navbar-light bg-light justify-content-between">
		<a href="#" class="navbar-left"><img src="../salib.jpeg" style="max-width:70px; margin-top: -7px;"></a>
		<a class="navbar-brand">TAMBAH DATA JEMAAT GEREJA BARU</a>
		<a class="btn btn-success btn-sm" href="/anggota"><- Kembali</a>
	  </nav>
	
	<div class="container">
	<form action="/anggota/store" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		Foto <Input type="file" name="foto"><br/>
			<div class="row">
				<div class="col">
				  Nomor Anggota <input class="form-control" type="text" name="no_anggota" placeholder="Tulis Nomor Anggota" required="required"> <br/>
				</div>
				<div class="col">
				  Status <select class="form-control" name="status" required="required">
					<option>Aktif</option>
					<option>Inaktif</option>
					<option>Meninggal</option>
					<option>Lain-lain</option>
				  </select>
				</div>
			  </div>
			<div class="row">
			  <div class="col">
				Nama <input class="form-control" type="text" name="nama" placeholder="Tulis Nama" required="required"> <br/>
			  </div>
			  <div class="col">
				Nama Panggilan <input class="form-control" type="text" name="nama_panggilan" placeholder="Tulis Nama Panggilan" required="required"><br/>
			  </div>
			</div>
			<div class="row">
				<div class="col">
					Tempat Lahir <Input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir" required="required"><br/>
				</div>
				<div class="col">
					Tanggal Lahir <Input class="form-control" type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" required="required"><br/>
				</div>
			  </div>
			  <div class="row">
				<div class="col">
					Baptis Oleh <Input class="form-control" type="text" name="baptis_oleh" placeholder="Baptis Oleh" required="required"><br/>
				</div>
				<div class="col">
					Tanggal Baptis <input class="form-control" type="date" name="tanggal_baptis" placeholder="Tanggal Baptis" required="required"><br/>
				</div>
			  </div>
			  <div class="row">
				<div class="col">
					Jenis Kelamin <select class="form-control" name="jenis_kelamin" required="required">
						<option>Perempuan</option>
						<option>Laki-Laki</option>
					  </select>
				</div>
				<div class="col">
					Warga Negara <Input class="form-control" type="text" name="warga_negara" placeholder="Warga Negara" required="required"><br/>
				</div>
				<div class="col">
					Pekerjaan <Input class="form-control" type="text" name="pekerjaan" placeholder="Pekerjaan" required="required"><br/>
				</div>
			  </div>
			  <div class="row">
				<div class="col">
					Alamat <textarea class="form-control" name="alamat" required="required"></textarea> <br/>
				</div>
				<div class="col">
					Keterangan <textarea class="form-control" name="keterangan"></textarea><br/>
				</div>
			  </div>

		<input class="btn btn-success btn-sm" type="submit" value="Simpan Data">
	</form>
	</div>
 
</body>
<nav class="navbar navbar-light bg-light justify-content-between">
	<a>© Copyright 2020 Create with ❤</a>
  </nav>
</html>