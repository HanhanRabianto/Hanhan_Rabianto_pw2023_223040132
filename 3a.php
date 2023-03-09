<?php 
echo "<h4>Menghitung Luas Lingkaran</h4>";

$L1 =19;
$L2 =29;
function hitungLuasLingkran($L1)
{
    $luas = 3.14 * $L1 * $L1; //rumus luas
    return $luas . "cm<sup>2</sup>";
}

echo "jari-jari = " . $L1 . " cm <br>";
echo "Luas lingkaran = " . hitungLuasLingkran($L1);

echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($L2)
{
    $keliling = 2 * 3.14 * $L2; // rumus keliling
    return $keliling . "cm";
}

echo"jari-jari = " . $L2 . "cm <br>";
echo "Keliling Lingkaran = " . hitungKelilingLingkaran($L2);

echo "<hr>";


?>