<?php
class Kendaraan
{
    var $merek;
    var $jmlhRoda;
    var $harga;
    var $warna;
    var $bhnBakar;
    var $tahun;
    var $platNomor; // Menambahkan properti platNomor

    function setmerek($merek)
    {
        $this->merek = $merek;
    }

    function setjmlhroda($jmlhRoda)
    {
        $this->jmlhRoda = $jmlhRoda;
    }

    function setharga($harga)
    {
        $this->harga = $harga;
    }

    function setwarna($warna)
    {
        $this->warna = $warna;
    }
    function setbhnBakar($bhnBakar)
    {
        $this->bhnBakar = $bhnBakar;
    }

    function settahun($tahun)
    {
        $this->tahun = $tahun;
    }

    function setplatnomor($platNomor)
    {
        $this->platNomor = $platNomor;
    }

    public function getStatusHarga()
    {
        return $this->harga > 50000000 ? 'Mahal' : 'Murah';
    }

    function getSubsidi()
    {
        return $this->bhnBakar === 'Premium' && $this->tahun < 2005 ? 'Dapat Subsidi' : 'Tidak Dapat Subsidi';
    }

    function getHargaBekas()
    {
        if ($this->tahun > 2005) {
            return $this->harga * 0.80; // Turun 20%
        } elseif ($this->tahun >= 2000 && $this->tahun <= 2005) {
            return $this->harga * 0.70; // Turun 30%
        } else {
            return $this->harga * 0.60; // Turun 40%
        }
    }

    function getPajak()
    {
        return $this->tahun <= 2017 ? $this->harga * 0.025 : 0;
    }

    function getHariOperasi()
    {
        $isPlatGenap = intval(substr($this->platNomor, -1)) % 2 == 0;
        return $isPlatGenap ? 'Selasa, Kamis, dan Sabtu' : 'Senin, Rabu, Jumat, dan Minggu';
    }
}

// objek
$kendaraan = new Kendaraan("Toyota", 4, 60000000, "Merah", "Premium", 2004, "B1234CD");

echo "Merek: " . $kendaraan->merek . "<br>";
echo "Jumlah Roda: " . $kendaraan->jmlhRoda . "<br>";
echo "Harga: " . number_format($kendaraan->harga, 0, ',', '.') . "<br>";
echo "Warna: " . $kendaraan->warna . "<br>";
echo "Bahan Bakar: " . $kendaraan->bhnBakar . "<br>";
echo "Tahun: " . $kendaraan->tahun . "<br>";
echo "Status Harga: " . $kendaraan->getStatusHarga() . "<br>";
echo "Subsidi: " . $kendaraan->getSubsidi() . "<br>";
echo "Harga Bekas: " . number_format($kendaraan->getHargaBekas(), 0, ',', '.') . "<br>";
echo "Pajak: " . number_format($kendaraan->getPajak(), 0, ',', '.') . "<br>";
echo "Hari Operasi Plat Nomor: " . $kendaraan->getHariOperasi() . "<br>";
?>