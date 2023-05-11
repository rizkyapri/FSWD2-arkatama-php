<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA</title>
    <link rel="shortcut icon" href="assets/img/logoRA.png">
  <style>
    a {
      color: rgb(0, 0, 0);
      text-decoration: none;
    }

    ul {
      list-style-type: none;
      text-align: center;
    }

    li {
      display: inline;
      justify-content: center;
      padding: 10px;
      font-size: 18px;
    }

    .scroll2 {
      display: flex;
      justify-content: center;
      align-content: center;
    }

    .ikyy {
      width: 250px;
      outline: 8px solid #000;
      outline-offset: calc(250/-2);
      cursor: pointer;
      transition: 0.3s;
      border-radius: 50%;
    }

    .ikyy:hover {
      outline: 8px solid #000;
      outline-offset: 10px;
    }
  </style>
</head>

<body>
    <?php 
    $foto = "assets/img/iky.png";
    ?>
  <header>
    <nav>
      <h1 style="text-align: center;">Rizky Apriansyah : 4693003</h1>
      <ul>
        <hr>
        <li><a href="pages/biodata.php">Biodata</a></li>|
        <li><a href="pages/triangle.php">Triangle</a></li>|
        <li><a href="pages/function.php">Function</a></li>|
        <li><a href="pages/form.php">Form Input</a></li>|
        <li><a href="pages/join.php">Join Tabel</a></li>
        <li><a href="pages/tableUser.php">Tabel Data</a></li>
        <li><a href="pages/tambahUser.php">Tambah Data</a></li>
        <hr>
      </ul>
    </nav>
  </header>

  <main>
    <section>
      <article>
        <h2 style="text-align: center;">Web Sederhana</h2>
        <div class="scroll2">
          <img src="<?php echo $foto; ?>" alt="iky" class="ikyy">
        </div>
      </article>
    </section>
  </main>
  <br>
  <footer style="text-align: center;">
    <p>&copy; 2023 Arkatama Elemen Semantik HTML</p>
  </footer>
</body>
</html>