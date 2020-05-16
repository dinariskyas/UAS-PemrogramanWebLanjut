@extends('indexmaster')
@extends('layouts.app')
@section('title','Matakuliah')

@section('contentluas')
{{-- <a href="/matakuliah/tambah" class="btn btn-primary">Tambah Data Matakuliah</a> --}}
<h3>Matakuliah</h3>
<hr>
<div class="container">
    <div class="row">
        <table class="table table-hover" id="listMatakuliah">
            <thead style="background-color: #708090; color:white">
                <tr>
                    <th>No</th>
                    <th>Nama Matakuliah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                @foreach($matakuliah as $mk)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $mk['matakuliah'] }}</td>
                    <td>
                        <a href="/matakuliah/detailMatakuliah/ {{ $mk['id_matakuliah'] }}" class="btn btn-primary btn-sm">Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endsection