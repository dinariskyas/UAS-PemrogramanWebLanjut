@extends('layouts.appuser')

@section('contentluas')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="background-color: #708090;color:white">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ Auth::user()->name }} are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection