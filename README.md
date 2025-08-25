# Notes API

Sebuah RESTful API menggunakan **Laravel 12** dan **JWT** untuk mengelola catatan (notes).

## 📦 Fitur
- Register & Login (JWT)
- CRUD Notes (Create, Read, Update, Delete)

## ⚙️ Instalasi

1. Clone repo
   ```bash
   git clone https://github.com/faz379/notes-api.git
   cd order-management-api
   ```

2. Install dependensi PHP
   ```bash
   composer install
   ```

3. Salin file .env
   ```bash
   cp .env.example .env
   ```

4. Atur konfigurasi database di .env
   ```makefile
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=name_db
    DB_USERNAME=your_username_db
    DB_PASSWORD=your_password_db
   ```

5. Generate app key
   ```bash
   php artisan key:generate
   ```

6. Generate JWT secret
   ```bash
   php artisan jwt:secret
   ```

7. Jalankan migrasi database
   ```bash
   php artisan migrate
   ```

8. Jalankan server lokal
   ```bash
   php artisan serve
   ```
   php artisan serve
   ```
   
