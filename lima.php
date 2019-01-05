<?php

function count_handshake($orang) {
    $total = 0;
    for($i = 0; $i < $orang; $i++) {
        for($j = 0; $j < $i; $j++) {
            $total = $total + 1;
        }
    }
    return $total;
}

print(count_handshake(3));
echo "<br>";
print(count_handshake(6));

?>