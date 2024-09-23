<?php
class Employee {
    public $nama;
    public $gajiPokok;

    public function __construct($nama, $gajiPokok) {
        $this->nama = $nama;
        $this->gajiPokok = $gajiPokok;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getGajiPokok() {
        return $this->gajiPokok;
    }
}

class PegawaiMingguan extends Employee {
    private $hargaBarang;
    private $stockBarang;

    public function __construct($nama, $gajiPokok, $hargaBarang, $stockBarang) {
        parent::__construct($nama, $gajiPokok);
        $this->hargaBarang = $hargaBarang;
        $this->stockBarang = $stockBarang;
    }

    public function hitungGaji($totalPenjualan) {
        $targetPenjualan = 0.7 * $this->stockBarang;

        if ($totalPenjualan > $targetPenjualan) {
            $gajiTambahan = 0.1 * $this->hargaBarang * $totalPenjualan;
        } else {
            $gajiTambahan = 0.03 * $this->hargaBarang * $totalPenjualan;
        }

        return $this->gajiPokok + $gajiTambahan;
    }
}

// Contoh penggunaan
$pegawai1 = new PegawaiMingguan("Atika", 2000000, 50000, 100);

// Input total penjualan
$totalPenjualan = 90;

$gajiTotal = $pegawai1->hitungGaji($totalPenjualan);

echo "Nama Pegawai: " . $pegawai1->getNama() . "<br>";
echo "Gaji Pokok: Rp" . number_format($pegawai1->getGajiPokok(), 0, ',', '.') . "<br>";
echo "Total Penjualan: " . $totalPenjualan . "<br>";
echo "Gaji Total: Rp" . number_format($gajiTotal, 0, ',', '.');
?>