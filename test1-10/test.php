<?php

// SHOWROOM
// Jenis Kendaraan : Mobil & Motor

class Kendaraan
{
    private  $merk,
        $tipe,
        $warna,
        $harga;

    public function __construct($merk = "merk", $tipe = "tipe", $warna = "warna", $harga = 0)
    {
        $this->merk = $merk;
        $this->tipe = $tipe;
        $this->warna = $warna;
        $this->harga = $harga;
    }

    // SETTER & GETTER
    public function setMerk($merk)
    {
        $this->merk = $merk;
    }
    public function getMerk()
    {
        return $this->merk;
    }
    public function setTipe($tipe)
    {
        $this->tipe = $tipe;
    }
    public function getTipe()
    {
        return $this->tipe;
    }
    public function setWarna($warna)
    {
        $this->warna = $warna;
    }
    public function getWarna()
    {
        return $this->warna;
    }
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }
    public function getHarga()
    {
        return $this->harga;
    }

    public function getInfoKendaraan()
    {
        $str = "Merk : {$this->merk} | Tipe : {$this->tipe} | Warna : {$this->warna} | Harga : Rp. ({$this->harga}) ";
        return $str;
    }
}

class Mobil extends Kendaraan
{
    public $jumlahPintu;

    public function __construct($merk = "merk", $tipe = "tipe", $warna = "warna", $harga = 0, $jumlahPintu = 0)
    {
        parent::__construct($merk, $tipe, $warna, $harga);
        $this->jumlahPintu = $jumlahPintu;
    }

    public function getInfoKendaraan()
    {
        return parent::getInfoKendaraan() . "| {$this->jumlahPintu} Pintu";
    }
}

class Motor extends Kendaraan
{
    public $jenisMotor;

    public function __construct($merk = "merk", $tipe = "tipe", $warna = "warna", $harga = 0, $jenisMotor = "jenisMotor")
    {
        parent::__construct($merk, $tipe, $warna, $harga);
        $this->jenisMotor = $jenisMotor;
    }

    public function getInfoKendaraan()
    {
        return parent::getInfoKendaraan() . "| Jenis Motor : {$this->jenisMotor}";
    }
}


$produk1 = new Mobil("Toyota Avanza", "MPV", "Putih", 200000000, 4);
$produk2 = new Motor("Yamaha NMAX", "Matic", "Hitam", 32000000, "Matic");

echo $produk1->getInfoKendaraan();
echo "<br>";
echo $produk2->getInfoKendaraan();
