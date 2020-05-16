@extends('layouts.appuser')

@section('contentluas')
<h3>Edit Matakuliah</h3>
<hr>
<form action="/home/userUpdateMatakuliah" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Kode Matakuliah</label>
        <input type="hidden" name="id_matakuliah" value="{{ $matakuliah['id_matakuliah'] }}" required class="form-control">
        <input type="text" name="kode_mk" value="{{ $matakuliah['kode_mk'] }}" required class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Matakuliah</label>
        <input type="text" class="form-control" value="{{ $matakuliah['matakuliah'] }}" name="matakuliah">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Sks</label>
        <input type="text" class="form-control" value="{{ $matakuliah['sks'] }}" name="sks">
    </div>
    <input type="submit" value="Edit Data" class="btn btn-primary btn-md float-right">
</form>
@endsection