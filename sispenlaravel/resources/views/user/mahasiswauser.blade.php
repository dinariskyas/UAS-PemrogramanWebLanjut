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
            <h3>Mahasiswa</h3>
        </div>
        <div class="col-6">
            <a href="/home/userTambahMahasiswa" class="btn btn-primary btn-sm float-right">Tambah Data Mahasiswa</a><br><br>
        </div>
    </div>
    <table class="table table-hover" id="listMahasiswa">
        <thead style="background-color: #708090; color:white">
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach($mahasiswa as $mhs)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $mhs['nama'] }}</td>
                <td>
                    <a href="/home/userEditMahasiswa/ {{ $mhs['id_mahasiswa'] }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="/home/userDetailMahasiswa/{{ $mhs['id_mahasiswa'] }}" class="btn btn-primary btn-sm">Detail</a>
                    <a href="/home/userDeleteMahasiswa/{{ $mhs['id_mahasiswa'] }}" onclick="return confirm('Apakah Anda Ingin Menghapus {{ $mhs['nama'] }}?');" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection