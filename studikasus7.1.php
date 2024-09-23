<?php
class Employee {
    public $nama; //
    public $gaji;
    public $lamaKerja;

    public function __construct($nama, $gaji, $lamaKerja) {
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->lamaKerja = $lamaKerja;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getGaji() {
        return $this->gaji;
    }

    public function getLamaKerja() {
        return $this->lamaKerja;
    }
}

class Programmer extends Employee {
    public function __construct($nama, $gaji, $lamaKerja) {
        parent::__construct($nama, $gaji, $lamaKerja);
    }

    // Method untuk menghitung gaji Programmer dengan bonus
    public function hitungGaji() {
        $bonus = 0;
        if ($this->lamaKerja >= 1 && $this->lamaKerja <= 10) {
            $bonus = 0.01 * $this->lamaKerja * $this->gaji;
        } else if ($this->lamaKerja > 10) {
            $bonus = 0.02 * $this->lamaKerja * $this->gaji;
        }
        return $this->gaji + $bonus;
    }
}

// Objek
$programmer = new Programmer("Muthiah", 5000000, 5);

echo "Nama Programmer: " . $programmer->getNama() . "<br>";
echo "Gaji Pokok: " . $programmer->getGaji() . "<br>";
echo "Lama Kerja: " . $programmer->getLamaKerja() . " tahun <br>";
echo "Total Gaji: " . $programmer->hitungGaji() . "<br>";
?>