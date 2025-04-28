<?php

// Mobil
// Motor

class Product
{
    public  $merk = "merk",
        $nama = "nama",
        $tahun  = "tahun",
        $harga = "Rp. 0";

    public function getLabel()
    {
        return "$this->merk, $this->nama, $this->tahun";
    }
}

// $produk1 = new Product();
// $produk1->merk = "Honda";
// var_dump($produk1);


// $produk2 = new Product();
// $produk2->merk = "Toyota";
// var_dump($produk2);


$produk3 = new Product();
$produk3->merk = "Honda";
$produk3->nama = "Jazz GE8";
$produk3->tahun = "2008";
$produk3->harga = 150000000;

echo $produk3->getLabel();
echo "<hr>";

$produk4 = new Product();
$produk4->merk = "Yamaha";
$produk4->nama = "Mio";
$produk4->tahun = "2008";
$produk4->harga = 10000000;

echo $produk4->getLabel();
