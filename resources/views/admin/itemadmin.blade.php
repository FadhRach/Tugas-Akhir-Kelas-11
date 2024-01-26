<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <title>Logistic Page</title>
   <link rel="stylesheet" href="{{asset('CSS/navbar.css')}}">
   <link rel="icon" href="{{asset('image/icontab.png')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    @include('layout.navbaradmin')
    <div>
      <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center" style="background: #675D50;">
                <h2>LOGISTIK</h2>
            </div>
    
            <div class="card-body">
                <a href="/home/admin/item/tambah" class="btn alert-info">Tambah Logistik</a>
                <br/>
                <br>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Deskripsi</th>
                            <th>Foto Barang</th>
                            <th>Status</th>
                            <th>Pengaturan</th>
                        </tr>
                    </thead>
    
                    <tbody>
                        @foreach($item as $i)
                        <tr>
                            <td>{{ $i->nameitem }}</td>
                            <td>{{ $i->description }}</td>
                            <td><img width="150px" src="{{ url('/Gambar/' . $i->photoitem) }}"></td>
                            <td>{{ $i->status }}</td>
                            <td>
                                <a href="/home/admin/item/edit/{{ $i->id_item }}" class="btn alert-warning">Edit</a>
                                <a href="/home/admin/item/hapus/{{ $i->id_item }}" class="btn alert-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br><br>    
  @include('layout.footer')
  </body>
</html>