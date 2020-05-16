<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    {{-- <script src="{{URL::asset('js/jquery.min.js')}}"></script> --}}
    <script src="{{URL::asset('js/jquery.dataTables.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="{{URL::asset('css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{URL::asset('css/bootstrap.min.css')}}">
    <title> @yield('title') </title>
    <style>
        .nav-link {
            display: inline-block;
            /* padding: 10px; */
            padding-left: 5px;
            padding-right: 5px;
        }

        /* .table tr td {
            border: #5bc0de solid 1px;
        }

        .table tr th {
            border: #5bc0de solid 1px;
        } */
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-7">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/matakuliah">Matakuliah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dosen">Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nilai">Nilai</a>
                    </li>
                </ul>
            </div>
            <div class="col-3"></div>
        </div><br>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="navbar-nav">
                    <h2 style="text-align: center; color: white;"> @yield('page_name') </h2>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <hr class="line">
                <style>
                    hr.line {
                        border: 0.5px solid #5bc0de;
                    }
                </style>
                <table class="table">
                    @yield('contentluas')
                </table>
                @yield('extra')
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#listMahasiswa').DataTable();
            $('#listMatakuliah').DataTable();
            $('#listDosen').DataTable();
            $('#listNilai').DataTable();
        });
    </script>
    <script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</body>

</html>