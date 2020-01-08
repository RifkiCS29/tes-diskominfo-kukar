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
        <div class="row">
            <div class="col-md-10">
                <h3> Daftar Pegawai</h3>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-success" href="{{ route('pegawai.create')}}"> Tambah Data </a>
            </div>
        </div> 
        <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>        
        </div>
    @endif

    <table class="table table-striped">
      <thead>
        <tr>
            <th width="40px"><b>No.</b></th>
            <th width="180px">Nama pegawai</th>
            <th width="100px">NIP</th>
            <th width="100px">Jabatan</th>
            <th >Alamat</th>
            <th width="210px">Action</th>
        </tr>
      </thead>
        @foreach ($pegawais as $pegawai) 
            <tr>
                <td><b>{{++$i}}.<b></td>
                <td>{{$pegawai->nama}}</td>
                <td>{{$pegawai->nip}}</td>
                <td align="center">{{$pegawai->jabatan}}</td>
                <td>{{$pegawai->alamat}}</td>
                <td>
                    <form action="{{ route('pegawai.destroy',$pegawai->id) }}" method="post">
                    <a class="btn btn-sm btn-success" href="{{ route('pegawai.show', $pegawai->id)}}">Show</a>
                    <a class="btn btn-sm btn-warning" href="{{ route('pegawai.edit', $pegawai->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>    
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pegawais->links() !!}
    </div>
    </body>

</html>

@endsection