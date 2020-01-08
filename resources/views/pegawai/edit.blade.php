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
                <h3>Edit Data Pegawai</h3>
            </div>
        </div>
        <br>

        @if ($errors->all())
            <div class="alert alert-danger">
                <strong>Whoops! </strong> Ada permasalahan inputanmu.<br>
                <ul>
                    @foreach ($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{route('pegawai.update',$pegawai->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama pegawai</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="nama" value="{{$pegawai->nama}}" placeholder="Nama pegawai">
                </div>
            </div>
            <div class="form-group row">
                <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                    <input type="text" name="nip"  class="form-control" id="nip" value="{{$pegawai->nip}}" placeholder="NIP pegawai">
                </div>
            </div>
            <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <select id="jabatan" name="jabatan"class="form-control">
                        <option {{$pegawai->jabatan == 'Ess2' ? 'selected' : ''}} value="Ess2"> Esselon 2</option>
                        <option {{$pegawai->jabatan == 'Ess3' ? 'selected' : ''}} value="Ess3"> Esselon 3</option>
                        <option {{$pegawai->jabatan == 'Ess4' ? 'selected' : ''}} value="Ess4"> Esselon 4</option>
                        <option {{$pegawai->jabatan == 'Staff' ? 'selected' : ''}} value="Staff"> Staff</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="alamat" rows="8" cols="80" placeholder="Masukkan Alamat">{{$pegawai->alamat}}</textarea>
                    </div>
            </div>

             <hr>
                <div class="form-group">
                    <a href="{{route('pegawai.index')}}" class="btn btn-success">Kembali</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
        </form>

    </div>
    </body>
</html>
    
@endsection