<?php

class Manusia
{
    // Property
    protected $name;
    protected $nik = "123212131243243";
    protected $umur;

    // Getter Nama
    public function getNama()
    {
        return $this->name;
    }

    // Setter Nama
    public function setNama($name)
    {
        $this->name = $name;
    }

    // Getter Umur
    public function getUmur()
    {
        return $this->umur;
    }

    // Setter Umur
    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    // Getter NIK
    public function getNIK()
    {
        return $this->nik;
    }
}
?>