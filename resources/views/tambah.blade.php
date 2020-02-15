<!DOCTYPE html>
<html>
<head>
<title>Aplikasi Data Anggota Gereja</title>
</head>
<body>
 
<h3>Data Anggota Gereja</h3>
 
	<a href="/anggota"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/anggota/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Nama Panggilan <input type="text" name="nama_panggilan" required="required"><br/>
		Tempat Lahir <Input type="text" name="tempat_lahir" required="required"><br/>
		Tanggal Lahir <Input type="date" name="tanggal_lahir" required="required"><br/>
		Jenis Kelamin <Input type="text" name="jenis_kelamin" required="required"><br/>
		Warga Negara <Input type="text" name="warga_negara" required="required"><br/>
		Pekerjaan <Input type="text" name="pekerjaan" required="required"><br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		Tanggal Baptis <input type="date" name="tanggal_baptis" required="required"><br/>
		Baptis Oleh <Input type="text" name="baptis_oleh" required="required"><br/>
		Keterangan <textarea name="keterangan"></textarea><br/>
		Foto <Input type="text" name="foto"><br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>