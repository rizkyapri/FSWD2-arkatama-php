<?php
// Koneksi ke database
require_once 'koneksi.php';
// memanggil login-process
include "login-process.php";

// Query untuk menampilkan data
$query = "SELECT * FROM users";

// Eksekusi query
$result = mysqli_query($conn, $query);

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  // Buat query hapus data
  if(mysqli_query($conn, "DELETE FROM users where id ='$id'")) {
      echo "Data berhasil dihapus";
      header("location:tableUser.php");
  } else {
      echo "Error deleting record: " . mysqli_error($conn);
  }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table User</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        img{
            width:50px;
            height:50px;
            
        }
    </style>
</head>
<body>
<div class="container">
<div class="row pt-4">
  <div class="col-5"><h2>Data pengguna</h2></div>
  <div class="col-5">
    <a class="btn btn-primary" href="tambahUser.php">
      <i class="fas fa-plus fa-sm fa-fw mr-2 text-gray-400"></i>
      Tambah User
    </a>
  </div>
  <div class="col-2">
    <a class="btn btn-primary" href="logout.php">
      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
      Logout
    </a>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Aksi</th>
      <th scope="col">Avatar</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
  <?php  
    while ($row = mysqli_fetch_assoc($result)) : //mysqli_fetch_assoc
    ?>
    <tr>
      <th scope="row"><?= $row['id'] ?></th>
      <td>
          <div class="btn-group">
            <a href="detail.php?id=<?= $row['id'] ?>" class="btn btn-primary">Detail</a>
            <a href="editUser.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
            <a href='tableUser.php?id=<?= $row['id'] ?>'  class="btn btn-danger">Hapus</a>
          </div>
      </td>
      <td>
        <img src="../assets/img/logoRA.png" class="rounded-circle">
      </td>
      <td><?= $row['name'] ?></td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['phone'] ?></td>
      <td><?= $row['role'] ?></td>
    </tr>
  <?php endwhile; ?>
  </tbody>
</table>
</div>

 <!-- Tutup koneksi -->
 <?php
mysqli_close($conn);
?>





<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>