# PWL — Project 1 (Laravel 13)

Project ini mengikuti bagian **Soal Praktikum** pada Jobsheet 02: Routing, Controller, dan View.
Fitur: Home, Products per kategori, User berdasarkan parameter URL, dan Penjualan (tampilan statis).
Folder proyek yang digunakan: `PWL`.

## Catatan penting
Arsip ini berisi file aplikasi yang perlu ditempelkan ke instalasi Laravel 13 yang baru. Folder `vendor/`
dan seluruh framework Laravel tidak disertakan. Ini normal; Laravel akan memasangnya melalui Composer.

Jobsheet meminta data produk kategori dikirim dari controller sebagai array dan ditampilkan memakai
`@forelse`, sehingga halaman Products memakai array dari controller. MySQL dikonfigurasi di `.env`,
tetapi tabel database belum dipakai untuk produk pada versi tugas ini. Dengan demikian, struktur ini
tetap sesuai jobsheet dan siap dikembangkan ke CRUD/database pada pertemuan berikutnya.

## 1. Buat project Laravel 13
Buka Terminal/Command Prompt Laragon pada folder tempat proyek akan disimpan:

```bash
composer create-project laravel/laravel PWL "^13.0"
cd PWL
```

Jika Composer tidak menemukan Laravel 13 di lingkungan Anda, periksa versi PHP dan Composer, lalu jalankan:
```bash
php -v
composer --version
```

## 2. Salin file dari arsip
Ekstrak arsip ini. Salin isi folder `PWL` dari arsip ke folder hasil instalasi Laravel `PWL`,
dan izinkan file yang sama (seperti `routes/web.php`) untuk ditimpa.
Jangan menghapus folder `vendor`, `bootstrap`, `storage`, atau file Laravel lain yang tidak ada di arsip.

## 3. Siapkan MySQL melalui Laragon
1. Buka Laragon, klik **Start All**.
2. Buka Database/MySQL atau HeidiSQL.
3. Buat database bernama `pwl`.
4. Buka file `.env` di root proyek, lalu atur bagian database menjadi:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pwl
DB_USERNAME=root
DB_PASSWORD=
```

Jika MySQL Anda menggunakan password, isi `DB_PASSWORD` sesuai konfigurasi lokal.

Jalankan:
```bash
php artisan config:clear
php artisan migrate
```

Migrasi bawaan Laravel akan dijalankan. Fitur Project 1 pada jobsheet saat ini belum membaca tabel produk dari database.

## 4. Jalankan di VS Code
```bash
code .
php artisan serve
```
Buka `http://127.0.0.1:8000`.

## 5. URL untuk pengujian
- `/` — Home
- `/category/food-beverage`
- `/category/beauty-health`
- `/category/home-care`
- `/category/baby-kid`
- `/user/123/name/Andi`
- `/penjualan`

Uji juga URL tidak valid:
- `/user/abc/name/Andi` harus ditolak oleh constraint ID numerik.
- `/user/123/name/Andi123` harus ditolak oleh constraint nama huruf saja.

## 6. Perintah pemeriksaan
```bash
php artisan route:list --except-vendor
php artisan optimize:clear
```

## 7. Jika ada error
- `Route [...] not defined`: pastikan nama route di `routes/web.php` sama dengan yang dipanggil di Blade.
- `View [...] not found`: pastikan nama folder/file view benar.
- `SQLSTATE[HY000] [1049] Unknown database 'pwl'`: buat database `pwl` di MySQL.
- `could not find driver`: aktifkan ekstensi `pdo_mysql` pada PHP yang dipakai Laragon.
