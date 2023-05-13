<?php
// sesi dimulai dari koneksi agar pages seperti detail tambah dan edit tidak bisa masuk
session_start();
// Membuat sebuah kode koneksi ke database dengan nama table arkatamalatihan13

$conn = mysqli_connect("localhost:3306","root", "kinoycv123", "arkatama_store");

// if($conn == true){
//     echo "tersambung";
// }else{
//     echo "tidak tersambung";
// }






?>