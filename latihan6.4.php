<?php
class Perulangan
{
    public function loop()
    {
        $array = array('subang', 'bandung', 'jakarta', 'surabaya', 'yogyakarta');
        foreach ($array as $key) {
            echo $key . "<br/>";
        }
    }
}
$ObjekPerlangan = new Perulangan();
echo "Nam-Nama Kota di pulau Jawa : " . "<br/>";
echo $ObjekPerulangan->loop() . "<br/>";
?>