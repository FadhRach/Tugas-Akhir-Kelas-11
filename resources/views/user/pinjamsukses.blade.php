<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Borrow Success</title>
    <link rel="stylesheet" href="{{asset('CSS/navbar.css')}}">
    <link rel="icon" href="{{asset('image/icontab.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  </head>
  <body>
    @include('layout.navbaruser')
    <br><br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header py-3 d-flex justify-content-center" style="background:green; color:white;">
                        <h4>PEMINJAMAN SUKSES</h4>
                    </div>
                    <div class="card-body">
                        <h6>Silahkan Tunggu DiSetujui oleh Admin</h6>
                        <h6>Untuk bisa melihatnya silahkan masuk ke History Peminjaman</h6>
                        <a href="/user/history" class="btn btn-primary d-flex justify-content-center">History Peminjaman</a>
                        <br>
                        <a href="/user/place" class="btn btn-primary d-flex justify-content-center">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>