<?php
// definisikan variable konstanta
define ('PHI', 3.14);

// soal 1 hitunglah luas lingkaran dengan jari jari 8
// soal 2 hitunglah keliling lingkaran dengan jari jari 8

// definisikan variable jari jari
$jari = 8;
$luas = PHI * $jari *$jari;
$keliling = 2 * PHI *$jari;

//fungsi dari variable adalah menampung sebuah nilai

echo "Luas lingkaran dengan jari jari $jari adalah $luas";
echo '<br/> Keliling lingkaran dengan jari-jari' .$jari . 'adalah' . $keliling;

//============================
?>