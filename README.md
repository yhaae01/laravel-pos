<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Tentang Aplikasi
laravel-pos merupakan aplikasi Point of Sales Manajemen berbasis website, dibangun menggunakan Laravel versi 8 dan AdminLTE 2.4.

## Spesifikasi Minimal:
- PHP > 7.4

## Cara Penggunaan

1. Jalankan perintah 
```bash
composer update
```
atau:
```bash
composer install
```

2. Copy file .env dari .env.example
```bash
cp .env.example .env
```
3. Setting nama database sesuai dengan keinginan.

4. Lakukan perintah
```bash
php artisan key:generate
```
5. Migrate database
```bash
php artisan migrate
```
6. Seeder table User, Setting
```bash
php artisan db:seed
```

## User
1. Admin
```
Email : admin@gmail.com
Password : asdasdasd
```
2. Kasir
```
Email : kasir@gmail.com
Password : asdasdasd
```