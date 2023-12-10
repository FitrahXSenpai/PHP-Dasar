<?php
	
	// Array Indexed / Numeric
		// menyimpan semua jenis element, tetapi indeks nya harus berupa angka
		// Menggunakan teknik Array ini urutan element tidak boleh salah 

	$anime1 = ["Oshi No Ko", 11, "12 April 2023", "Doga Kobo", "Drama, Supernatural"];
	$anime2 = 
			[
				["Oshi No Ko", 9.16, "12 April 2023", "Doga Kobo", "Drama, Supernatural"],
				["Kimetsu No Yaiba S3 : Katanakaji No Sato-Hen", 8.67, "10 April 2023", "ufotable", "Action, Fantasy"],
				["Dr. Stone S3 : New World", 8.37, "7 April 2023", "TMS Entertainment", "Adventure, Comedy, Sci-Fi"]
			];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Anime</title>
</head>
<body>
	<h2>Daftar Anime</h2>
	<ul>
		
		<!-- Cara 1 -->
		<?php foreach($anime1 as $anm1) : ?>
			<li><?= $anm1; ?></li>
		<?php endforeach; ?>
		
		<br><br>
		
		<!-- cara 2 -->
		
		<li><?= $anime1[0]; ?></li>
		<li><?= $anime1[1]; ?></li>
		<li><?= $anime1[2]; ?></li>
		<li><?= $anime1[3]; ?></li>
		<li><?= $anime1[4]; ?></li>
	</ul>

	<br>

	<!-- cara 3 dengan array multifungsi-->
	<?php foreach($anime2 as $anm2) : ?>
		<ul>
			<li>Judul : <?= $anm2[0]; ?></li>
			<li>Skor : <?= $anm2[1]; ?></li>
			<li>Tanggal Rilis :<?= $anm2[2]; ?></li>
			<li>Studio : <?= $anm2[3]; ?></li>
			<li>Genre : <?= $anm2[4]; ?></li>
		</ul>
	<?php endforeach; ?>

</body>
</html>