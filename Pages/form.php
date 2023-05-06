<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data Tabel Categories</h2>
    <form method="post" action="createCategories.php">
    <table>
    <tr>
        <td><label for="id">ID</label></td>
        <td>:</td>
        <td><input type="text" id="id" name="id" required></td>
    </tr>
    <tr>
        <td><label for="nama">Nama</label></td>
        <td>:</td>
        <td><input type="text" id="nama" name="nama" required></td>
    </tr>
    <tr>
    <td><input type="submit" value="Simpan"></td>
    </tr>
    </table>
    </form>
    <br><hr>

    <h2>Tambah Data Tabel Products</h2>
    <form method="post" action="createProducts.php">
    <table>
    <tr>
        <td><label for="id">ID</label></td>
        <td>:</td>
        <td><input type="text" id="id" name="idP" required></td>
    </tr>
    <tr>
        <td><label for="kategori">kategori ID</label></td>
        <td>:</td>
        <td><input type="text" id="kategori" name="kategori" required></td>
    </tr>
    <tr>
        <td><label for="nama">Nama</label></td>
        <td>:</td>
        <td><input type="text" id="nama" name="namaP" required></td>
    </tr>
    <tr>
        <td><label for="description">description</label></td>
        <td>:</td>
        <td><input type="text" id="description" name="description" required></td>
    </tr>
    <tr>
        <td><label for="price">price</label></td>
        <td>:</td>
        <td><input type="text" id="price" name="price" required></td>
    </tr>
    <tr>
        <td><label for="status">status</label></td>
        <td>:</td>
        <td>
        <select name="status" id="status">
        <option value="accepted">accepted</option>
        <option value="rejected">rejected</option>
        <option value="waiting">waiting</option>
        </select>
      <td>
    </tr>
    <tr>
        <td><label for="created">created</label></td>
        <td>:</td>
        <td><input type="text" id="created" name="created" required></td>
    </tr>
    <tr>
        <td><label for="verified">verified</label></td>
        <td>:</td>
        <td><input type="text" id="verified" name="verified" required></td>
    </tr>
    <tr>
    <td><input type="submit" value="Simpan"></td>
    </tr>
    </table>
    </form>

</body>
</html>