<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <title>Place Borrow</title>
    <link rel="stylesheet" href="{{asset('CSS/navbar.css')}}">
    <link rel="icon" href="{{asset('image/icontab.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    @include('layout.navbaruser')
    <div class="container">
        <div class="">
            <div class="card-header py-3 d-flex mt-5 justify-content-center" style="background:#675D50; color:white;">
                <h4>Mau Pinjam Logistik Yang Bagaimana?</h4>
            </div>
        </div>  
        <div class="container my-5">
            @if($item->isEmpty())
                <p class="text-center">Logistik sedang tidak ditampilkan oleh Admin</p>
            @else
                <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-start">
                    @foreach($item as $i)
                        <div class="col">
                            <div class="card">
                                <img src="{{ url('/Gambar/' . $i->photoitem) }}" class="card-img-top" alt="Foto Asset" style="max-height: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $i->nameitem }}</h5>
                                    <textarea readonly cols="28" rows="5" style="resize:none; border:none; overflow:auto; outline:none;">{{ $i->description }}</textarea>
                                    <a href="/user/item/pinjam" class="btn btn-dark" style="background: #675D50">Pinjam</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
    <br><br>    
  @include('layout.footer')
  </body>
</html>