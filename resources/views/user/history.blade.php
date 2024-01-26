<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <title>User Page</title>
    <link rel="stylesheet" href="{{asset('CSS/navbar.css')}}">
    <link rel="icon" href="{{asset('image/icontab.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    @include('layout.navbaruser')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center" style="background: #675D50; color: white;">
                <h2>History</h2>
            </div>
    
            <div class="card-body">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID PINJAM</th>
                            <th>Tempat/Logistik</th>
                            <th>Gambar</th>
                            <th>Alasan Meminjam</th>
                            <th>Waktu Awal Pinjam</th>
                            <th>Waktu Akhir Pinjam</th>
                            <th>Status</th>
                        </tr>
                    </thead>
    
                    <tbody>
                        @foreach($pinjampl as $pl)
                        <tr>
                            <td>{{ $pl->id_pinjampl }}</td>
                            <td>{{ $pl->place->nameplace }}</td>
                            <td><img width="150px" src="{{ url('/Gambar/' . $pl->place->photoplace) }}"></td>
                            <td>{{ $pl->description }}</td>
                            <td>{{ $pl->time_from }}</td>
                            <td>{{ $pl->time_to }}</td>
                            <td>
                                @if ($pl->statadmin == 'Dalam Pengajuan')
                                    <span style="color:orange;">{{$pl->statadmin}}</span>
                                @elseif ($pl->statadmin == 'DiTolak')
                                    <span style="color:red;">{{$pl->statadmin}}</span>
                                @else
                                    <span style="color:green;">{{$pl->statadmin}}</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                    <tbody>
                        @foreach($pinjamitem as $pi)
                        <tr>
                            <td>{{ $pi->id_pinjamitem }}</td>
                            <td>{{ $pi->item->nameitem }}</td>
                            <td><img width="150px" src="{{ url('/Gambar/' . $pi->item->photoitem) }}"></td>
                            <td>{{ $pi->description }}</td>
                            <td>{{ $pi->time_from }}</td>
                            <td>{{ $pi->time_to }}</td>
                            <td>
                                @if ($pi->statadmin == 'Dalam Pengajuan')
                                    <span style="color:orange;">{{$pi->statadmin}}</span>
                                @elseif ($pi->statadmin == 'DiTolak')
                                    <span style="color:red;">{{$pi->statadmin}}</span>
                                @else
                                    <span style="color:green;">{{$pi->statadmin}}</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
  </body>
</html>