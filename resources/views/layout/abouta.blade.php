<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <title>About</title>
   <link rel="stylesheet" href="{{asset('CSS/navbar.css')}}">
   <link rel="icon" href="{{asset('image/icontab.png')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    @include('layout.navbaradmin')
    <br><br><br>
    <div class="container">
        <div class="card text-center">
            <div class="card-header" style="background: #675D50;"><h2>About Me & Plalogisc</h2></div>
    
            <div class="card-body" style="text-align: center">
                <h3>Website Plalogisc (Place & Logistic)</h3>
                <br>
                <h5 style="text-align: justify;">Plalogisc adalah sebuah website peminjaman tempat dan logistik yang dirancang khusus untuk memudahkan proses peminjaman fasilitas sekolah. Dengan Plalogisc, pengguna dapat dengan mudah melakukan reservasi tempat seperti ruang kelas, aula, atau lapangan olahraga, serta meminjam logistik seperti peralatan multimedia, alat olahraga, atau barang-barang lain yang tersedia di sekolah.</h5>
                <h5 style="text-align: justify;">Website ini menawarkan berbagai fitur yang memudahkan pengguna dalam mengelola peminjaman. Pengguna dapat melihat ketersediaan tempat dan logistik melalui schedule yang ada, melakukan reservasi dengan mengisi formulir peminjaman, dan melacak status peminjaman mereka. Selain itu, terdapat juga notifikasi otomatis yang memberitahu pengguna tentang persetujuan atau penolakan peminjaman oleh pihak sekolah atau admin.</h5>
                <h5 style="text-align: justify;">Plalogisc juga dilengkapi dengan sistem manajemen pengguna dan otorisasi, yang memungkinkan pengguna dengan peran berbeda seperti admin, guru, atau siswa untuk mengakses fitur dan fungsionalitas yang sesuai. Admin memiliki hak akses penuh untuk mengelola tempat, logistik, serta mengelola peminjaman yang diajukan. Sementara guru dan siswa dapat membuat peminjaman, melihat riwayat peminjaman, dan mengedit informasi profil mereka.</h5>
                <h5 style="text-align: justify;">Dengan Plalogisc, proses peminjaman tempat dan logistik sekolah menjadi lebih terstruktur, efisien, dan transparan. Ini membantu sekolah dalam mengatur dan mengelola peminjaman dengan lebih baik, sementara para pengguna dapat dengan mudah memenuhi kebutuhan mereka dalam melakukan kegiatan di sekolah.</h5>
                <br>
                <h5>Sekian Yang bisa disampaikan mohom maaf apabila ada kekurangan dalam website ini terimakasih.</h5>
            </div>
        </div>
    </div>
    <br><br><br>
    @include('layout.footer')
  </body>
</html>