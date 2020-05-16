@extends('indexmaster')
@extends('layouts.app')
@section('title','Dosen')
@section('contentluas')
<h3>Detail Dosen</h3>
<hr>
<table class="table table-hover">
    <thead style="background-color: #708090; color:white">
        <th>Nip</th>
        <th>Nama Dosen</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Email</th>
    </thead>
    <tbody>
        @foreach($dosen as $dsn)
        <tr>
            <td>{{ $dsn['nip'] }}</td>
            <td>{{ $dsn['nama_dosen'] }}</td>
            <td>{{ $dsn['jeniskelamin'] }}</td>
            <td>{{ $dsn['alamat'] }}</td>
            <td>{{ $dsn['email'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection