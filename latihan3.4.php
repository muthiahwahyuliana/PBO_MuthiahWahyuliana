<?php
class ProgramPerhitunganBesaranAngsuranHutang
{
    var $BesaranPinjaman;
    var $masukanBesarBunga;
    var $totalPinjaman;
    var $lamaAngsuran;
    var $besaranAngsuran;
    var $keterlambatanAngsuran;
    var $dendaKeterlambatanPerhari;
    var $dendaKeterlambatan;
    var $besaranPembayaran;

    // Konstruktor untuk menginisialisasi properti
    function __construct($besaranPinjaman, $masukanBesarBunga, $lamaAngsuran, $keterlambatanAngsuran)
    {
        $this->besaranPinjaman = 1000000;
        $this->masukanBesarBunga = 0.10; //per hari
        $this->lamaAngsuran = 5;
        $this->keterlambatanAngsuran = 40;
        $this->dendaKeterlambatan = 0.15;
        $this->hitungTotalPinjaman();
        $this->hitungBesaranAngsuran();
        $this->hitungDendaKeterlambatan();
        $this->hitungBesaranPembayaran();
    }

    // Metode untuk menghitung total pinjaman berdasarkan bunga
    private function hitungTotalPinjaman()
    {
        $this->totalPinjaman = $this->besaranPinjaman + 0.10;
    }

    // Metode untuk menghitung besaran angsuran
    private function hitungBesaranAngsuran()
    {
        $this->besaranAngsuran = $this->totalPinjaman / $this->lamaAngsuran;
    }

    // Metode untuk menghitung denda keterlambatan
    private function hitungDendaKeterlambatan()
    {
        $this->dendaKeterlambatan = $this->keterlambatanAngsuran + 0.15;
    }

    // Metode untuk menghitung besaran pembayaran 
    private function hitungBesaranPembayaran()
    {
        $this->besaranPembayaran = $this->besaranAngsuran + $this->dendaKeterlambatan;
    }

    // Metode untuk menampilkan informasi angsuran
    function tampilkanInformasi()
    {
        echo "Besaran Pinjaman: " . number_format($this->besaranPinjaman, 2, ',', '.') . "<br>";
        echo "Besar Bunga (%): " . number_format($this->masukanBesarBunga, 2, ',', '.') . "<br>";
        echo "Total Pinjaman: " . number_format($this->totalPinjaman, 2, ',', '.') . "<br>";
        echo "Lama Angsuran (bulan): " . $this->lamaAngsuran . "<br>";
        echo "Besaran Angsuran: " . number_format($this->besaranAngsuran, 2, ',', '.') . "<br>";
        echo "Keterlambatan Angsuran (hari): " . $this->keterlambatanAngsuran . "<br>";
        echo "Denda Keterlambatan: " . number_format($this->dendaKeterlambatan, 2, ',', '.') . "<br>";
        echo "Besaran Pembayaran: " . number_format($this->besaranPembayaran, 2, ',', '.') . "<br>";
    }
}

// Membuat objek dan menampilkan informasi
$objek = new ProgramPerhitunganBesaranAngsuranHutang(1000000, 10, 5, 40);
$objek->tampilkanInformasi();
?>