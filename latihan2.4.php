<?php
$x =5;
$y =10;

funtion myTst() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y;
?>