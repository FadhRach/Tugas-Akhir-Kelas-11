1. pastikan anda sudah mendownload composer laravel pada laptop anda supaya bisa ngecommand
2. Download dan extract semuanya didalam 1 folder
3. Copy/Cut file plalogisc.zip ke xampp -> htdocs
4. Extract File ZIP Plalogisc di htdocs
5. buka vs code lalu open folder plalogisc yang tadi sudah di extract
6. import mysql plalogisc ke database mysql dengan nama database "plalogisc" atau bisa melalui
6. ke database mysql bikin database dengan nama "plalogisc" lalu pilih ke terminal atau cmd lalu ketik
php C:\xampp\htdocs\plalogisc> php artisan migrate
php C:\xampp\htdocs\plalogisc> php artisan db:seed --class=eskulseeder
php C:\xampp\htdocs\plalogisc> php artisan db:seed --class=DummyUserSeeder
7. lalu sesudah itu kita aktifkan laravel nya di terminal / cmd
php C:\xampp\htdocs\plalogisc> php artisan server
8. setelah itu di website kaluan tinggal ketik " localhost:8000 "
9. Aplikasi bisa dijalankan
10. Untuk Login Admin :
email : admin@example.com
pass : admin123


*Jika tidak bisa coba baca dari awal kembali 

Terimakasih

