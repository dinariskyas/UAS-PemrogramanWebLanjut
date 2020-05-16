@extends('indexmaster')
@extends('layouts.app')
@section('title','Matakuliah')
@section('contentluas')
<h3>Detail Matakuliah</h3>
<hr>
<table class="table table-hover">
    <thead style="background-color: #708090; color:white">
        <th>Kode</th>
        <th>Nama Matakuliah</th>
        <th>SKS</th>
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