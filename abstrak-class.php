<?php

// Komik
// Game

abstract class Produk
{
    private
        $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;


    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "Rp. 0")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function setJudul($judul)
    {
        $this->judul = $judul;
    }
    public function getJudul()
    {
        return $this->judul;
    }
    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }
    public function getPenerbit()
    {
        return $this->penerbit;
    }
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
    public function getdiskon()
    {
        return $this->diskon;
    }
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getinfoProduk();

    public function getInfo()
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
        $str =  "Komik : " . $this->getInfo() . " - $this->jmlHalaman Halaman";
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
        $str =  "Game : " . $this->getInfo() . " - $this->waktuMain Jam";
        return $str;
    }
}


class CetakInfoProduct
{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "<br>- {$p->getinfoProduk()}";
        }
        return $str;
    }
}



$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("GTA V", "Richo", "Rockstar Game", 100000, 250);

$cetakProduk = new CetakInfoProduct();

$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
