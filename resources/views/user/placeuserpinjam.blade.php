<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Place Borrow</title>
   <link rel="icon" href="{{asset('image/icontab.png')}}">
    <link rel="stylesheet" href="{{asset('CSS/navbar.css')}}">
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
                    <div class="card-header py-3 d-flex justify-content-center" style="background:#675D50; color:white;">
                        <h4>FORM PINJAM TEMPAT</h4>
                    </div>

                    <div class="card-body">
                        <a href="/user/place" class="btn btn-secondary d-flex justify-content-center">kembali</a>
                        
                        <div class="mt-4"></div>
                        
                        <form method="POST" action="/user/place/save">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label>Nama Peminjam</label>
                                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                <input readonly type="text" class="form-control" value="{{ Auth::user()->name }}">
                            </div>

                            <div class="form-group">
                                <label>Tempat Pinjam</label>
                                <select name="id_place" class="form-control">
                                    @foreach($place as $p)
                                    <option value="{{ $p->id_place }}">{{ $p->nameplace }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Start</label>
                                <input type="datetime-local" class="form-control" name="time_from" value="{{ old('time_from') }}" required>
                            </div>

                            <div class="form-group">
                                <label>End</label>
                                <input type="datetime-local" class="form-control" name="time_to" value="{{ old('time_from') }}" required>
                            </div>

                            <div class="form-group">
                                <label>Mau Pinjam Untuk Apa?</label>
                                <textarea name="description" cols="65" rows="3" placeholder="untuk..." required></textarea>
                            </div>

                            <div class="mt-4"></div>

                            <div class="form-group d-flex justify-content-center">
                                <input type="submit" class="btn btn-success" value="Pinjam">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>