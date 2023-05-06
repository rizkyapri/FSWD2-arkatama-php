<?php
include 'koneksi.php';

// Ambil data dari form
$id = $_POST['idP'];
$nama = $_POST['namaP'];
$kategori_id = $_POST['kategori'];
$desc = $_POST['description'];
$price = $_POST['price'];
$status = $_POST['status'];
$created = $_POST['created'];
$verified = $_POST['verified'];

// Function query insert ke table products
// Query untuk menambah data
function insertproducts($id,$kategori_id,$nama,$desc,$price,$status,$created,$verified){
    global $conn; // tambahkan global untuk memanggil variabel $conn
    $query = "INSERT INTO products (id, category_id, name, description, price, status, created_at, updated_at, created_by, verified_at, verified_by ) 
    values ('$id', '$kategori_id','$nama', '$desc', '$price', '$status', now(), now(), '$created', now(), '$verified')"; // tambahkan kurung tutup pada values dan spasi sebelum kurung tutup
    return $query;
}

// Eksekusi query insert products
if (mysqli_query($conn, insertproducts($id,$kategori_id,$nama,$desc,$price,$status,$created,$verified))) {
    echo 'Data berhasil ditambahkan';
} else {
    echo 'Error: ' . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn); // tambahkan mysqli_close untuk menutup koneksi
?>

<button><a href="form.php">kembali</a></button>
