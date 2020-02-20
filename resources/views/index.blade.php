<html>
<head>
	<title>Aplikasi Data Anggota Gereja</title>
	<link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-light bg-light justify-content-between">
		<a href="#" class="navbar-left"><img src="salib.png" style="max-width:50px; margin-top: -7px;"></a>
		<a class="navbar-brand">DATA JEMAAT GEPEKRIS TANJUNGPANDAN</a>
		<form class="form-inline" action="/anggota/cari" method="GET">
		  <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Cari Jemaat .." value="{{ old('cari') }}" aria-label="Search">
		  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
		</form>
	  </nav>
	<div class="container">
	<br/>
 
	<a class="btn btn-success btn-sm" href="/anggota/tambah"> + Tambah Data Jemaat</a>
	
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
			<th>Warga Negara</th>
			<th>Pekerjaan</th>
			<th>Tanggal Baptis</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		@foreach($anggota as $key => $jemaat)
		<tr>
			<th scope="row">{{ ++$key }}</th>
			<td>{{ $jemaat->nama }}</td>
			<td>{{ $jemaat->nama_panggilan}}</td>
			<td>{{ $jemaat->tempat_lahir}}/{{ $jemaat->tanggal_lahir}}</td>
			<td>{{ $jemaat->jenis_kelamin}}</td>
			<td>{{ $jemaat->warga_negara}}</td>
			<td>{{ $jemaat->pekerjaan}}</td>
			<td>{{ $jemaat->tanggal_baptis}}</td>
			<td>
				<a class="btn btn-primary btn-sm" href="/anggota/detail/{{ $jemaat->id }}">Detail</a>
				<a class="btn btn-primary btn-sm" href="/anggota/edit/{{ $jemaat->id }}">Edit</a>
				<a class="btn btn-danger btn-sm" href="/anggota/hapus/{{ $jemaat->id }}">Hapus</a>
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