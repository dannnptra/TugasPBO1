<?php
    function hitungNilaiAkhir($uts, $uas, $tugas) {
        return ($uts * 0.3) + ($uas * 0.4) + ($tugas * 0.3);
    }

$uts = 70;
$uas = 83;
$tugas = 79;

$akhir = hitungNilaiAkhir($uts, $uas, $tugas);
$float = (float) $akhir;
echo "Nilai akhir mahasiswa adalah:", $float 
?>