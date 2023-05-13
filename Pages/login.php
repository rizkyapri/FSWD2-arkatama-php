<?php

include 'koneksi.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    // ambil data pada database dimana username, password sesuai dengan inputan user
    $ambildata = mysqli_query($conn, "SELECT * FROM users where name = '$username' and password = '$password'");
    // cek data dengan menghitung jumlah untuk mengetahui jumlah baris data yang ditemukan dari hasil query.
    if(mysqli_num_rows($ambildata) > 0) {
        // login berhasil, data ditemukan
        $_SESSION['log'] = 'True';
        header('location:tableUser.php');
    } else {
        // login gagal, data tidak ditemukan
        header('location:login.php');
    }

    
}
// jika sesi user ditemukan datanya masuk ke dalam index
if(!isset($_SESSION['log'])){

}else{
    //jika login berhasil maka akan masuk ke index
    header('location:tableUser.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        .btn-color{
            background-color: #0e1c36;
            color: #fff;
        }

        .profile-image-pic{
            height: 200px;
            width: 200px;
            object-fit: cover;
        }

        .cardbody-color{
            background-color: #8294C4;
        }

        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<a href="../index.php" class="btn btn-primary">Kembali</a>
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark">Login Form</h2>
        <div class="card my-5">

          <form method="post" class="card-body cardbody-color p-lg-5">

            <div class="text-center">
              <img src="../assets/img/logoRA.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" name="username" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="Username">
            </div>
            <div class="mb-3">
              <input type="password" name="password" class="form-control" id="password" placeholder="password">
            </div>
            <div class="text-center">
                <button type="submit" name="login" class="btn btn-color px-5 mb-5 w-100">Login</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</body>
</html>