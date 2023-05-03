<?php



// Source Code berikut untuk mengubah tinggi dan symbol menggunakan function
$nilai = null;
$symbol = null;

$pilihan = null;
pilihPatern("upsideLeft",7,"@");

function pilihPatern($pilihan,$nilai = 5,$symbol = "*"){
    switch($pilihan){
        case "upsideLeft":
            echo "Anda memilih : ". $pilihan. "<br>";
            upsideLeft($nilai,$symbol);
            break;
        case "downsideLeft":
            echo "Anda memilih : ". $pilihan. "<br>";
            downsideLeft($nilai,$symbol);
            break;
        case "upsideRight":
            echo "Anda memilih : ". $pilihan. "<br>";
            upsideRight($nilai,$symbol);
            break;
        case "downsideRight":
            echo "Anda memilih : ". $pilihan. "<br>";
            downsideRight($nilai,$symbol);
            break;
        default:
            echo "Pattern tidak tersedia.";
    }
}



// upsideLeft(6,"$");
// downsideLeft(9,"@");
// upsideRight(8,"#");
// downsideRight(7);

// function upsideleft
function upsideLeft($nilai = 5,$symbol = "*"){
    // 1 triangle upside left
    for($i = 1;$i <= $nilai;$i++){
        for($j=$i;$j >=1;$j--){
            echo " ". $symbol;
        }
        echo "<br>";
    }
}

// function downsideleft
function downsideLeft($nilai = 5,$symbol = "*"){
    // 2 triangle downside left
    for($i = $nilai;$i >= 1;$i--){
        for($j=$i;$j >=1;$j--){
            echo " ". $symbol;
        }
        echo "<br>";
    }
}

// function upsideright
function upsideRight($nilai = 5,$symbol = "*"){
    // 3 triangle upside right
    for($i = 1; $i <= $nilai; $i++) {
        // print spasi
         for($j = 1; $j <= $nilai - $i; $j++) {
            echo "&nbsp"."&nbsp";
            }
        // print asterik
        for($k = 1; $k <= $i; $k++) {
            echo $symbol;
            }
        echo "<br>";
    }
}

// function downsideright
function downsideRight($nilai = 5,$symbol = "*"){
     // 4 triangle downside right
    for($i = $nilai; $i >= 1; $i--) {
         // print spasi
         for($j = 1; $j <= $nilai - $i; $j++) {
            echo "&nbsp"."&nbsp";
         }
         // print asterik
         for($k = 1; $k <= $i; $k++) {
            echo $symbol;
         }
             echo "<br>";
    }
}


?>