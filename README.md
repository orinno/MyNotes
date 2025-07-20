# 📝 Simple Laravel CRUD Notes App

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)

Repository ini berisi contoh implementasi **CRUD (Create, Read, Update, Delete)** sederhana menggunakan Laravel. Cocok untuk pemula yang ingin belajar dasar-dasar pengembangan web dengan Laravel!

## 🌟 Kenapa Project Ini Berguna?

- **Belajar konsep dasar Laravel** dengan project nyata
- **Referensi menyelesaikan tugas kuliah** pemrograman web
- **Dasar untuk project lebih kompleks** (bisa dikembangkan lebih lanjut)
- **Struktur kode yang mudah dipahami** untuk pemula

## 🛠 Fitur Utama

| Fitur | Deskripsi |
|-------|-----------|
| ✅ Create | Tambah catatan baru |
| 🔍 Read | Lihat daftar catatan |
| ✏️ Update | Edit catatan yang ada |
| 🗑️ Delete | Hapus catatan |
| 📱 Responsif | Tampilan mobile-friendly |

## 📦 Teknologi Digunakan

- **Laravel 10** - PHP Framework
- **MySQL** - Database
- **Bootstrap 5** - Styling
- **Eloquent ORM** - Database operations

## 🚀 Cara Install

### Persyaratan
- PHP ≥ 8.1
- Composer
- MySQL (Xampp)

### Langkah-langkah

1. Clone repository:
```bash
git clone https://github.com/orinno/MyNotes.git
cd mynotes

2. Install dependencies
```bash
composer install

3. Copy file .env.example, lalu rename menjadi .env

4. Konfigurasi database di .env
sesuaikan dengan local database masing-masing:
DB_DATABASE='nama_table'
DB_USERNAME=root
DB_PASSWORD=

4. Generate app key:
```bash
php artisan key:generate

5. Jalankan migrasi
```bash
php artisan migrate --seed 

6. Jalankan aplikasi
```bash
php artisan serve

Buka di browser: http://localhost:8000

## 📂 Struktur Project
project-root/
├── app/
│   └── Http/Controllers/NotesController.php
├── resources/
│   └── views/notes/
│       └── index.blade.php     # List my notes (create dan edit pakai modal)
├── routes/
│   └── web.php                # Definisi route
└── database/
    └── migrations/               # Skema database

## 🤝 Kontribusi
Pull request dipersilakan! Untuk perubahan besar, buka issue terlebih dahulu.

## 📜 Lisensi
MIT

🎉 Happy Coding!
Dibuat dengan ❤️ untuk membantu pemula belajar Laravel

#Laravel #CRUD #BelajarProgramming #TugasKuliah #PHP #WebDevelopment