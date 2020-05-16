@extends('layouts.appuser')

@section('contentluas')
<h3>Detail Mahasiswa</h3>
<hr>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<table class="table table-hover">
    <thead style="background-color: #708090; color:white">
        <th>Nim</th>
        <th>Nama</th>
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