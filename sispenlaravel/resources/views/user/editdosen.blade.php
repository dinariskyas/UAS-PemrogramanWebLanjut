@extends('layouts.appuser')

@section('contentluas')
<h3>Edit Dosen</h3>
<hr>
<form action="/home/userUpdateDosen" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Nip</label>
        <input type="hidden" name="id_dosen" value="{{ $dosen['id_dosen'] }}" required class="form-control">
        <input type="number" name="nip" value="{{ $dosen['nip'] }}" required class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Dosen</label>
        <input type="text" class="form-control" value="{{ $dosen['nama_dosen'] }}" name="nama_dosen">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Jenis Kelamin</label>
        <input type="text" class="form-control" value="{{ $dosen['jeniskelamin'] }}" name="jeniskelamin">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
        <input type="text" class="form-control" value="{{ $dosen['alamat'] }}" name="alamat">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" value="{{ $dosen['email'] }}" name="email">
    </div>
    <input type="submit" value="Edit Data" class="btn btn-primary btn-md float-right">
</form>
@endsection