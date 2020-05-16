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
            <h3>Dosen</h3>
        </div>
        <div class="col-6">
            <a href="/home/userTambahDosen" class="btn btn-primary btn-md float-right">Tambah Data Dosen</a><br><br>
        </div>
    </div>
    <table class="table table-hover" id="listDosen">
        <thead style="background-color: #708090; color:white">
            <tr>
                <th>No</th>
                <th>Nama Dosen</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach($dosen as $dsn)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $dsn['nama_dosen'] }}</td>
                <td>
                    <a href="/home/userEditDosen/ {{ $dsn['id_dosen'] }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="/home/userDetailDosen/{{ $dsn['id_dosen'] }}" class="btn btn-primary btn-sm">Detail</a>
                    <a href="/home/userDeleteDosen/{{ $dsn['id_dosen'] }}" onclick="return confirm('Apakah Anda Ingin Menghapus {{ $dsn['nama_dosen'] }}?');" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection