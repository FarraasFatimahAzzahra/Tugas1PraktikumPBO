<?php

namespace Pbo\Marketplace;

class Produk {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11; 
    public function __construct($kode, $nama, $harga, $stock) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stock = $stock;
    }

    public function pajak() {
        return self::PAJAK * 100; //hasil 11%
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}


