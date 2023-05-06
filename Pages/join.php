<html>
    <head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  
  
    </head>
    <body>


<?php
// Koneksi ke database
require_once 'koneksi.php';
// include "koneksi.php";

// Query untuk menampilkan data
$query = "SELECT p.id AS product_id, p.name AS product_name, c.id AS category_id, c.name AS category_name
FROM products p
JOIN categories c ON p.category_id = c.id
";

// Eksekusi query
$result = mysqli_query($conn, $query);
?>
 <!-- Tampilkan data -->


<table id="myTable">
<thead>
    <th>product_id</th>
    <th>product_name</th>
    <th>category_id</th>
    <th>category_name</th>
</thead>
<tbody>
    <?php  
while ($row = mysqli_fetch_assoc($result)) : //mysqli_fetch_assoc
    ?>
    <tr>
        <td><?= $row['product_id'] ?></td>
        <td><?= $row['product_name'] ?></td>
        <td><?= $row['category_id'] ?></td>
        <td><?= $row['category_name'] ?></td>
    </tr>
    
<?php endwhile; ?>

</tbody>

</table>




 <!-- Tutup koneksi -->
 <?php
mysqli_close($conn);
?>


</body>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</html>


