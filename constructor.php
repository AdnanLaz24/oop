<?php

// Mobil
// Motor

class Product
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
        return "Merk : $this->merk, Nama : $this->nama, Tahun : $this->tahun, Harga : $this->harga";
    }
}

$produk1 = new Product("Honda", "Jazz GE8", "2008", 150000000);

echo $produk1->getLabel();
echo "<hr>";

$produk2 = new Product("Yamaha", "Mio", "2008", 10000000);

echo $produk2->getLabel();
