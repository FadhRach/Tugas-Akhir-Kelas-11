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
                <form method="post" action="/profileuser/pupdatea/{{ $user->id }}" enctype='multipart/form-data'>
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
    
                    <div class="form-group">
                        <input type="hidden" name="id" class="form-control" placeholder="ID ..." value=" {{ $user->id }}">
                        @if($errors->has('id'))
                            <div class="text-danger">
                                {{ $errors->first('id')}}
                            </div>
                        @endif
                    </div>
    
                    <div class="form-group">
                        <label>Nama User</label>
                        <input type="text" name="name" class="form-control" placeholder="Nama User" value=" {{ $user->name}}">
                        @if($errors->has('nameuser '))
                            <div class="text-danger">
                                {{ $errors->first('nameuser ')}}
                            </div>
                        @endif
                    </div>
    
                    <div class="form-group">
                        <label>Email</label>
                        <textarea name="email" class="form-control" placeholder="Email User">{{ $user->email }}</textarea>
                        @if($errors->has('email'))
                            <div class="text-danger">
                                {{ $errors->first('email')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="role" class="form-control" placeholder="role ..." value=" {{ $user->role }}">
                        @if($errors->has('role'))
                            <div class="text-danger">
                                {{ $errors->first('role')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <img src="{{ url('/Gambar/' . Auth::user()->photouser) }}" alt="foto yg awal" width="100px" height="100px" style="border-radius: 5%">
                     </div>
                    <div class="form-group">
                        <label>Foto User</label>
                        <input type="file" name="photouser" class="form-control" placeholder="Foto Tempat ..." value=" {{ $user->photouser }}">
                        @if($errors->has('photouser'))
                            <div class="text-danger">
                                {{ $errors->first('photouser')}}
                            </div>
                        @endif
                    </div>
    
                    <div class="form-group">
                        <label>Eskul/Organisasi/Jabatan</label>
                        <select name="id_eskul" class="form-control">
                            @foreach($eskul as $s)
                            <option value="{{ $s->id_eskul }}"{{ $s->id_eskul == $user->id_eskul ? 'selected' : '' }}>{{ $s->namaeskul }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>