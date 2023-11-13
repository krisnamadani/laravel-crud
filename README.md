## Tentang

Proyek/website simpel untuk membaca, menambahkan, mengedit dan menghapus data (crud) menggunakan laravel 10

## Cara Install

Pertama clone proyek
```
git clone git@github.com:krisnamadani/laravel-crud.git
```

Kemudian install dependency package/library yang dibutuhkan
```
composer install
```

Buat file .env dengan menduplikat file .env.example dan generate key untuk proyek
```
cp .env.example .env
php artisan key:generate
```

Buat database dan sesuaikan pada file .env, kemudian jalankan migrasi
```
php artisan migrate --seed
```

Jalankan proyek dengan mengetikan perintah
```
php artisan serve
```