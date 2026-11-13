# 🏥 Sistem Informasi Rumah Sakit

Aplikasi web sederhana untuk mengelola data rumah sakit (pasien, dokter, poli, obat, dan rekam medis), dibangun dengan **PHP Native** dan **MySQL/MariaDB**. Project ini dibuat sebagai tugas kelompok mata kuliah **Basis Data** (Semester 2) untuk mempraktikkan perintah **DDL** dan **DML** pada database relasional dengan minimal 5 tabel master.

> ⚠️ **Status: prototype / dalam pengembangan.** Saat ini modul yang sudah berjalan adalah login, dashboard, dan tampilan data obat. Modul lain masih berupa rancangan database dan menu navigasi.

## ✨ Fitur

- **Autentikasi:** login dan logout menggunakan session PHP
- **Dashboard** dengan sidebar navigasi (Pasien, Dokter, Poli, Obat, Rekam Medis)
- **Modul Obat:** menampilkan data obat dari database
- **Rancangan database lengkap** dengan relasi antar tabel (Primary Key, Foreign Key, `ON DELETE CASCADE`)

## 🗄️ Struktur Database

Database `rumahsakit` terdiri dari 7 tabel:

| Tabel | Fungsi |
|---|---|
| `tb_dokter` | Data master dokter (nama, spesialis, alamat, no. telp) |
| `tb_pasien` | Data master pasien (no. identitas, jenis kelamin, alamat, no. telp) |
| `tb_poli` | Data master poli dan gedung |
| `tb_obat` | Data master obat dan keterangannya |
| `tb_rekammedis` | Transaksi pemeriksaan: pasien, dokter, poli, keluhan, diagnosa, tanggal |
| `tb_rm_obat` | Tabel penghubung (relasi many-to-many) antara rekam medis dan obat |
| `tb_user` | Akun pengguna aplikasi dengan level akses |

**Relasi utama:**

- `tb_rekammedis` → `tb_pasien`, `tb_dokter`, `tb_poli` (Foreign Key)
- `tb_rm_obat` → `tb_rekammedis` (`ON DELETE CASCADE`) dan `tb_obat`

## 🛠️ Teknologi

- PHP Native (MySQLi)
- MySQL / MariaDB
- Bootstrap 3 dan jQuery
- phpMyAdmin dan XAMPP (lingkungan pengembangan)

## 🚀 Cara Menjalankan

1. Install [XAMPP](https://www.apachefriends.org/) lalu jalankan **Apache** dan **MySQL**.
2. Salin folder `rumah_sakitv2` ke `C:\xampp\htdocs\`.
3. Buka `http://localhost/phpmyadmin`, buat database bernama `rumahsakit`, lalu **Import** file `rumahsakit.sql`.
4. Buat akun admin lewat tab **SQL** di phpMyAdmin (password disimpan dalam bentuk hash SHA1):

   ```sql
   INSERT INTO tb_user (id_user, nama_user, username, password, level)
   VALUES (UUID(), 'Administrator', 'admin', SHA1('ganti_password_ini'), '1');
   ```

5. Buka `http://localhost/rumah_sakitv2/auth/login.php` dan login dengan akun tadi.

> Konfigurasi koneksi database ada di `config/config.php` (default: host `localhost`, user `root`, tanpa password).

## 📌 Rencana Pengembangan

- [ ] Melengkapi CRUD untuk modul Obat (tambah, ubah, hapus)
- [ ] Membuat modul Pasien, Dokter, Poli, dan Rekam Medis
- [ ] Mengganti SHA1 dengan `password_hash()` / `password_verify()`
- [ ] Menggunakan prepared statements untuk mencegah SQL Injection
- [ ] Memperbaiki tipe data kolom (`nama_pasien` dan `no_telp` di `tb_pasien` sebaiknya `VARCHAR`)

## 📚 Yang Dipelajari

- Merancang database relasional dan menentukan relasi antar tabel
- Menggunakan DDL (`CREATE`, `ALTER`, `DROP`) dan DML (`INSERT`, `SELECT`, `UPDATE`, `DELETE`)
- Menghubungkan aplikasi PHP dengan database MySQL
- Membuat sistem login berbasis session
- Bekerja dalam tim dan mempresentasikan hasil project

## 👥 Tim

Project kelompok (5 anggota) — Mata Kuliah Basis Data, Program Studi Teknik Informatika.

**Kontributor:** 
Maulana Auliya Firdaus
IKHSANURIL AL FAYADH
INDAH DWI NOVITRI
M. JAFAR SODIK
M. YAMAN DARMAWAN

## 📄 Lisensi

Project ini dibuat untuk keperluan pembelajaran.
