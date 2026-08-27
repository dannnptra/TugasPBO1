<?php
    function Luas($panjang, $lebar) {
        return $panjang * $lebar;
    }

$a = 10;
$b = 5;

$luas = Luas($a, $b);

echo "hasil Luas Persegi Panjang prosedural: ", $luas;