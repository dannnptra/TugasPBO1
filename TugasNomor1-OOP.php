<?php
    class PersegiPanjang {
        private $panjang;
        private $lebar;
        public function __construct($panjang, $lebar) {
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }

        public function Luas() {
            return $this->panjang * $this->lebar;
        }
    }
$luas = new PersegiPanjang(5, 10);
echo "hasil Luas Persegi Panjang OOP: ", $luas->Luas();
