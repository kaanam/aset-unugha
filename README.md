Aplikasi inventaris barang sekolah menggunakan Framework Laravel 10. Aplikasi ini cocok untuk digunakan untuk di sekolah / universitas.

Beberapa CRUD menggunakan modal dan AJAX untuk pengambilan data agar mengurangi penggunaan pindah halaman.

Prasyarat
Berikut beberapa hal yang perlu diinstal terlebih dahulu:

Composer (https://getcomposer.org/)
PHP ^8.1
MySQL
XAMPP / Laragon
Jika Anda menggunakan XAMPP, untuk PHP dan MySQL sudah menjadi 1 (bundle) di dalam aplikasi XAMPP

Fitur
CRUD Data Barang
Import/export excel barang
Print barang (seluruh/individual)
CRUD Data Sumber (Bantuan Operasional)
CRUD Data Ruangan
CRUD Data Pengguna
Pengaturan Profil

Langkah-langkah instalasi
Clone repository ini
$ git clone https://github.com/kaanam/aset-unugha-laravel.git
Install seluruh packages yang dibutuhkan
$ composer update
$ composer install
$ php artisan key:generate
Siapkan database dan atur file .env sesuai dengan konfigurasi Anda

Masukan nama sekolah/universitas pada konfigurasi .env untuk menampilkan nama sekolah pada print barang. Berikan tanda kutip jika nama sekolah mengandung spasi

Contoh:

NAMA_SEKOLAH="UNUGHA"
Jika sudah, migrate seluruh migrasi dan seeding data
$ php artisan migrate --seed
Jalankan local server
$ php artisan serve
User default aplikasi untuk login
Administrator

Email       : admin@mail.com
Password    : secret
Staff TU (Tata Usaha)

Email       : stafftu@mail.com
Password    : secret
Dibuat dengan
Laravel - Web Framework
