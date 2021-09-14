<?php
    // $angka = 10;
    // $sisa = $angka % 2;

    // if ($sisa == 1) {
    //     echo $angka . " = ganjil";
    // }else{
    //     echo $angka . " = genap";
    // }
    

    // echo 'aku gatau mau nulis apa';

    $tinggi = 157;
    $beratbadan = 48;

    $t = $tinggi/100;
    $bmi = $beratbadan/($t*$t);
    echo $bmi;

    if ($bmi >= 17.0 && $bmi <= 18.4){
        echo ' = Badan Kamu Kurus';
    }elseif ($bmi >= 18.5 && $bmi <= 25.0){
        echo ' = Badan Kamu Ideal';
    }elseif ($bmi >= 25.1 && $bmi <= 27.0){
        echo ' = Badan Kamu Gemuk';
    }else{
        echo ' = Error Try Again';
    }