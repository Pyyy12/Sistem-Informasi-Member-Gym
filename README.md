# 🏋️ Gym Booking System

Sistem Booking Sewa Gym Online berbasis Laravel 11 yang memungkinkan pengguna (member) melakukan pendaftaran akun, melihat fasilitas gym, melihat jadwal gym, menerima informasi/notifikasi terbaru, serta melakukan booking gym secara online.

---

## 📌 Fitur Utama

### Halaman Utama (Welcome)

* Menampilkan informasi gym
* Menampilkan fasilitas gym
* Menampilkan jadwal operasional gym
* Menampilkan notifikasi/pengumuman terbaru
* Tombol Login dan Registrasi Member

### Member

* Registrasi akun
* Login dan Logout
* Booking sewa gym
* Melihat riwayat booking
* Melihat status booking

### Admin

* Kelola fasilitas gym
* Kelola jadwal gym
* Kelola notifikasi
* Kelola data booking member
* Approval booking

---

## 🛠️ Teknologi

* Laravel 11
* PHP 8.2+
* MySQL / MariaDB
* Bootstrap 5
* JavaScript
* Eloquent ORM

---

## 📂 Struktur Database

### users

| Field      | Type      |
| ---------- | --------- |
| id         | bigint    |
| name       | varchar   |
| email      | varchar   |
| password   | varchar   |
| created_at | timestamp |
| updated_at | timestamp |

---

### facilities

| Field          | Type      |
| -------------- | --------- |
| id             | bigint    |
| nama_fasilitas | varchar   |
| deskripsi      | text      |
| gambar         | varchar   |
| created_at     | timestamp |
| updated_at     | timestamp |

---

### schedules

| Field      | Type      |
| ---------- | --------- |
| id         | bigint    |
| hari       | varchar   |
| jam_buka   | time      |
| jam_tutup  | time      |
| kelas      | varchar   |
| created_at | timestamp |
| updated_at | timestamp |

---

### notifications

| Field      | Type      |
| ---------- | --------- |
| id         | bigint    |
| judul      | varchar   |
| isi        | text      |
| tanggal    | date      |
| created_at | timestamp |
| updated_at | timestamp |

---

### bookings

| Field           | Type      |
| --------------- | --------- |
| id              | bigint    |
| user_id         | bigint    |
| tanggal_booking | date      |
| jam_booking     | time      |
| paket           | varchar   |
| durasi_jam      | integer   |
| status          | varchar   |
| created_at      | timestamp |
| updated_at      | timestamp |

---

## ⚙️ Instalasi

Clone project:

```bash
git clone https://github.com/username/gym-booking.git
```

Masuk ke folder project:

```bash
cd gym-booking
```

Install dependency:

```bash
composer install
```

Copy file environment:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Konfigurasi database pada file .env:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=booking_gym
DB_USERNAME=root
DB_PASSWORD=
```

Migrasi database:

```bash
php artisan migrate
```

Jalankan seeder:

```bash
php artisan db:seed
```

Jalankan server:

```bash
php artisan serve
```

Akses:

```text
http://127.0.0.1:8000
```

---

## 🔐 Alur Sistem

### Guest

1. Membuka website
2. Melihat fasilitas gym
3. Melihat jadwal gym
4. Melihat notifikasi
5. Registrasi akun member

### Member

1. Login
2. Memilih jadwal gym
3. Melakukan booking
4. Menunggu konfirmasi
5. Melihat status booking

### Admin

1. Login admin
2. Mengelola fasilitas gym
3. Mengelola jadwal gym
4. Mengelola notifikasi
5. Mengelola booking member

---

## 📸 Tampilan Sistem

### Home Page

* Hero Banner
* Fasilitas Gym
* Jadwal Gym
* Notifikasi Terbaru
* Login & Register

### Dashboard Member

* Informasi Profil
* Riwayat Booking
* Status Booking
* Form Booking

### Dashboard Admin

* Statistik Booking
* Manajemen Fasilitas
* Manajemen Jadwal
* Manajemen Notifikasi
* Manajemen Booking

---

## 🚀 Pengembangan Selanjutnya

* Payment Gateway (Midtrans)
* QR Code Check-In
* Membership Bulanan
* Membership Tahunan
* Booking Personal Trainer
* Notifikasi Email
* Notifikasi WhatsApp
* Dashboard Statistik
* Export PDF
* Export Excel

---

## 👨‍💻 Developer

Dikembangkan menggunakan Laravel 11 sebagai sistem pemesanan dan manajemen gym berbasis web.

---

## 📄 License

Project ini menggunakan lisensi MIT License.
