<html>
<head>
	<title>Aplikasi Data Anggota Gereja</title>
</head>
<body>
	<h3>Data Anggota Gereja</h3>
	<p>Cari Data Anggota :</p>
	<form action="/anggota/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Anggota .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
		
	<br/>
 
	<a href="/anggota/tambah"> + Tambah Anggota Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Panggilan</th>
			<th>Tempat/Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Warga Negara</th>
			<th>Pekerjaan</th>
			<th>Alamat</th>
			<th>Tanggal Baptis/Oleh</th>
			<th>Keterangan</th>
			<th>Foto</th>
			<th>Action</th>
		</tr>
		@foreach($anggota as $p)
		<tr>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->nama_panggilan}}</td>
			<td>{{ $p->tempat_lahir}}/{{ $p->tanggal_lahir}}</td>
			<td>{{ $p->jenis_kelamin}}</td>
			<td>{{ $p->warga_negara}}</td>
			<td>{{ $p->pekerjaan}}</td>
			<td>{{ $p->alamat }}</td>
			<td>{{ $p->tanggal_baptis}}/{{ $p->baptis_oleh}}</td>
			<td>{{ $p->keterangan}}</td>
			<td>{{ $p->foto}}</td>
			<td>
				<a href="/anggota/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/anggota/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	<br/>
	Halaman : {{ $anggota->currentPage() }} <br/>
	Jumlah Data : {{ $anggota->total() }} <br/>
	Data Per Halaman : {{ $anggota->perPage() }} <br/>
 
 
	{{ $anggota->links() }}
 
 
</body>
</html>