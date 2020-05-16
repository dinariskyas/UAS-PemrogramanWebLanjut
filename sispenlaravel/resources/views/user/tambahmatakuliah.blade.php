@extends('layouts.appuser')

@section('contentluas')
<h3>Tambah Matakuliah Baru</h3>
<hr>
<form action="/home/userSimpanMatakuliah" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Kode Matakuliah</label>
        <input type="text" name="kode_mk" required class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Matakuliah</label>
        <input type="text" class="form-control" name="matakuliah">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Sks</label>
        <input type="number" class="form-control" name="sks">
    </div>
    <input type="submit" value="Tambah Data" class="btn btn-primary btn-md float-right">
</form>
@endsection