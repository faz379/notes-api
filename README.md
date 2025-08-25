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
   Contoh saat server lokal berjalan
   ```
   http://127.0.0.1:8000
   ```
## Testing dengan Postman

### 1. Register
POST ```/api/auth/register
```json
{
  "name": "User",
  "email": "user@example.com",
  "password": "password",
}
```

### 2. Login
POST ```/api/auth/login```
```json
{
  "email": "user@example.com",
  "password": "password"
}
```
simpan token dari response


### 3. Tambah Note
POST ```/api/notes```
Header: ```Authorization: Bearer {token}```
```json
{
  "title": "Catatan Pertama",
  "content": "Ini adalah isi catatan pertama saya"
}
```

### 4. Lihat Semua Note
GET ```/api/notes```
Header: ```Authorization: Bearer {token}```

### 5. Lihat Note Per id
GET ```/api/notes/{id}```
Header: ```Authorization: Bearer {token}```

### 6. Update Note
PUT ```/api/notes/{id}```
Header: ```Authorization: Bearer {token}```
```json
{
  "title": "Catatan Update",
  "content": "Ini adalah isi catatan yang telah diupdate"
}
```

### 6. Hapus Note
DELETE ```/api/notes/{id}```
Header: ```Authorization: Bearer {token}```

