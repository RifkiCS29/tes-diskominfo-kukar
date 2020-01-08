@extends('layouts.app')
@section('content')

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Pegawai</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class=" form-row">
            <div class="col-lg-12">
                <h3>Detail pegawai</h3>
            </div>
        </div>
        <br>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Pegawai</label>
            <div class="col-sm-10">
                {{$pegawai->nama}} 
            </div>
        </div>
        <div class="form-group row">
            <label for="nimpegawai" class="col-sm-2 col-form-label">NIP pegawai</label>
            <div class="col-sm-10">
                {{$pegawai->nip}}
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                 {{$pegawai->jabatan}}
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    {{$pegawai->alamat}}
                </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <a href="{{route('pegawai.index')}}" class="btn  btn-success">Kembali</a>
            </div>
        </div>

    </div>
</body>
</html>

@endsection