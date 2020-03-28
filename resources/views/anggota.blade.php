<table>
    <thead>
        <tr>
            <th>No</th>
            <th>No Anggota</th>
            <th>Status</th>
            <th>Nama</th>
            <th>Nama Panggilan</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Warga Negara</th>
            <th>Pekerjaan</th>
            <th>Alamat</th>
            <th>Tanggal Baptis</th>
            <th>Dibaptis Oleh</th>
            <th>Keterangan</th>
            <th>Foto</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach($anggota as $a)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $a->no_anggota }}</td>
            <td>{{ $a->status }}</td>
            <td>{{ $a->nama }}</td>
            <td>{{ $a->nama_panggilan }}</td>
            <td>{{ $a->tempat_lahir }}</td>
            <td>{{ $a->tanggal_lahir}}</td>
            <td>{{ $a->jenis_kelamin}}</td>
            <td>{{ $a->warga_negara}}</td>
            <td>{{ $a->pekerjaan}}</td>
            <td>{{ $a->alamat}}</td>
            <td>{{ $a->tanggal_baptis}}</td>
            <td>{{ $a->baptis_oleh}}</td>
            <td>{{ $a->keterangan}}</td>
            <td>{{ $a->foto}}</td>
        </tr>
    @endforeach
    </tbody>
</table>