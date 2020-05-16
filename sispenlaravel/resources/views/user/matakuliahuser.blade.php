@extends('layouts.appuser')

@section('contentluas')
<hr>
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>Matakuliah</h3>
        </div>
        <div class="col-6">
            <a href="/home/userTambahMatakuliah" class="btn btn-primary btn-md float-right">Tambah Data Matakuliah</a><br><br>
        </div>
    </div>
    <table class="table table-hover" id="listSekolah">
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
                    <a href="/home/userEditMatakuliah/ {{ $mk['id_matakuliah'] }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="/home/userDetailMatakuliah/{{ $mk['id_matakuliah'] }}" class="btn btn-primary btn-sm">Detail</a>
                    <a href="/home/userDeleteMatakuliah/{{ $mk['id_matakuliah'] }}" onclick="return confirm('Apakah Anda Ingin Menghapus {{ $mk['matakuliah'] }}?');" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection