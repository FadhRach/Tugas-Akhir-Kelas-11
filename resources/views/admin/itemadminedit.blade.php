<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <title>Item Edit Page</title>
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
                <strong>EDIT DATA LOGISTIK</strong>
            </div>
    
            <div class="card-body">
                <a href="/home/admin/item" class="btn btn-primary">Kembali</a>
                <br/>
                <br/>
                <form method="post" action="/home/admin/item/update/{{ $item->id_item }}" enctype='multipart/form-data'>
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
    
                    <div class="form-group">
                        <input type="hidden" name="id_item" class="form-control" itemholder="ID ..." value=" {{ $item->id_item }}">
                        @if($errors->has('id_item'))
                            <div class="text-danger">
                                {{ $errors->first('id_item')}}
                            </div>
                        @endif
                    </div>
    
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input required type="text" name="nameitem" class="form-control" itemholder="Nama Barang ..." value=" {{ $item->nameitem }}">
                        @if($errors->has('nameitem'))
                            <div class="text-danger">
                                {{ $errors->first('nameitem')}}
                            </div>
                        @endif
                    </div>
    
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea required name="description" class="form-control" itemholder="Deskripsi Barang...">{{ $item->description }}</textarea>
                        @if($errors->has('description'))
                            <div class="text-danger">
                                {{ $errors->first('description')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Foto Barang</label>
                        <input required type="file" name="photoitem" class="form-control" itemholder="Foto Barang ..." value=" {{ $item->photoitem }}">
                        @if($errors->has('photoitem'))
                            <div class="text-danger">
                                {{ $errors->first('photoitem')}}
                            </div>
                        @endif
                    </div>
    
                    <div class="form-group">
                        <label>Status</label>
                        <input required type="text" name="status" class="form-control" itemholder="Status ..." value=" {{ $item->status }}">
                        @if($errors->has('status'))
                            <div class="text-danger">
                                {{ $errors->first('status')}}
                            </div>
                        @endif
                    </div>
    
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>