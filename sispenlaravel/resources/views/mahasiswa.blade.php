@extends('indexmaster')
@extends('layouts.app')
@section('title','Mahasiswa')


@section('contentluas')
{{-- <a href="/mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a> --}}
<h3>Mahasiswa</h3>
<hr>
<table class="table table-hover" id="listMahasiswa">
    <thead style="background-color: #708090; color:white">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach($mahasiswa as $mhs)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $mhs['nama'] }}</td>
            <td>
                <a href="/mahasiswa/detailMahasiswa/{{ $mhs['id_mahasiswa'] }}" class="btn btn-primary btn-sm">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection