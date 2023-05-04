<?php



function upsideLeft(){
    $nilai = 5;
    for($i = 1;$i <= $nilai;$i++){
        for($j=$i;$j >=1;$j--){
            echo " *";
        }
        echo "<br>";
    }
}


function downsideLeft(){
    $nilai = 5;
    for($i = $nilai;$i >= 1;$i--){
        for($j=$i;$j >=1;$j--){
            echo " *";
        }
        echo "<br>";
    }
}


function upsideRight(){
    $nilai = 5;
    for($i = 1; $i <= $nilai; $i++) {
        // print spasi
        for($j = 1; $j <= $nilai - $i; $j++) {
            echo "&nbsp"."&nbsp";
        }
        // print asterik
        for($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        echo "<br>";
    }
}


function downsideRight(){
    $nilai = 5;
    for($i = $nilai; $i >= 1; $i--) {
        // print spasi
        for($j = 1; $j <= $nilai - $i; $j++) {
            echo "&nbsp"."&nbsp";
        }
        // print asterik
        for($k = 1; $k <= $i; $k++) {
            echo "*";
        }
            echo "<br>";
    }
}



pilihPatern("downsideLeft");
function pilihPatern($pilihan){
    switch($pilihan){
        case "upsideLeft":
            upsideLeft();
            break;
        
        case "downsideLeft":
            downsideLeft();
            break;
        
        case "upsideRight":
            upsideRight();
            break;
        
        case "downsideRight":
            downsideRight();
            break;
        
    }
}









// echo "Pilih Patern dibawah ini!"."<br>";
// echo "1.upsideLeft"."<br>";
// echo "2.downsideLeft"."<br>";
// echo "3.upsideRight"."<br>";
// echo "4.downsideRight"."<br>"."<br>";

// pilihPatern("downsideLeft");

// function pilihPatern($pilihan){

//     switch($pilihan){
//         case "upsideLeft":
//             // 1 triangle upside left
//             $nilai = 5;
//             for($i = 1;$i <= $nilai;$i++){
//                 for($j=$i;$j >=1;$j--){
//                     echo " *";
//                 }
//                 echo "<br>";
//             }
//             break;
//         case "downsideLeft":
//             // 2 triangle downside left
//             $nilai = 5;
//             for($i = $nilai;$i >= 1;$i--){
//                 for($j=$i;$j >=1;$j--){
//                     echo " *";
//                 }
//                 echo "<br>";
//             }
//             break;
//         case "upsideRight":
//             // 3 triangle upside right
//             $nilai = 5;
//             for($i = 1; $i <= $nilai; $i++) {
//                 // print spasi
//                 for($j = 1; $j <= $nilai - $i; $j++) {
//                     echo "&nbsp"."&nbsp";
//                 }
//                 // print asterik
//                 for($k = 1; $k <= $i; $k++) {
//                     echo "*";
//                 }
//                 echo "<br>";
//             }
//             break;
//         case "downsideRight":
//             // 4 triangle downside right
//             $nilai = 5;
//             for($i = $nilai; $i >= 1; $i--) {
//                 // print spasi
//                 for($j = 1; $j <= $nilai - $i; $j++) {
//                     echo "&nbsp"."&nbsp";
//                 }
//                 // print asterik
//                 for($k = 1; $k <= $i; $k++) {
//                     echo "*";
//                 }
//                     echo "<br>";
//                 }
//             break;
//         default:
//             echo "pilihan anda salah!";
//     }
// }

?>