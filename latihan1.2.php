Class Mobil {
var $jumlahRoda=4;
var $warna="Merah";
var $bahanbakar="pertamax";
var $harga=120000000;
var $merek='A';

public function statusHarga()
{
if ($thias->harga > 50000000) $status = 'Mahal';else $status = 'Murah';
return $status;
}
}