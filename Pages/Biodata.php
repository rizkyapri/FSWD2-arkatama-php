<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="stylesheet" href="../assets/css/biodata.css">
    <link rel="shortcut icon" href="../assets/img/logoRA.png">
</head>
<body>
<?php 
    $nama = 'Rizky Apriansyah';
    $ttl = 'Tangerang, 26-04-2002';
    $jk = 'Laki-Laki';
    $alamat = 'Balaraja, Tangerang, Banten';
    $foto = "../assets/img/iky.png";
    $riwayat_pkrjaan = ['Admin Peduli Lindungi', 'Tour Bromo – Jogja Divisi Keamanan'];
    $pendidikan = ['SDN BALARAJA III', 'SMPN 2 BALARAJA', 'SMAN 19 KAB.TANGERANG', 'UNIVERSITAS GUNADARMA'];
    $hobby = ['Bermain Game Online', 'Berenang', 'Ngoding'];
?>




<div class="container">
		<h1>Biodata</h1>
		<img src="<?php echo $foto; ?>" alt="Foto Profil" class="profile-pic">
		<div class="info">
			<h3>Nama</h3>
			<p><?php echo $nama; ?></p>

			<h3>Tempat Tanggal Lahir</h3>
			<p><?php echo $ttl; ?></p>

			<h3>Jenis Kelamin</h3>
			<p><?php echo $jk; ?></p>

			<h3>Alamat</h3>
			<p><?php echo $alamat; ?></p>
		</div>

		<div class="section-title">Riwayat Pekerjaan</div>
		<ul>
			<li><?php echo $riwayat_pkrjaan[0]; ?></li>
			<li><?php echo $riwayat_pkrjaan[1]; ?></li>
		</ul>

		<div class="section-title">Pendidikan</div>
		<ul>
			<li><?php echo $pendidikan[0]; ?></li>
			<li><?php echo $pendidikan[1]; ?></li>
			<li><?php echo $pendidikan[2]; ?></li>
			<li><?php echo $pendidikan[3]; ?></li>
		</ul>

		<div class="section-title">Hobi</div>
		<ul>
			<li><?php echo $hobby[0]; ?></li>
			<li><?php echo $hobby[1]; ?></li>
			<li><?php echo $hobby[2]; ?></li>
		</ul>
	</div>

    
</body>
</html>