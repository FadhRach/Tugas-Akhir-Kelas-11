<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <title>Admin Page</title>
   <link rel="stylesheet" href="{{asset('CSS/navbar.css')}}">
   <link rel="icon" href="{{asset('image/icontab.png')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    @include('layout.navbaradmin')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center" style="background: #675D50;">
                Welcome Admin, {{ Auth::user()->name }}
                di Halaman User
            </div>
    
            <div class="card-body">
                <br/>
    
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Foto User</th>
                            <th>Organisasi/Eskul</th>
                            <th>Pengaturan</th>
                        </tr>
                    </thead>
    
                    <tbody>
                        @foreach($user as $u)
                        <tr>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->role }}</td>
                            <td><img width="150px" src="{{ url('/Gambar/' . $u->photouser) }}"></td>
                            <td>{{ $u->id_eskul }}</td>
                            <td>
                                <a href="/home/admin/place/edit/{{ $u->id_user }}" class="btn alert-warning">Edit</a>
                                <a href="/home/admin/place/delete/{{ $u->id_user }}" class="btn alert-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </body>
</html>