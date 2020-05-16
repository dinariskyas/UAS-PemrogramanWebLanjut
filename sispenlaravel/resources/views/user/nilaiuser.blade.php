@extends('layouts.appuser')

@section('contentluas')

<hr>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>Nilai</h3>
        </div>
        <div class="col-6">
            <a href="/home/userTambahNilai" class="btn btn-primary btn-md float-right">Tambah Data Nilai</a><br><br>
        </div>
    </div>

    <table class="table table-hover" id="listNilai">
        <thead style="background-color: #708090; color:white">
            <tr>
                <th>No</th>
                <th>Nama Dosen</th>
                <th>Nama Mahasiswa</th>
                <th>Nilai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach($nilai as $nilai)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $nilai['nama_dosen'] }}</td>
                <td>{{ $nilai['nama'] }}</td>
                <td>{{ $nilai['nilai'] }}</td>
                <td>
                    <a href="/home/userEditNilai/{{ $nilai['id_nilai'] }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="/home/userDetailNilai/{{ $nilai['id_nilai'] }}" class="btn btn-primary btn-sm">Detail</a>
                    <a href="/home/userDeleteNilai/{{ $nilai['id_nilai'] }}" onclick="return confirm('Apakah Anda Ingin Menghapus {{ $nilai['nama'] }}?');" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection