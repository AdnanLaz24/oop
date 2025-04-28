<?php

// Mobil
// Motor

class Produk
{
    public  $merk = "merk",
        $nama = "nama",
        $tahun  = "tahun",
        $harga = "Rp. 0";

    public function __construct($merk, $nama, $tahun, $harga)
    {
        $this->merk = $merk;
        $this->nama = $nama;
        $this->tahun = $tahun;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->merk, Rp. $this->harga";
    }
}


class CetakInfoProduct
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->merk} | {$produk->getLabel()}, {$produk->tahun}";
        return $str;
    }
}


$produk1 = new Produk("Honda", "Jazz GE8", "2008", 150000000);
$produk2 = new Produk("Yamaha", "Mio", "2008", 10000000);

echo $produk1->getLabel();
echo "<hr>";
echo $produk2->getLabel();


$infoProduk1 = new CetakInfoProduct();
echo "<hr>";
echo $infoProduk1->cetak($produk2);
