<!DOCTYPE html>
<html>
<head>
<title>Aplikasi Data Anggota Gereja</title>
<link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-light bg-light justify-content-between">
		<a href="#" class="navbar-left"><img src="../../salib.jpeg" style="max-width:70px; margin-top: -7px;"></a>
		<a class="navbar-brand">EDIT DATA JEMAAT GEREJA BARU</a>
		<a class="btn btn-success btn-sm" href="/anggota"><- Kembali</a>
	  </nav>
	  <div class="container">
	@foreach($anggota as $p)
	<form action="/anggota/update" method="post"  enctype="multipart/form-data">
		{{ csrf_field() }}
	<input type="hidden" name="id" value="{{ $p->id }}"><br>
		Foto <div>
			<td><img width="100px" src="{{ url('/data_foto/'.$p->foto) }}"></td>
			<Input type="file" name="foto"><br/>
		</div>
			<div class="row">
				<div class="col">
				  Nama <input class="form-control" type="text" name="nama" value="{{ $p->nama }}" required="required"> <br/>
				</div>
				<div class="col">
				  Nama Panggilan <input class="form-control" type="text" name="nama_panggilan" value="{{ $p->nama_panggilan }}" required="required"><br/>
				</div>
			  </div>
			  <div class="row">
				  <div class="col">
					  Tempat Lahir <Input class="form-control" type="text" name="tempat_lahir" value="{{ $p->tempat_lahir }}" required="required"><br/>
				  </div>
				  <div class="col">
					  Tanggal Lahir <Input class="form-control" type="date" name="tanggal_lahir" value="{{ $p->tanggal_lahir }}" required="required"><br/>
				  </div>
				</div>
				<div class="row">
				  <div class="col">
					  Baptis Oleh <Input class="form-control" type="text" name="baptis_oleh" value="{{ $p->baptis_oleh }}" required="required"><br/>
				  </div>
				  <div class="col">
					  Tanggal Baptis <input class="form-control" type="date" name="tanggal_baptis" value="{{ $p->tanggal_baptis }}" required="required"><br/>
				  </div>
				</div>
				<div class="row">
				  <div class="col">
					  Jenis Kelamin <select class="form-control" name="jenis_kelamin" required="required">
						  <option>{{ $p->jenis_kelamin }}</option>
						  <option>Perempuan</option>
						  <option>Laki-Laki</option>
						</select>
				  </div>
				  <div class="col">
					  Warga Negara <Input class="form-control" type="text" name="warga_negara" value="{{ $p->warga_negara }}" required="required"><br/>
				  </div>
				  <div class="col">
					  Pekerjaan <Input class="form-control" type="text" name="pekerjaan" value="{{ $p->pekerjaan }}" required="required"><br/>
				  </div>
				</div>
				<div class="row">
				  <div class="col">
					  Alamat <textarea class="form-control" name="alamat" required="required">{{ $p->alamat }}</textarea> <br/>
				  </div>
				  <div class="col">
					  Keterangan <textarea class="form-control" name="keterangan">{{ $p->keterangan }}</textarea><br/>
				  </div>
				</div>
  
		  <input class="btn btn-success btn-sm" type="submit" value="Simpan Data">
	</form>
	@endforeach
	  </div>
		
 
</body>
</html>