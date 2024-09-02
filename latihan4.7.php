<?php
class kendaraan{
        var $jumlahRoda;
        var $warna;
        var $bahanBakar;
        var $harga;
        var $merek;
        var $tahunPembuatan;

        function setjumlahRoda($y){
            $this->jumlahRoda = $y;
        }
        function getjumlahRoda(){
            return $this->harga;
        }
        function setwarna($y){
            $this->harga = $y;
        }
    
        function getwarna(){
            return $this->harga;
        }
        function setbahanBakar($y){
            $this->bahanBakar = $y;
        }
        function getbahanbakar(){
            return $this->bahanbakar;
    
        function getHarga(){
            return $this->harga;
        }
    
        function setMerek($x) {
            $this->merek = $x; // Nama property harus konsisten
        }
    
        function getMerek(){
            return $this->merek; // Nama property harus konsisten
        }
    
        function settahunPembuatan($y){
            $this->tahunPembuatan = $y;
        }
        function gettahunPembuatan(){
            return $this->tahunPewmbuatan;
        }
       

}
$Data1 = array('toyota yaris','4','160000000','Merah','Pertamax','2014');
$Data2 = array('Honda Scoppy','2','13000000','Putih,'Premium','2005');
$Data3 = array('Isuzu Panther','4','40000000','Hitam','solar','1994');

    for($i = 1; $i <= 3; $i++) {
    for ($h = 0; $h <= 5; $h++) {
            ${"kendranaa$i" = new kendaraan ();
            ${"kendaraan$i"}->setmerek(${"Data$i"} [0]);
            ${"kendaraan$i"}->setjmlroda(${"Data$i"} [1]);
            ${"kendaraan$i"}->setharga(${"Data$i"} [2]);
            ${"kendaraan$i"}->setwarna(${"Data$i"} [3]);
            ${"kendaraan$i"}->setbhnbakar(${"Data$i"} [4]);
            ${"kendaraan$i"}->settahun(${"Data$i"} [5]);
        
        }
    }
    for(Si = 1; <= 3; $i++) {
        echo "\$kendaraan$i<br>"
        .${"kendaraan$i"}->getMerek()."<br>"
        .${"kendaraan$i"}->getjmlroda()."<br>"
        .${"kendaraan$i"}->getHarga()."<br>"
        .${"kendaraan$i"}->getWarna()."<br>"
        .${"kendaraan$i"}->getbhnbakar()."<br>"
        .${"kendaraan$i"}->getTahun()."<br>"
        .${"kendaraan$i"}->statusharga()."<br>"
        .${"kendaraan$i"}->dapatsubsidi()."<br>"
        .${"kendaraan$i"}->hargasecondKendaraan()."<br><br>";
    }
    ?>
