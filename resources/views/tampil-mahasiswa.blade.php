<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Data mahasiswa</title>
  </head>

  @extends('layouts.app')

  @section('content')
    <div class="py-4 d-flex justify-content-end align-items-center">
    <h2 class="mr-auto">Data Mahasiswa</h2>
  </div>
  @if (session()->has('pesan'))
    <div class="alert alert-success">
        {{session()->get('pesan')}}
    </div>
    @endif
 

@forelse ($mahasiswas as $mahasiswa)
<div class="ml-5">
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <h3># {{$loop->iteration}}</h3>
      <h4>{{$mahasiswa->nama}}</h4>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><a href="{{route('mahasiswa.detail',['mahasiswa'=>$mahasiswa->id])}}">{{$mahasiswa->nim}}</a></h5>
        <p class="card-text">Fakultas &nbsp: {{$mahasiswa->fakultas}}</p>
        <p class="card-text">Jurusan &nbsp : {{$mahasiswa->jurusan}}</p>
      </div>
    </div>
  </div>
</div>
</div>
@empty
        <p class="text-center"> Data mahasiswa Tidak Ada... </p>
    @endforelse

@endsection

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
</html>