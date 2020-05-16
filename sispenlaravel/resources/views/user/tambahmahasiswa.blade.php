@extends('layouts.appuser')

@section('contentluas')
<h3>Tambah Mahasiswa Baru</h3>
<hr>
<form action="/home/userSimpanMahasiswa" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Nim</label>
        <input type="number" name="nim" required class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Mahasiswa</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Jenis Kelamin</label>
        <input type="text" class="form-control" name="jeniskelamin">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
        <input type="text" class="form-control" name="alamat">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Jurusan</label>
        <input type="text" class="form-control" name="jurusan">
    </div>
    <input type="submit" value="Tambah Data" class="btn btn-primary btn-md float-right">
</form>
@endsection