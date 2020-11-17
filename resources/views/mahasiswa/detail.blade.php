<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Detail</title>
  </head>
  
  @extends('layouts.app')

  @section('content')

  <div class="py-4 d-flex justify-content-end align-items-center">
        <h2 class="mr-auto">Detail {{$mahasiswa->nama}}</h2>
        <a href="{{route('mahasiswa.index')}}" class="btn btn-light">
        Kembali
    </a>
    </div>

    <div class="card w-50">
  <div class="card-body">
    <h5 class="card-title">{{$mahasiswa->nama}}</h5>
    <ul>
        <li>NIM : {{$mahasiswa->nim}}</li>
        <li>Nama : {{$mahasiswa->nama}}</li>
        <li>Tempat Lahir : {{$mahasiswa->tempat_lahir}}</li>
        <li>Tanggal Lahir : {{$mahasiswa->tanggal_lahir}}</li>
        <li>Fakultas : {{$mahasiswa->fakultas}}</li>
        <li>Jurusan : {{$mahasiswa->jurusan}}</li>
        <li>IPK : {{$mahasiswa->ipk}}</li>
        <li>Diinput pada : {{$mahasiswa->created_at}}</li>
        <li>Diupdate pada : {{$mahasiswa->updated_at}}</li>
    </ul>
    <form action="{{route('mahasiswa.delete',['mahasiswa'=>$mahasiswa->id])}}" method="POST">
      @method('DELETE')
      @csrf
      <a href="{{route('mahasiswa.edit',['mahasiswa'=>$mahasiswa->id])}}" class="btn btn-primary">
        Edit Mahasiswa
    </a>
      <button type="submit" class="btn btn-danger ml-3">Hapus</button>
    </form>
  </div>
</div>
@endsection
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>