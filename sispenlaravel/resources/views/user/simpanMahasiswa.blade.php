@extends('layouts.appuser')

@section('contentluas')

<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <h5 class="card-header" style="background-color: #708090; color:white">Data Sukses Ditambahkan</h5>
                <div class="card-body">
                    <h5 class="card-title">{{ $data->nama }}</h5>
                    <p class="card-text">
                        <b>Nim: </b>{{ $data->nim }} <br>
                        <b>Jenis Kelamin: </b> {{ $data->jeniskelamin }} <br>
                        <b>alamat : </b> {{ $data->alamat }} <br>
                        <b>jurusan : </b> {{ $data->jurusan }} <br>
                    </p>
                    <a href="/home/mahasiswauser" class="btn btn-primary">Kembali ke Daftar Mahasiswa</a>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
@endsection