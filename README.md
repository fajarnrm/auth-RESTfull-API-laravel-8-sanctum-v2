# About

RESTfull API Auth v2 lanjutan dari Repository sebelumnya dimana menambahkan Autorisasi dari token dan pengamanan router dengan token. fitur auth diantaranya Login, Register, logout. selain itu penambahan fitur CRUD untuk sebuah class produk yang dapat dimanfaatkan atau dimodifikasi sesuai kebutuhan.

## How To Running?

untuk menjalankan laravel hasil clone, silahkan masukan perintah

```bash
composer install
```

setelah itu jalankan perintah

```bash
php artisan key:generate
```

Jalankan server

```bash
php artisan serve
```

custom host

```bash
php artisan serve --host 127.0.0.200:8000
```

IP setelah host diatas disesuai dengan kebutuhan

## installation package

setelah project dijalankan, silahkan jalankan perintah dibawah ini dalam terminal

```bash
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
```

terakhir gunakan perintah migrasi untuk mengisi data sesuai dengan database yang digunakan

```bash
php artisan migrate
```

## License

Jika anda ingin menggunakannya silahkan download secara free ke local server kalian, dan jangan lupa untuk memberikan bintang terhadap project ini :)

Happy Coding!!!

laravel version 8.75
laravel sanctum version 2.11
