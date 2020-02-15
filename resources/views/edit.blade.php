<!DOCTYPE html>
<html>
<head>
<title>Aplikasi Data Anggota Gereja</title>
</head>
<body>
	<h3>Edit Anggota</h3>
 
	<a href="/anggota"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($anggota as $p)
	<form action="/anggota/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
		Nama Panggilan <input type="text" name="nama_panggilan" required="required" value="{{ $p->nama_panggilan }}"><br/>
		Tempat Lahir <Input type="text" name="tempat_lahir" required="required" value="{{ $p->tempat_lahir }}"><br/>
		Tanggal Lahir <Input type="date" name="tanggal_lahir" required="required" value="{{ $p->tanggal_lahir }}"><br/>
		Jenis Kelamin <Input type="text" name="jenis_kelamin" required="required" value="{{ $p->jenis_kelamin }}"><br/>
		Warga Negara <Input type="text" name="warga_negara" required="required" value="{{ $p->warga_negara }}"><br/>
		Pekerjaan <Input type="text" name="pekerjaan" required="required" value="{{ $p->pekerjaan }}"><br/>
		Alamat <textarea name="alamat" required="required">{{ $p->alamat }}</textarea> <br/>
		Tanggal Baptis <input type="date" name="tanggal_baptis" required="required" value="{{ $p->tanggal_baptis }}"><br/>
		Baptis Oleh <Input type="text" name="baptis_oleh" required="required" value="{{ $p->baptis_oleh }}"><br/>
		Keterangan <textarea name="keterangan">{{ $p->keterangan }}</textarea><br/>
		Foto <Input type="text" name="foto" value="{{ $p->foto }}"><br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>