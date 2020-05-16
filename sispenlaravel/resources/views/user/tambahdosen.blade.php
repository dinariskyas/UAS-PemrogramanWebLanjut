@extends('layouts.appuser')

@section('contentluas')
<h3>Tambah Dosen Baru</h3>
<hr>
<form action="/home/userSimpanDosen" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Nip</label>
        <input type="number" name="nip" required class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Dosen</label>
        <input type="text" class="form-control" name="nama_dosen">
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
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" name="email">
    </div>
    <input type="submit" value="Tambah Data" class="btn btn-primary btn-md float-right">
</form>
@endsection