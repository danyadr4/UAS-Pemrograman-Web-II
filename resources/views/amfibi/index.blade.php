<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo - UAS Pemrograman Web 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">KEBUN BINATANG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('welcome')}}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('zoo-about')}}">About</a>
            </li>
            @auth
            <li class="nav-item">
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="btn btn-light">Logout</button>
            </form>
            </li>
            @else
            <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            @endauth
        </ul>
        </div>
    </div>
</nav>

    <div class="container">
    <div class="row">
    <h1>Ini amfibi</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">No Binatang</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Kandang</th>
      <th scope="col">Kesehatan</th>
      <th scope="col">Makanan</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($daftar_amfibi as $amfibi)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$amfibi->no_binatang}}</td>
      <td>{{$amfibi->nama}}</td>
      <td>{{$amfibi->jenis}}</td>
      <td>{{$amfibi->jk}}</td>
      <td>{{$amfibi->kandang_id}}</td>
      <td>{{$amfibi->kesehatan_id}}</td>
      <td>{{$amfibi->makanan_id}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</body>
</html>