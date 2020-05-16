@extends('layouts.appuser')

@section('contentluas')
<h3>Edit Mahasiswa</h3>
<hr>
<form action="/home/userUpdateMahasiswa" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Nim</label>
        <input type="hidden" name="id_mahasiswa" value="{{ $mahasiswa['id_mahasiswa'] }}" required class="form-control">
        <input type="number" name="nim" value="{{ $mahasiswa['nim'] }}" required class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Mahasiswa</label>
        <input type="text" class="form-control" value="{{ $mahasiswa['nama'] }}" name="nama">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Jenis Kelamin</label>
        <input type="text" class="form-control" value="{{ $mahasiswa['jeniskelamin'] }}" name="jeniskelamin">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
        <input type="text" class="form-control" value="{{ $mahasiswa['alamat'] }}" name="alamat">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Jurusan</label>
        <input type="text" class="form-control" value="{{ $mahasiswa['jurusan'] }}" name="jurusan">
    </div>
    <input type="submit" value="Edit Data" class="btn btn-primary btn-md float-right">
</form>
@endsection