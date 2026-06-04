-- Membuat database
CREATE DATABASE db_praktik;

-- Menggunakan database
USE db_praktik;

-- Tabel Dosen
CREATE TABLE t_dosen (
    idDosen INT AUTO_INCREMENT PRIMARY KEY,
    namaDosen VARCHAR(50),
    noHP VARCHAR(25)
);

-- Tabel Mahasiswa
CREATE TABLE t_mahasiswa (
    npm INT PRIMARY KEY,
    namaMhs VARCHAR(50),
    prodi VARCHAR(25),
    alamat VARCHAR(70),
    noHP VARCHAR(25)
);

-- Tabel Mata Kuliah
CREATE TABLE t_matakuliah (
    kodeMK INT PRIMARY KEY,
    namaMK VARCHAR(70),
    sks INT,
    jam INT
);