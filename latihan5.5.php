<?php

$KartuMember = "Tidak Memiliki";
$Totalbelanjaan = 20000;
$Diskon = 5000;

switch ($KartuMember) {
    case ($kartuMember = "Memiliki" && $Totalbelanjaan > 150000):
        $Diskon = 150000;
        break;
    case ($kartuMember = "Memiliki" && $Totalbelanjaan > 500000):
        $Diskon = 50000;
        break;
    case ($KartuMember = "Tidak Memiliki" && $Totalbelanjaan > 100000):
        $Diskon = 5000;
        break;
    default:
        $Diskon = 0;
        break;
}

$Totalbayar = $Totalbelanjaan - $Diskon;

echo "Apakah ada kartu member : " . ($kartuMember ? "ya" : "Tidak");
echo "<br/>";
echo "Total belanjaan: $Totalbelanjaan";
echo "<br/>";
echo "Diskon: $Diskon";
echo "<br/>";
echo "Total Bayar: $Totalbayar";

