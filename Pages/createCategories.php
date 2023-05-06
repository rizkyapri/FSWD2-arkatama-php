<?php
include 'koneksi.php';

// Ambil data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];

// Function query insert ke table categories
// Query untuk menambah data
function insertCategories($id,$nama){
    global $conn; // tambahkan global untuk memanggil variabel $conn
    $query = "INSERT INTO categories (id, name, created_at, updated_at) values ('$id','$nama', now(), now())"; // tambahkan kurung tutup pada values dan spasi sebelum kurung tutup
    return $query;
}

// Eksekusi query imsert categories
if (mysqli_query($conn, insertCategories($id,$nama))) {
    echo 'Data berhasil ditambahkan';
} else {
    echo 'Error: ' . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn); // tambahkan mysqli_close untuk menutup koneksi
?>

<button><a href="form.php">kembali</a></button>
