# Proyek Hackaton TeacherHub

> Task Hackaton :
>
> Buatlah Aplikasi Edukasi dengan memanfaatkan AI

Ekspektasi projek ini:

-   [x] Guru dapat membuat materi di platform ini. Materi disimpan dalam format markdown
-   [x] Edit Profile
-   [x] Login Page, Sign Up & logout
-   [ ] Laporan hasil pembelajaran siswa. Dengan mock data yang kemudian diolah oleh AI
-   [ ] Conversations
-   [ ] Pengumpulan Tugas

## Requirement

-   PHP >= 8.1 (harus sudah terpasang di environment variable path)
-   composer
-   mysql

## How To Run

-   Rename `.env.example` file to `.env`
-   Run `composer install`
-   Run `php artisan key:generate`
-   Run `php artisan migrate`
-   Run `php artisan db:seed`
-   Run `php artisan serve`
