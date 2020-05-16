@extends('layouts.appuser')

@section('contentluas')
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <h5 class="card-header" style="background-color: #708090; color:white">Data Sukses Ditambahkan</h5>
                <div class="card-body">
                    <h5 class="card-title">{{ $data->matakuliah }}</h5>
                    <p class="card-text">
                        <b>Kode Matakuliah: </b>{{ $data->kode_mk }} <br>
                        <b>Sks: </b> {{ $data->sks }} <br>
                    </p>
                    <a href="/home/matakuliahuser" class="btn btn-primary">Kembali ke Daftar Matakuliah</a>
                </div>
            </div>
            @endsection