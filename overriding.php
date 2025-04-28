<?php

// Komik
// Game

class Produk
{
    public
        $judul,
        $penulis,
        $penerbit,
        $harga;


    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "Rp. 0")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getinfoProduk()
    {
        $str =  "$this->judul | {$this->getLabel()} (Rp. $this->harga)";
        return $str;
    }
}

class Komik extends Produk
{
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "Rp. 0", $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    public function getinfoProduk()
    {
        $str =  "Komik : " . parent::getinfoProduk() . "- $this->jmlHalaman Halaman";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "Rp. 0", $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    public function getinfoProduk()
    {
        $str =  "Game : " . parent::getinfoProduk() . " - $this->waktuMain Jam";
        return $str;
    }
}


class CetakInfoProduct
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->penulis} | {$produk->getLabel()}";
        return $str;
    }
}



$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("GTA V", "Richo", "Rockstar Game", 100000, 250);

// Komik : Naruto | Masashi Kisimoto,  Shonen Jump (Rp. 30000) - 100 Halaman
// Game : GTA V | Richo,  Rockstar Game (Rp. 100000) - 250 Jam 

echo $produk1->getinfoProduk();
echo "<br>";
echo $produk2->getinfoProduk();
