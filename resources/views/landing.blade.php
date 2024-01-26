<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <title>Landing Plalogisc</title>
    <link rel="stylesheet" href="{{asset('CSS/navbar.css')}}">
    <link rel="icon" href="{{asset('image/icontab.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <nav>
      <div class="logo">Plalogisc</div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#aboutlanding">About</a></li>
        <li><a href="/login">Place</a></li>
        <li><a href="/login">Item</a></li>
        <li><a href="/login">Schedule</a></li>
        <li><a class="login" href="/login">Login</a></li>
      </ul>
    </nav>
    <div class="lankonten">
      <div class="landingkonten">
        <div class="started">
          <h1>Ingin Meminjam Tempat atau</h1>
          <h1> Logistik Sekolah?</h1>
          <br>
          <h4>Disini saja, Cepat, Tanpa Ribet, Tinggal Pinjam</h4>
          <a class="getst" href="/login">Ayo Mulai</a>
        </div>
      </div>
      <div class="aboutlanding" id="aboutlanding">
        <h1>About Plalogisc</h1>
        <div class="aboutkonten">
          <div class="aboutlanleft">
            <br>
            <h5>
              Plalogisc adalah singkatan dari "Place dan Logistic" yaitu Tempat dan juga Barang,
              aplikasi berbasis website ini menghadirkan cara peminjaman tempat dan barang sekolah dengan gampang dan tentunya tidak perlu ribet
              yang memudahkan pengguna untuk melakukan peminjaman tempat dan logistik di lingkungan sekolah.
              Dengan PLALOGISC, siswa yang memiliki eskul atau organisasi di sekolah dapat dengan mudah mengajukan permohonan peminjaman tempat seperti ruang
              kelas, aula, atau lapangan,
            </h5>
          </div>
          <div class="aboutlanright">
            <br>
            <h5>
              serta logistik seperti proyektor, sound system, atau peralatan olahraga.
              Aplikasi ini menyediakan Schedule interaktif untuk melihat ketersediaan, fitur persetujuan, serta riwayat peminjaman untuk melacak aktivitas peminjaman sebelumnya. PLALOGISC membantu meningkatkan pengelolaan sumber daya sekolah, menghindari tabrakan jadwal, dan memastikan penggunaan yang efisien dalam kegiatan sekolah.
            </h5>
          </div>
        </div>
      </div>
      @include('layout.footer')
    </div>
  </body>
</html>