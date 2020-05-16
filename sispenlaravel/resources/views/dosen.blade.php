@extends('indexmaster')
@extends('layouts.app')
@section('title','Dosen')


@section('contentluas')
{{-- <a href="/dosen/tambah" class="btn btn-primary">Tambah Data Dosen</a> --}}
<h3>Dosen</h3>
<hr>
<table class="table table-hover" id="listMahasiswa">
    <thead style="background-color: #708090; color:white">
        <tr>
            <th>No</th>
            <th>Nama Dosen</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach($dosen as $dsn)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $dsn['nama_dosen'] }}</td>
            <td>
                <a href="/dosen/detailDosen/{{ $dsn['id_dosen'] }}" class="btn btn-primary btn-sm">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection