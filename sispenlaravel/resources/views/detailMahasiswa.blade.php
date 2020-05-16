@extends('indexmaster')
@extends('layouts.app')
@section('title','Mahasiswa')
@section('contentluas')
<h3>Detail Mahasiswa</h3>
<hr>
<table class="table table-hover">
    <thead style="background-color: #708090; color:white">
        <th>Kode</th>
        <th>Nama Mahasiswa</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Jurusan</th>
    </thead>
    <tbody>
        @foreach($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs['nim'] }}</td>
            <td>{{ $mhs['nama'] }}</td>
            <td>{{ $mhs['jeniskelamin'] }}</td>
            <td>{{ $mhs['alamat'] }}</td>
            <td>{{ $mhs['jurusan'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection