<?php
//Membuat class
class AngsuranKreadit {
    var $Pinjaman;
    var $bunga;
    var $Lamaangsuran;

    function setPinjaman ($Pinjaman){
        $this->pinjaman = $Pinjaman;
    }

    function setBunga ($Bunga){
        $this->Bunga = $Bunga;
    }

    function setLamaangsuran ($Lamaangsuran){
        $this->Lamaangsuran = $Lamaangsuran;
    }

    function getPinjaman (){
        return $this->Pinjaman;
    }

    function getBunga(){
        return $this->Bunga;
    }

    function getLamaAngsuran(){
        return $this->Lamaangsuran;
    }
}

//Menghitung Angsuran
function hitungAngsuran() {
    $angsuranPokok = $this->getPinjaman() / $this->getLamaAngsuran();
    $sisaPinjaman = $this->getPinjaman();
    $bungaBulanan = ($this->getBunga() / 100) * $this->getPinjaman();
    $angsuran = ();

    for ($bulan = 1; $bulan <= $this->getLamaAngsuran(); $bulan++) {
        $bungaPerBulan = $bungaBulanan * ($this->getLamaAngsuran() - $bulan + 1) / $this->getLamaAngsuran();
        $totalAngsuran = $angsuranPokok + $bungaPerBulan;
        $sisaPinjaman -= $angsuranPokok;

        $angsuran () = {
            'bulan' => $bulan,
            'angsuranPokok' => $angsuranPokok,
            'bunga' => $bungaPerBulan,
            'totalAngsuran' => $totalAngsuran
        };
    }
    return $angsuran;
}

//inisialisasi objek
$pinjaman = 1000000; // Rp. 1.000.000
$bunga = 10; // 10%
$lamaAngsuran = 5; // 5 bulan

$programAngsuran = new AngsuranKredit($pinjaman, $bunga, $lamaAngsuran);

// Mendapatkan hasil angsuran
$angsuranArray = $programAngsuran->hitungAngsuran();

// Tampilkan angsuran
echo "Program Penghitung Besaran Angsuran Hutang\n";
echo "Besaran Pinjaman : Rp. " . number_format($pinjaman, 0, ',', '.') . "\n";
echo "Besaran Bunga (%) : " . $bunga . "\n";
echo "Lama Angsuran (bulan) : " . $lamaAngsuran . "\n";

foreach ($angsuranArray as $angsuran) {
    echo "Angsuran bulan ke-" . $angsuran['bulan'] . " : Rp. " . number_format($angsuran['angsuranPokok'], 0, ',', '.') . 
         " + Rp. " . number_format($angsuran['bunga'], 0, ',', '.') . " = Rp. " . number_format($angsuran['totalAngsuran'], 0, ',', '.') . "\n";
}

?>