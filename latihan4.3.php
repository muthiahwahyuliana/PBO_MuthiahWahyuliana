<?php
//akses properties
class Kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $tahunPembuatan;

    function setMerek($x) {
        $this->merek = $x; // Nama property harus konsisten
    }

    function getMerek(){
        return $this->merek; // Nama property harus konsisten
    }

    function setHarga($y){
        $this->harga = $y;
    }

    function getHarga(){
        return $this->harga;
    }
}

$kendaraan1 = new Kendaraan;
$kendaraan1->setMerek('Yamaha MIO');
$kendaraan1->setHarga(10000000);
echo $kendaraan1->getMerek(); // Memanggil method dengan nama yang benar
echo "<br>";
echo $kendaraan1->getHarga(); // Memanggil method dengan nama yang benar
?>
