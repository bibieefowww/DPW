<?php

class buah
{
    public $nama;
    protected $warna;
    private $berat;

    // Setter warna
    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    // Getter warna
    public function getWarna()
    {
        return $this->warna;
    }

    // Setter berat
    public function setBerat($berat)
    {
        $this->berat = $berat;
    }

    // Getter berat
    public function getBerat()
    {
        return $this->berat;
    }
}


// Membuat objek
$mango = new buah();

$mango->nama = "Mango";
$mango->setWarna("Yellow");
$mango->setBerat(300);


// Menampilkan data
echo "Nama Buah : " . $mango->nama . "<br>";
echo "Warna : " . $mango->getWarna() . "<br>";
echo "Berat : " . $mango->getBerat() . " gram";

/*
==================================================
KESIMPULAN
==================================================

1. Property public dapat diakses langsung
   dari luar class.

2. Property protected tidak dapat diakses
   langsung dari luar class.

3. Property private hanya dapat diakses
   dari dalam class itu sendiri.

4. Untuk mengakses property protected dan
   private digunakan method getter dan setter.

5. Access modifier digunakan untuk menjaga
   keamanan dan mengontrol akses data pada
   suatu class.

*/
?>