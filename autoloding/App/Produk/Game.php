<?php

class Game extends Produk implements InfoProduk
{
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "Rp. 0", $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    public function getInfo()
    {
        $str =  "$this->judul | {$this->getLabel()} (Rp. $this->harga)";
        return $str;
    }
    public function getinfoProduk()
    {
        $str =  "Game : " . $this->getInfo() . " - $this->waktuMain Jam";
        return $str;
    }
}
