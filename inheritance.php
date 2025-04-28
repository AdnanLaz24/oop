<?php

// Komik
// Game

class Produk
{
    public
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = "Rp. 0",
        $jmlHalaman = 0,
        $waktuMain = 0;


    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
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
    public function getinfoProduk()
    {
        $str =  "Komik : $this->judul | {$this->getLabel()} (Rp. $this->harga) - $this->jmlHalaman Halaman";
        return $str;
    }
}

class Game extends Produk
{
    public function getinfoProduk()
    {
        $str =  "Game : $this->judul | {$this->getLabel()} (Rp. $this->harga) - $this->waktuMain Jam";
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



$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("GTA V", "Richo", "Rockstar Game", 100000, 0, 250);

// Komik : Naruto | Masashi Kisimoto,  Shonen Jump (Rp. 30000) - 100 Halaman
// Game : GTA V | Richo,  Rockstar Game (Rp. 100000) - 250 Jam 

echo $produk1->getinfoProduk();
echo "<br>";
echo $produk2->getinfoProduk();
