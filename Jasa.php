<?php

namespace Pbo\Marketplace;

require_once('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

class Jasa {

    use Produk;

    public function payment($tipe) {

        return match($tipe) {
            "virtual" => 'Vitual Account',
            "qris" => 'Qris',
            default => 'hanya bisa pembayaran va dan qris'
        };
    }
}