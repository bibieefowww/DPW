<?php

class akunBank
{
    protected $accountNumber;
    protected $jmlUang;
    protected $nama;

    // Constructor
    public function __construct($nomorAkun, $nominal)
    {
        $this->accountNumber = $nomorAkun;
        $this->jmlUang = $nominal;
    }

    // ==========================
    // Getter dan Setter Nama
    // ==========================

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    // ==========================
    // Getter Account Number
    // ==========================

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    // ==========================
    // Tambah Saldo
    // ==========================

    public function tambahUang($jumlah)
    {
        $this->jmlUang += $jumlah;
    }

    // ==========================
    // Kurangi Saldo
    // ==========================

    public function kurangiUang($jumlah)
    {
        $this->jmlUang -= $jumlah;
    }

    // ==========================
    // Tampilkan Saldo
    // ==========================

    public function tampilkanSaldo()
    {
        return $this->jmlUang;
    }

    // ==========================
    // Hitung Pajak 11%
    // ==========================

    public function hitungPajak()
    {
        return $this->jmlUang * 11 / 100;
    }
}

/*
==========================================
KESIMPULAN
==========================================

1. Constructor digunakan untuk memberi
   nilai awal saat objek dibuat.

2. Getter digunakan untuk mengambil data.

3. Setter digunakan untuk mengubah data.

4. Method tambahUang() digunakan untuk
   menambah saldo.

5. Method kurangiUang() digunakan untuk
   mengurangi saldo.

6. Method hitungPajak() digunakan untuk
   menghitung pajak sebesar 11%.

*/
?>