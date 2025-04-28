<?php

require_once "App/init.php";

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("GTA V", "Richo", "Rockstar Game", 100000, 250);

$cetakProduk = new CetakInfoProduct();

$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
