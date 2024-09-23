<?php
class Perulangan
{
    public function loop()
    {
        $array = array('*', '**', '***', '****', '*****', '*****', '****', '***', '**', '*');
        foreach ($array as $key) {
            echo $key . "<br/>";
        }
    }
}
$ObjekPerulangan = new Perulangan();
echo $ObjekPerulangan->loop() . "<br/>";
?>