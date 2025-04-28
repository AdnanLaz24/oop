<?php

class Mobil
{
    private $merk,
        $warna,
        $hargaSewaPerHari,
        $status;
    public function __construct($merk = "merk", $warna = "warna", $hargaSewaPerHari = "hargaSewaPerHari", $status = "status")
    {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->hargaSewaPerHari = $hargaSewaPerHari;
        $this->status = $status;
    }
    public function getHargaSewa()
    {
        return "{$this->hargaSewaPerHari}";
    }

    public function sewa() {}

    public function kembalikan() {}

    public function isTersedia() {}
}
