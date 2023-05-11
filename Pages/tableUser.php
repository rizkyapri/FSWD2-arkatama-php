<?php
// Koneksi ke database
require_once 'koneksi.php';
// include "koneksi.php";

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
    <style>
        img{
            width:50px;
            height:50px;
            
        }
    </style>
</head>
<body>
<div class="container">
<h2>Data pengguna</h2>
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
            <button type="button" class="btn btn-primary">Detail</button>
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