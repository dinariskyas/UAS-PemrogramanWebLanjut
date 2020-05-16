@extends('layouts.appuser')

@section('contentluas')
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <h5 class="card-header" style="background-color: #708090; color:white">Data Sukses Ditambahkan</h5>
                <div class="card-body">
                    <h5 class="card-title">{{ $data->nama_dosen }}</h5>
                    <p class="card-text">
                        <b>Nip: </b>{{ $data->nip }} <br>
                        <b>Jenis Kelamin: </b> {{ $data->jeniskelamin }} <br>
                        <b>Alamat: </b> {{ $data->alamat }} <br>
                        <b>Email: </b> {{ $data->email }} <br>
                    </p>
                    <a href="/home/dosenuser" class="btn btn-primary">Kembali ke Daftar Dosen</a>
                </div>
            </div>
            @endsection