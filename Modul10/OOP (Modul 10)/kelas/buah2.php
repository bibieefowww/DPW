<?php

class buah2
{
    public $nama;
    public $warna;
    public $bobot;

    // Setter nama
    public function set_name($n)
    {
        $this->nama = $n;
    }

    // Setter warna
    public function set_color($n)
    {
        $this->warna = $n;
    }

    // Setter bobot
    public function set_weight($n)
    {
        $this->bobot = $n;
    }

    // Getter nama
    public function get_name()
    {
        return $this->nama;
    }

    // Getter warna
    public function get_color()
    {
        return $this->warna;
    }

    // Getter bobot
    public function get_weight()
    {
        return $this->bobot;
    }
}


$mango = new buah2();

$mango->set_name("Mango");
$mango->set_color("Yellow");
$mango->set_weight(300);

echo "Nama Buah : " . $mango->get_name() . "<br>";
echo "Warna Buah : " . $mango->get_color() . "<br>";
echo "Bobot Buah : " . $mango->get_weight() . " gram";

/*
==================================================
KESIMPULAN
==================================================

1. Method public dapat dipanggil dari luar class.

2. Method protected hanya dapat dipanggil
   dari dalam class dan class turunan.

3. Method private hanya dapat dipanggil
   dari dalam class itu sendiri.

4. Error terjadi karena method set_color()
   bertipe protected dan set_weight()
   bertipe private sehingga tidak dapat
   dipanggil langsung melalui objek.

5. Agar dapat diakses dari luar class,
   method harus dibuat public atau
   menggunakan method public sebagai
   perantara.

*/
?>