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
        <th>Kode Matakuliah</th>
        <th>Matakuliah</th>
        <th>Sks</th>
    </thead>
    <tbody>
        @foreach($matakuliah as $mk)
        <tr>
            <td>{{ $mk['kode_mk'] }}</td>
            <td>{{ $mk['matakuliah'] }}</td>
            <td>{{ $mk['sks'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection