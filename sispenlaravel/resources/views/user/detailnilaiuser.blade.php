@extends('layouts.appuser')

@section('contentluas')
<h3>Detail Nilai</h3>
<hr>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<table class="table table-hover">
    <thead style="background-color: #708090; color:white">
        <th>Nama Dosen</th>
        <th>Nama Matakuliah</th>
        <th>Nama Mahasiswa</th>
        <th>Nilai</th>
    </thead>
    <tbody>
        @foreach($nilai as $nilai)
        <tr>
            <td>{{ $nilai['nama_dosen'] }}</td>
            <td>{{ $nilai['matakuliah'] }}</td>
            <td>{{ $nilai['nama'] }}</td>
            <td>{{ $nilai['nilai'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection