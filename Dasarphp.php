<?php
    $angka = 10;
    $sisa = $angka % 2;

    if ($sisa == 1) {
        echo $angka . " = ganjil";
    }else{
        echo $angka . " = genap";
    }

    echo 'aku gatau mau nulis apa';

// Kondisi If
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

// Kondisi Switch
    $tugas = 60;
    $UTS = 80;
    $UAS = 85;

    $rata_tugas = $tugas * 0.4;
    $rata_uts = $UTS * 0.3;
    $rata_uas = $UAS * 0.3;
    $total_nilai = $rata_tugas + $rata_uts + $rata_uas;

    echo 'Tugas : '.$tugas.'<br>';
    echo 'UTS : '.$UTS.'<br>';
    echo 'UAS : '.$UAS.'<br>';
    echo 'Total Nilai : '.$total_nilai.'<br><br>';

switch ($total_nilai) {
    case $total_nilai >= 90 && $total_nilai <= 100:
        echo 'nilai A';
        break;
    case $total_nilai >= 70 && $total_nilai <= 90:
        echo 'nilai B';
        break;
    case $total_nilai <= 70:
        echo 'nilai C';
        break;
    
    default:
        echo 'Error Try Again';
        break;
}
?>
