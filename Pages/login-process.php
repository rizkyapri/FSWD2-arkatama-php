<?php
if(isset($_SESSION['log'])){
    // jika log berhasil
}else{
    //jika log gagal maka akan kembali ke menu login
    header('location:login.php');
}
?>