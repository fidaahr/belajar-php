<?php

// Looping 

for ($angka=1; $angka < 1000; $angka++) { 
    if ($angka == 1) {
        echo $angka . "<br>";
        // $angka++;
    }
    
    if ($angka == 6) {
        continue;
    }

    if ($angka % 3 == 0) {
        
        if ($angka % 12 == 0) {
            echo $angka . "<br>";
            $angka *= 3;
        }
        echo $angka . "<br>";
    }
    if ($angka > 1000) {
        break;
    }
}
?>