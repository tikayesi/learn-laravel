<html>
<head>
	<title>Aplikasi Data Anggota Gereja</title>
	<link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-light bg-light justify-content-between">
		<a href="#" class="navbar-left"><img src="salib.jpeg" style="max-width:70px; margin-top: -7px;"></a>
		<a class="navbar-brand">DATA JEMAAT GEPEKRIS TANJUNGPANDAN</a>
		<form class="form-inline" action="/anggota/cari" method="GET">
		  <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Cari Jemaat .." value="{{ old('cari') }}" aria-label="Search">
		  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
		</form>
	  </nav>
	<div class="container">
	<br/>
	<div class="row">
		<div class="col">
	<a href="/anggota/export_excel" class="btn btn-success btn-sm" target="_blank">EXPORT EXCEL</a>
		</div>
		<div class="col-2">
	<a class="btn btn-success btn-sm" href="/anggota/tambah"> + Tambah Data Jemaat</a>
		</div>
	</div>
	<br/>
	<br/>
	<div class="table-responsive">
	<table class="table table-striped">
		<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Panggilan</th>
			<th>Tempat/Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Pekerjaan</th>
			<th>Tanggal Baptis</th>
			<th>Foto</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		@foreach($anggota as $key => $jemaat)
		<tr>
			<th scope="row">{{ ++$key }}</th>
			<td>{{ $jemaat->nama }}</td>
			<td>{{ $jemaat->nama_panggilan}}</td>
			<td>{{ $jemaat->tempat_lahir}}/{{ date('d-M-Y', strtotime($jemaat->tanggal_lahir))}}</td>
			<td>{{ $jemaat->jenis_kelamin}}</td>
			<td>{{ $jemaat->pekerjaan}}</td>
			<td>{{ date('d-M-Y', strtotime($jemaat->tanggal_baptis))}}</td>
			<td><img width="75px" src="{{ url('/data_foto/'.$jemaat->foto) }}"></td>
			<td>
				<a class="btn btn-primary btn-sm" href="/anggota/detail/{{ $jemaat->id }}">Detail</a>
				<a class="btn btn-primary btn-sm" href="/anggota/edit/{{ $jemaat->id }}">Edit</a>
				<a class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus {{ $jemaat->nama_panggilan}} ?')" href="/anggota/hapus/{{ $jemaat->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</tbody>
	</table>
	{{ $anggota->links() }}
	</div>
	</div>
	<br/>

 
 
</body>
<nav class="navbar navbar-light bg-light justify-content-between">
	<a>Create with love @2020</a>
  </nav>
</html>