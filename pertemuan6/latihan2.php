<?php

	// cek apakah tidak ada data di $_GET
	if(!isset($_GET["judul"]) || !isset($_GET["skor"]) || !isset($_GET["rilis"]) || 
		!isset($_GET["studio"]) || !isset($_GET["genre"]) || !isset($_GET["gambar"]) ) {
			// redirect
			header("Location: latihan1.php");
		exit;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Anime</title>
	<style>

		a { text-decoration: none; }

	</style>
</head>
<body>

	<ul>
		<li><img src="img/<?= $_GET["gambar"]; ?>"></li>
		<li><?= $_GET["judul"]; ?></li>
		<li><?= $_GET["skor"]; ?></li>
		<li><?= $_GET["rilis"]; ?></li>
		<li><?= $_GET["studio"]; ?></li>
		<li><?= $_GET["genre"]; ?></li>
	</ul>

	<a href="latihan1.php">Kembali Ke Daftar Anime</a>
	
</body>
</html>