@extends('layouts.appuser')

@section('contentluas')
<h3>Edit Data Nilai </h3>
<hr>
<form action="/home/userUpdateNilai" method="POST">
    {{ csrf_field() }}
    <div class=" form-group">
        <input type="hidden" name="id_nilai" value="{{ $nilai['id_nilai'] }}">
        <label for="exampleFormControlSelect1">Nama Dosen</label>
        <select class="form-control" name="id_dosen" required>
            <optgroup label="Pilih Dosen">
                @foreach($dosen as $ds)
                <option value="{{ $ds['id_dosen']}}">{{ $ds['nama_dosen'] }}</option>
                @endforeach
            </optgroup>
        </select>
    </div>
    <div class=" form-group">
        <label for="exampleFormControlSelect1">Nama Mahasiswa</label>
        <select class="form-control" name="id_mahasiswa" required>
            <optgroup label="Pilih Mahasiswa">
                @foreach($mahasiswa as $mhs)
                <option value="{{ $mhs['id_mahasiswa']}}">{{ $mhs['nama'] }}</option>
                @endforeach
            </optgroup>
        </select>
    </div>
    <div class=" form-group">
        <label for="exampleFormControlSelect1"> Matakuliah</label>
        <select class="form-control" name="id_matakuliah" required>
            <optgroup label="Pilih matakuliah">
                @foreach($matakuliah as $matkul)
                <option value="{{ $matkul['id_matakuliah']}}">{{ $matkul['matakuliah'] }}</option>
                @endforeach
            </optgroup>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nilai</label>
        <input type="number" class="form-control" name="nilai" value="{{ $nilai['nilai'] }}">
    </div>

    <input type="submit" value="Edit Data" class="btn btn-primary btn-md float-right">
    <a href="/home/nilaiuser" class="btn btn-success btn-md float-right">Kembali</a>
</form>
@endsection