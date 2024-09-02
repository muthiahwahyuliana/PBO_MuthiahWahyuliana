<?php
//membuat class
class mahasiswa{
    var $Nama;
    var $Kelas;
    var $Matakuliah;
    var $Nilai;
   
    function setNama ($x) {
        $this->Nama = $x;
    }

    function getKelas(){
        return $this->Kelas;
    }

    function setMatakuliah($y){
        $this->Matakuliah=$y;
    }

    function getNilai(){
        return $this->Nilai;
    }
    function statusKeterangan()
    {
        if ($this->harga > 75) $status = 'Lulus Kuis';
        else $status ='Tidak Lulus Kuis';
        return $status;
    }

}

$Data1 = Array('Aditya','SI 2','Pemrograman Berorientasi Objek',80);
$Data2 = Array('Shinta','SI 2','Pemrograman Berorientasi Objek',75);
$Data3 = Array('Ineu','SI 2','Pemrograman Berorientasi Objek',55);

for($i = 1; $i <= 3; $i++) {
    for($h = 0; $h <= 3; $h++) {
         ${"kendaraan$i"} = new Mahasiswa ();
         ${"Mahasiswa$i"}->setNama(${"Data$i"} [0]);
         ${"Mahasiswa$i"}->setKelas(${"Data$i"} [1]);
         ${"Mahasiswa$i"}->setMatakuliah(${"Data$i"} [2]);
         ${"Mahasiswa$i"}->setNilai(${"Data$i"} [3]);
    }
}

for($i = 1; $i <= 3; $i++) {
    echo "Mahasiswa$i<br>", "Nama:"
    . ${"Mahasiswa$i"}->getNama()."<br>", "Kelas:"
    . ${"Mahasiswa$i"}->getKelas()."<br>", "Matakuliah:"
    . ${"Mahasiswa$i"}->getMatakuliah()."<br>", "Nilai:"
    . ${"Mahasiswa$i"}->getNilai()."<br>" , "Keterangan Kuis:"
    . ${"Mahasiswa$i"}->statusKeterangan(). "<br><br>";
    }
?>