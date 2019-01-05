<?php

function cekPass($password) {

    $minim = "false";
    $huruf_besar = "false";
    $huruf_kecil = "false";
    $angka = "false";
    $karakter = "false";
    $words = array();

    if(strlen($password) < 8) {
        $minim = "false";
    } else {
        $minim = "true";
    }
    
    for($i = 0; $i < strlen($password); $i++) {
        $words[$i] = substr($password, $i, 1);
    }

    for($i = 0; $i < count($words); $i++ ){
        if($huruf_besar == "false") {
            if(ctype_upper($words[$i])) {
                $huruf_besar = "true";
            } else {
                $huruf_besar = "false";
            }
        }
    }

    for($i = 0; $i < count($words); $i++ ){
        if($huruf_kecil == "false") {
            if(ctype_lower($words[$i])) {
                $huruf_kecil = "true";
            } else {
                $huruf_kecil = "false";
            }
        }
    }

    for($i = 0; $i < count($words); $i++ ){
        if($angka == "false") {
            if(is_numeric($words[$i])) {
                $angka = "true";
            } else {
                $angka = "false";
            }
        }
    }

    for($i = 0; $i < count($words); $i++ ){
        if($karakter == "false") {
            if (preg_match('/[\'^£$%&*()}{@#~?!<>,.;:`"|=_+¬-]/', $words[$i])) {
                $karakter = "true";
            } else {
                $karakter = "false";
            }
        }
    }

    if($minim == 'false') {
        echo "<li>Password minimal 8 karakter.</li>";
    }

    if($huruf_besar == 'false') {
        echo "<li>Harus ada huruf besar.</li>";
    }

    if($huruf_kecil == 'false') {
        echo "<li>Harus ada huruf kecil.</li>";
    }

    if($angka == 'false') {
        echo "<li>Harus ada angka.</li>";
    }

    if($karakter == 'false') {
        echo "<li>Harus ada karakter spesial.</li>";
    }

    if($minim != 'false' && $huruf_besar != 'false' && $huruf_kecil != 'false' && 
        $angka != 'false' && $karakter != 'false') {
        echo "Password valid.";
    }
}

cekPass('123Qwer_');

?>