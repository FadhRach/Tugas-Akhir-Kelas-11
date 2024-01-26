<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <title>User Page</title>
    <link rel="stylesheet" href="{{asset('CSS/navbar.css')}}">
    <link rel="icon" href="{{asset('image/icontab.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    @include('layout.navbaruser')
    <div class="container"> 
      <div class="">
        <div class="card-header py-3 d-flex mt-5 justify-content-center" style="background:#675D50; color:white;">
            <h4>Ayo Mulai Menjelajah Website nya!</h4>
        </div>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
              <img src="{{asset('image/1686470879_DSCF8284.JPG')}}" class="d-block w-100" alt="img1caro" height="500">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img src="{{asset('image/DSCF8289.JPG')}}" class="d-block w-100" alt="img2caro" height="500">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img src="{{asset('image/kantin.png')}}" class="d-block w-100" alt="img4caro" height="500">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img src="{{asset('image/samsung.png')}}" class="d-block w-100" alt="img5caro" height="500">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>  
    <div class="container my-5">
        @if($place->isEmpty())
            <p class="text-center">Tempat sedang tidak ditampilkan oleh Admin</p>
        @else
            <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-start">
                @foreach($place as $p)
                    <div class="col">
                        <div class="card">
                            <img src="{{ url('/Gambar/' . $p->photoplace) }}" class="card-img-top" alt="Foto Asset" style="max-height: 200px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $p->nameplace }}</h5>
                                <textarea readonly cols="28" rows="5" style="resize:none; border:none; overflow:auto; outline:none;">{{ $p->description }}</textarea>
                                <a href="/user/place" class="btn btn-dark" style="background: #675D50">Pinjam</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
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
                              <a href="/user/item" class="btn btn-dark" style="background: #675D50">Pinjam</a>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
      @endif
    </div>
  </div>
  <br>
  @include('layout.footer')
  </body>
</html>