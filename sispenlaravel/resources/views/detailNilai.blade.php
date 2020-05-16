@extends('indexmaster')
@extends('layouts.app')
@section('title','Nilai')
@section('contentluas')
<h3>Detail Nilai</h3>
<hr>
<table class="table table-hover">
    <thead style="background-color: #708090; color:white">
        <th>Nama Dosen</th>
        <th>Nama Matakuliah</th>
        <th>Nama Mahasiswa</th>
        <th>Nilai</th>
    </thead>
    <tbody>
        @foreach($nilai as $nl)
        <tr>
            <td>{{ $nl['nama_dosen'] }}</td>
            <td>{{ $nl['matakuliah'] }}</td>
            <td>{{ $nl['nama'] }}</td>
            <td>{{ $nl['nilai'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection