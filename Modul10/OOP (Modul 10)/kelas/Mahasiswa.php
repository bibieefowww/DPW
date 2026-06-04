<?php

require_once "Manusia.php";

class Mahasiswa extends Manusia
{
    protected $NIM;
    protected $jurusan;
    protected $kelas;

    public function __construct($nama)
    {
        // memanfaatkan fungsi dari class Manusia
        $this->setNama($nama);
    }

    // ==========================
    // Getter dan Setter NIM
    // ==========================

    public function setNIM($NIM)
    {
        $this->NIM = $NIM;
    }

    public function getNIM()
    {
        return $this->NIM;
    }

    // ==========================
    // Getter dan Setter Jurusan
    // ==========================

    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    public function getJurusan()
    {
        return $this->jurusan;
    }

    // ==========================
    // Getter dan Setter Kelas
    // ==========================

    public function setKelas($kelas)
    {
        $this->kelas = $kelas;
    }

    public function getKelas()
    {
        return $this->kelas;
    }
}

/*
==================================================
KESIMPULAN
==================================================

1. Class Mahasiswa mewarisi property dan method
   dari class Manusia menggunakan keyword extends.

2. Method setNama() dan getNama() dapat langsung
   digunakan karena diwariskan dari class induk.

3. Getter digunakan untuk mengambil nilai
   property.

4. Setter digunakan untuk mengubah nilai
   property.

5. Inheritance membuat kode lebih rapi dan
   mengurangi duplikasi program.

*/
?>