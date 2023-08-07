<?php
    echo "<h3>Soal No 2 Reverse String</h3>";
    /* 
    Soal No 2
    Reverse String
    Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
    Function reverseString menerima satu parameter berupa string.
    NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!
    
    reverseString("abdul");
    Output: ludba
    */
    
    // Code function di sini
    function reverseString($nama){
        $length = strlen($nama);
        $bolakBalikHuruf = '';
        for ($i = $length - 1; $i >= 0; $i--) {
            $bolakBalikHuruf .= $nama[$i];
        }
        echo($bolakBalikHuruf . "<br>");
    }
    
    // Hapus komentar di bawah ini untuk jalankan Code
    reverseString("abdul");
    reverseString("bootcamp");
    reverseString("We Are JCC Developers");
?>