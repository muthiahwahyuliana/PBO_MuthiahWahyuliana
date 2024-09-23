<?php

class Segitiga
{
    var $t;

    public function setTinggi($t)
    {
        $this->t = $t;
    }

    public function getTinggi()
    {
        return $this->t;
    }

    public function SegitigaKiri()
    {
        for ($i = 1; $i <= $this->t; $i++) {
            for ($j = $this->t; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*";
            }
            echo "<br>";
        }

        for ($i = $this->t - 1; $i >= 1; $i--) {
            for ($j = $this->t; $j > $i; $j--) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "*";
            }
            echo "<br>";
        }
    }
}

//Objek
$segitiga = new Segitiga();
$segitiga->setTinggi(5);
$segitiga->SegitigaKiri();