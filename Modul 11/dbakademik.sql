-- Membuat Database
CREATE DATABASE dbakademik;

-- Menggunakan Database
USE dbakademik;

-- =====================================
-- TABEL DOSEN
-- =====================================
CREATE TABLE t_dosen (
    idDosen INT AUTO_INCREMENT PRIMARY KEY,
    namaDosen VARCHAR(50),
    noHP VARCHAR(25)
);

-- =====================================
-- TABEL MAHASISWA
-- =====================================
CREATE TABLE t_mahasiswa (
    npm INT PRIMARY KEY,
    namaMhs VARCHAR(50),
    prodi VARCHAR(25),
    alamat VARCHAR(70),
    noHP VARCHAR(25)
);

-- =====================================
-- TABEL MATA KULIAH
-- =====================================
CREATE TABLE t_matakuliah (
    kodeMK INT PRIMARY KEY,
    namaMK VARCHAR(70),
    sks INT,
    jam INT
);

-- =====================================
-- CEK HASIL
-- =====================================
SHOW TABLES;

DESCRIBE t_dosen;
DESCRIBE t_mahasiswa;
DESCRIBE t_matakuliah;

/*
==================================================
KESIMPULAN
==================================================

1. Database dbakademik berhasil dibuat.
2. Tabel t_dosen menyimpan data dosen.
3. Tabel t_mahasiswa menyimpan data mahasiswa.
4. Tabel t_matakuliah menyimpan data mata kuliah.
5. Primary Key digunakan sebagai identitas unik
   setiap data.
6. Auto Increment pada idDosen membuat nilai ID
   bertambah otomatis saat data baru ditambahkan.

*/