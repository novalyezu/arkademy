<?php

function drawLine($total) {
    $bintang = "*";
    for($i = 0; $i < $total; $i++) {
        for($j = 0; $j < $i; $j++) {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        echo $bintang."<br>";
    }
}

drawLine(12);

?>