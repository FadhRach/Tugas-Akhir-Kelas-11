<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <title>Item Add Page</title>
   <link rel="stylesheet" href="{{asset('CSS/navbar.css')}}">
   <link rel="icon" href="{{asset('image/icontab.png')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center" style="background: #675D50;">
                <strong>TAMBAH DATA LOGISTIK</strong>
            </div>
    
            <div class="card-body">
                <a href="/home/admin/item/" class="btn alert-info">Kembali</a>
                <br/>
                <br/>
    
                <form method="post" action="/home/admin/item/simpan" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nameitem" class="form-control" placeholder="Nama Barang ...">
                        @if($errors->has('nameitem'))
                            <div class="text-danger">
                                {{ $errors->first('nameitem')}}
                            </div>
                        @endif
                    </div>
    
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="description" class="form-control" placeholder="Deskripsi Barang..."></textarea>
                        @if($errors->has('description'))
                            <div class="text-danger">
                                {{ $errors->first('description')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Foto Barang</label>
                        <input type="file" name="photoitem" class="form-control" placeholder="Foto Barang ...">
                        @if($errors->has('photoitem'))
                            <div class="text-danger">
                                {{ $errors->first('photoitem')}}
                            </div>
                        @endif
                    </div>
    
                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" name="status" class="form-control" placeholder="Status ...">
                        @if($errors->has('status'))
                            <div class="text-danger">
                                {{ $errors->first('status')}}
                            </div>
                        @endif
                    </div>
                    
                    <br>
    
                    <div class="form-group">
                        <input type="submit" class="btn alert-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>