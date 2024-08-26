<?php
class Kendaraan
{
    var $jumlahRoda = 4;
    var $warna;
    var $bahanBakar = "Premium";
    var $harga = 100000000;
    var $merek;
    var $tahunPembuatan = 2004;

    // function untuk status harga
    function statusHarga()
    {
        if ($this->harga < 5000000) {
            return "Murah";
        } else {
            return "Mahal";
        }
    }

    // function untuk mendapatkan subsidi
    function dapatSubsidi()
    {
        if ($this->bahanBakar == "Pertamax") {
            return "Dapat subsidi";
        } else {
            return "Tidak dapat subsidi";
        }
    }

    // function untuk harga bekas
    function hargaSecondKendaraan()
    {
        return $this->harga * 0.5;
    }
}

// Objek 1
$objekKendaraan1 = new Kendaraan;
$objekKendaraan1->harga = 1000000;
$objekKendaraan1->tahunPembuatan = 1999;

echo "Status Harga : " . $objekKendaraan1->statusHarga();

// Objek 2
$objekKendaraan2 = new Kendaraan;
$objekKendaraan2->bahanBakar = "Pertamax";
$objekKendaraan2->tahunPembuatan = 1999;

echo "<br>";
echo "Status BBM: " . $objekKendaraan2->dapatSubsidi();
echo "<br>";
echo "Harga Bekas: " . $objekKendaraan2->hargaSecondKendaraan();
?>