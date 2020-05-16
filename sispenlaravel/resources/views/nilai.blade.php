@extends('indexmaster')
@extends('layouts.app')
@section('title','Nilai')


@section('contentluas')
{{-- <a href="/nilai/tambah" class="btn btn-primary">Tambah Data Nilai</a> --}}
<h3>Nilai</h3>
<hr>
<table class="table table-hover" id="listMahasiswa">
    <thead style="background-color: #708090; color:white">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Matakuliah</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach($nilai as $nl)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $nl['nama'] }}</td>
            <td>{{ $nl['matakuliah'] }}</td>
            <td>{{ $nl['nilai'] }}</td>
            <td>
                <a href="/nilai/detailNilai/{{ $nl['id_nilai'] }}" class="btn btn-primary btn-sm">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection