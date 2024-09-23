<?php
class Employee {
    public $nama;
    public $gaji;
    public $lamaKerja;

    public function __construct($nama, $gaji, $lamaKerja) {
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->lamaKerja = $lamaKerja;
    }

    public function hitungGaji() {
        return $this->gaji;
    }
}

class Direktur extends Employee {
    public function hitungGaji() {
        $bonus = 0.5 * $this->lamaKerja * $this->gaji;
        $tunjangan = 0.1 * $this->lamaKerja * $this->gaji;
        return parent::hitungGaji() + $bonus + $tunjangan;
    }
}

// Contoh penggunaan
$direktur = new Direktur("Budi", 10000000, 5);
echo "Nama: " . $direktur->nama . "<br>";
echo "Gaji: " . $direktur->hitungGaji() . "<br>";
?>