<?php

function kembalian($belanja, $bayar) {
    $sisa = $bayar - $belanja;

    if($bayar < $belanja) {
        echo "uang anda kurang";
    } else { 

    if($sisa >= 50000) {
        $jml_uang_50 = floor($sisa / 50000);
        if($jml_uang_50 > 0) {
            $sisa = $sisa - ($jml_uang_50*50000);
            echo "<li>".$jml_uang_50." lembar 50000</li>";
        }
    }

    if($sisa < 50000) {
        $jml_uang_20 = floor($sisa / 20000);
        if($jml_uang_20 > 0) {
            $sisa = $sisa - ($jml_uang_20*20000);
            echo "<li>".$jml_uang_20." lembar 20000</li>";
        }
    }

    if($sisa < 20000) {
        $jml_uang_10 = floor($sisa / 10000);
        if($jml_uang_10 > 0) {
            $sisa = $sisa - ($jml_uang_10*10000);
            echo "<li>".$jml_uang_10." lembar 10000</li>";
        }
    }

    if($sisa < 10000) {
        $jml_uang_5 = floor($sisa / 5000);
        if($jml_uang_5 > 0) {
            $sisa = $sisa - ($jml_uang_5*5000);
            echo "<li>".$jml_uang_5." lembar 5000</li>";
        }
    }

    if($sisa < 5000) {
        $jml_uang_2 = floor($sisa / 2000);
        if($jml_uang_2 > 0) {
            $sisa = $sisa - ($jml_uang_2*2000);
            echo "<li>".$jml_uang_2." lembar 2000</li>";
        }
    }

    if($sisa < 2000) {
        $jml_uang_1 = floor($sisa / 1000);
        if($jml_uang_1 > 0) {
            $sisa = $sisa - ($jml_uang_1*1000);
            echo "<li>".$jml_uang_1." lembar 1000</li>";
        }
    }

    if($sisa < 1000) {
        $jml_uang_coin = floor($sisa / 500);
        if($jml_uang_coin > 0) {
            $sisa = $sisa - ($jml_uang_coin*500);
            echo "<li>".$jml_uang_coin." coin 500</li>";
        }
    }

    }
}

kembalian(15500, 50000);

?>