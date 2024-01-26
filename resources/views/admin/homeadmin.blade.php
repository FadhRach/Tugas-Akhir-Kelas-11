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
    <div class="card-header text-center" style="margin-bottom: 100px; background: #675D50;">
      <h1>HOME ADMIN</h1>
    </div>
    <div class="container">
      <div class="row">
          <div class="col-md-6">
              <div class="card">
                  <h5 class="card-header text-center" style="background: #675D50;">Pinjam Tempat</h5>
                  <div class="card-body">
                      @php
                      $nomor_tempat = DB::table('pinjampl')->count();
                      @endphp
                      <h3 class="text-center" style="font-size: 24px;">{{ $nomor_tempat }}</h3>
                  </div>
              </div>
          </div>

          <div class="col-md-6">
              <div class="card">
                  <h5 class="card-header text-center" style="background: #675D50;">Pinjam Logistik</h5>
                  <div class="card-body">
                      @php
                      $nomor_logisc = DB::table('pinjamitem')->count();
                      @endphp
                      <h3 class="text-center" style="font-size: 24px;">{{ $nomor_logisc }}</h3>
                  </div>
              </div>
          </div>
      </div>

      <div class="mt-4"></div>

      <div class="row">
          <div class="col-md-6">
              <div class="card">
                  <h5 class="card-header text-center" style="background: #675D50;">Total Tempat & Logistik</h5>
                  <div class="card-body">
                      @php
                      $nomor_place = DB::table('place')->count();
                      $nomor_item = DB::table('item')->count();
                      $totalplalogisc = $nomor_place + $nomor_item
                      @endphp
                      <h3 class="text-center" style="font-size: 24px;">{{ $totalplalogisc }}</h3>
                  </div>
              </div>
          </div>

          <div class="col-md-6">
              <div class="card">
                  <h5 class="card-header text-center" style="background: #675D50;">User</h5>
                  <div class="card-body">
                      @php
                      $nomor_user = DB::table('users')->count();
                      @endphp
                      <h3 class="text-center" style="font-size: 24px;">{{ $nomor_user }}</h3>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <br><br><br><br>   
  @include('layout.footer')
  </body>
</html>