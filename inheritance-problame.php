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
        $waktuMain = 0,
        $type = "type";


    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $type)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->type = $type;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function infoLengkap()
    {
        // Problame saat pengkodisian yang banyak sekali
        if ($this->type == "Komik") {
            $jenis = "$this->jmlHalaman Halaman";
        } else if ($this->type == "Game") {
            $jenis = "$this->waktuMain Jam";
        }
        return "$this->type : $this->judul | {$this->getLabel()} (Rp. $this->harga) - $jenis";
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



$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("GTA V", "Richo", "Rockstar Game", 100000, 0, 250, "Game");

// Komik : Naruto | Masashi Kisimoto,  Shonen Jump (Rp. 30000) - 100 Halaman
// Game : GTA V | Richo,  Rockstar Game (Rp. 100000) - 250 Jam 

echo $produk1->infoLengkap();
echo "<br>";
echo $produk2->infoLengkap();
