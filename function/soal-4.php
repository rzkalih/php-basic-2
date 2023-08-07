<?php
    echo "<h3>Soal No 4 Tentukan Nilai </h3>";
    /*
    Soal 4
    buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter 
    berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” 
    Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar 
    sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
    */
    
    // Code function di sini
    function tentukan_nilai($integer) {
        if ($integer <= 100 && $integer >= 85) {
            return "Sangat Baik<br>";
        } elseif ($integer <= 85 && $integer >= 70) {
            return "Baik<br>";
        } elseif ($integer <= 70 && $integer >= 60) {
            return "Cukup<br>";
        } else {
            return "Kurang<br>";
        }
    }
    
    // Hapus komentar di bawah ini untuk jalankan code
    echo tentukan_nilai(95); //Sangat Baik
    echo tentukan_nilai(75); //Baik
    echo tentukan_nilai(65); //Cukup
    echo tentukan_nilai(50); //Kurang
    
?>