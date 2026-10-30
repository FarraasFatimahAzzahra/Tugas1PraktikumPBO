<?php

//panggil file propertyconstant
require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//object
$produk = new Produk('P0001', 'Laptop', 10000000, 5);
    

//hasil
echo "Produk: ". $produk->nama;
echo "<br/>";

echo "Harga: ". $produk->harga;
echo "<br/>";

echo "Stock: ". $produk->stock;
echo "<br/>";

echo "Pajak: ". $produk->pajak(). "%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: Rp.". $produk->total();