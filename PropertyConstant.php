<?php

class produk {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;
}

    //object
    $produk = new Produk();
    $produk->kode = 'P0001';
    $produk->nama = 'Laptop';
    $produk->harga = 10000000;
    $produk->stock = '5';

    //hitung pajak
    $pajak = Produk::PAJAK * 100; //hasil 11%
    $jumlahPajak = $produk->harga * Produk::PAJAK; //tambahan 1.11 juta

    //total
    $total = $produk->harga + $jumlahPajak;

    //hasil
    echo "produk: ". $produk->nama;
    echo "<br/>";

    echo "Harga: ". $produk->harga;
    echo "<br/>";

    echo "Stock: ". $produk->stock;
    echo "<br/>";

    echo "Pajak: ". $pajak;
    echo "<br/>";
    echo "Total harga setelah pajak: Rp.". $total;


