<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil User</title>
    <link rel="stylesheet" href="{{asset('CSS/navbar.css')}}">
    <link rel="icon" href="{{asset('image/icontab.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layout.navbaradmin')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center" style="background: #675D50; color:white;" >
                <strong>HALAMAN PROFILE</strong>
            </div>
    
            <div class="card-body">
                <br>
                @foreach ($user as $u)   
                <div class="fotoprofile">
                    <label>Foto Profile</label>
                    <br>
                    <img src="{{ url('/Gambar/' . Auth::user()->photouser) }}" alt="foto yg awal" width="200px" height="200px" style="border-radius: 100%">
                </div>
                <form enctype='multipart/form-data'>
                    <div class="form-group">
                        <label>Nama User</label>
                        <input readonly type="text" name="name" class="form-control" value=" {{ $u->name}}">
                    </div>
    
                    <div class="form-group">
                        <label>Email</label>
                        <input readonly type="text" class="form-control" value="{{ $u->email }}">
                    </div>
    
                    <div class="form-group">
                        <label>Eskul/Organisasi/Jabatan</label>
                        <input readonly type="text" class="form-control" value="{{ $u->eskul->namaeskul }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <a href="/profileadmin/pedita/{{ $u->id }}" class="btn btn-primary d-flex justify-content-center">Edit</a>
                    </div> 
                </form>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>