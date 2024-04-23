# Manajemen Aset UNUGHA

Aplikasi Manajemen Aset Unugha dibuat menggunakan Framework Laravel 10. Aplikasi ini cocok untuk digunakan untuk di Universitas atau Instansi yang membutuhkan.

Beberapa CRUD menggunakan modal dan AJAX untuk pengambilan data agar mengurangi penggunaan pindah halaman.

### Prasyarat

Berikut beberapa hal yang perlu diinstal terlebih dahulu:

-   Composer (https://getcomposer.org/)
-   PHP ^8.1
-   MySQL
-   XAMPP / Laragon

### Langkah-langkah instalasi

-   Clone repository ini

```bash
$ git clone https://github.com/kaanam/aset-unugha-laravel.git
```

-   Install seluruh packages yang dibutuhkan

```bash
$ composer update

$ composer install
```

-   Siapkan database dengan nama aset_unugha. sesuaikan dalam file .env dengan cara sebagai berikut:
-   nama database : aset_unugha
```
$ copy .env.example .env
```
- Jika sudah sesuaikan dan sambungkan database, jangan lupa di generate:
```
$ php artisan key:generate
```

-   Jika sudah, migrate seluruh migrasi dan seeding data

```bash
$ php artisan migrate --seed
```

-   Jalankan local server

```
$ php artisan serve
```

-   User default aplikasi untuk login manajemen aset unugha

Administrator

```
Email       : admin@mail.com
Password    : secret
```

Staff BAUKK

```
Email       : staff@mail.com
Password    : secret
```
-  Atau bisa juga bisa menambahkan user role PIMPINAN di dalam Admin sehingga pimpinan dapat mengatur profile dan melihat dashboard realtime :)

### Dibuat dengan

-   [Laravel](https://laravel.com) - Web Framework
