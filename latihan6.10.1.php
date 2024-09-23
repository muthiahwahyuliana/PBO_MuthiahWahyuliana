<?php
for ($i = 2; $i < 11; $i++) {
    for ($j = $i; $j <= 11; $j++) {
        echo "&nbsp;";

    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*";

    }
    echo '<br/>';
    $i = $i + 1;

}
?>