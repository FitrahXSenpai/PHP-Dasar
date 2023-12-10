<?php

	// $anime = 
	// 		[
	// 			["Oshi No Ko", 9.16, "12 April 2023", "Doga Kobo", "Drama, Supernatural"],
	// 			["Kimetsu No Yaiba S3 : Katanakaji No Sato-Hen", 8.67, "10 April 2023", "ufotable", "Action, Fantasy"],
	// 			["Dr. Stone S3 : New World", 8.37, "7 April 2023", "TMS Entertainment", "Adventure, Comedy, Sci-Fi"]
	// 		];

	// Array Associative
		// menyimpan semua jenis element, key-nya adalah string yang kita buat sendiri
	
	$anime = 
			[
				[
					"judul" => "Oshi No Ko", 
					"skor" => "9.16", 
					"rilis" => "Apr 12, 2023", 
					"studio" => "Doga Kobo", 
					"genre" => "Drama, Supernatural, Reincarnation, Showbiz, Seinen",
					"gambar" => "1.jpg"
				],
				[
					"judul" => "One Piece", 
					"skor" => "8.69", 
					"rilis" => "Oct 20, 1999", 
					"studio" => "Toei Animation", 
					"genre" => "Action, Adventure, Fantasy, Shounen",
					"gambar" => "2.jpg"
				],
				[
					"judul" => "Vinland Saga S2", 
					"skor" => "8.68", 
					"rilis" => "Jan 10, 2023", 
					"studio" => "MAPPA", 
					"genre" => "Action, Adventure, Drama, Gore, Historical, Seinen",
					"gambar" => "3.jpg"
				],
				[
					"judul" => "Kimetsu No Yaiba S3 : Katanakaji No Sato-Hen", 
					"skor" => "8.67", 
					"rilis" => "Apr 9, 2023", 
					"studio" => "ufotable", 
					"genre" => "Action, Fantasy, Historical, Shounen",
					"gambar" => "4.jpg"
				],
				[
					"judul" => "Jigokuraku", 
					"skor" => "8.43", 
					"rilis" => "Apr 1, 2023", 
					"studio" => "MAPPA", 
					"genre" => "Action, Adventure, Fantasy, Gore, Historical, Shounen",
					"gambar" => "5.jpg"
				],
				[
					"judul" => "Dr. Stone S3 : New World", 
					"skor" => "8.37", 
					"rilis" => "7 April 2023", 
					"studio" => "TMS Entertainment", 
					"genre" => "Adventure, Comedy, Sci-Fi, Time Travel, Shounen",
					"gambar" => "6.jpg"
				],
				[
					"judul" => "Mahoutsukai no Yome S2", 
					"skor" => "8.13", 
					"rilis" => "Apr 6, 2023", 
					"studio" => "Studio Kafka", 
					"genre" => "Drama, Fantasy, Romance, Mythology, Shounen",
					"gambar" => "7.jpg"
				],
				[
					"judul" => "Kono Subarashii Sekai ni Bakuen wo!", 
					"skor" => "7.86", 
					"rilis" => "Apr 6, 2023", 
					"studio" => "Drive", 
					"genre" => "Comedy, Fantasy",
					"gambar" => "8.jpg"
				],
				[
					"judul" => "Dead Mount Death Play", 
					"skor" => "7.51", 
					"rilis" => "Apr 11, 2023", 
					"studio" => "Geek Toys", 
					"genre" => "Action, Fantasy, Supernatural, Reincarnation, Seinen",
					"gambar" => "9.jpg"
				],
				[
					"judul" => "Edens Zero S2", 
					"skor" => "7.45", 
					"rilis" => "Apr 2, 2023", 
					"studio" => "J.C.Staff", 
					"genre" => "Action, Adventure, Fantasy, Sci-Fi, Space, Shounen",
					"gambar" => "10.jpg"
				],
				[
					"judul" => "Isekai de Cheat Skill wo Te ni Shita Ore wa, Genjitsu Sekai wo mo Musou Suru: Level Up wa Jinsei wo Kaeta", 
					"skor" => "7.30", 
					"rilis" => "Apr 7, 2023", 
					"studio" => "Millepensee", 
					"genre" => "Action, Adventure, Fantasy, Isekai, School",
					"gambar" => "11.jpg"
				],
				[
					"judul" => "My Home Hero", 
					"skor" => "7.03", 
					"rilis" => "Apr 2, 2023", 
					"studio" => "Tezuka Productions", 
					"genre" => "Drama, Suspense, Adult Cast, Organized Crime, Seinen",
					"gambar" => "12.jpg"
				]
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

	<?php foreach($anime as $anm) : ?>
		<ul>
			<li>
				<img src="img/<?= $anm["gambar"]; ?>">
			</li>
			<li>Judul : <?= $anm["judul"]; ?></li>
			<li>Skor : <?= $anm["skor"]; ?></li>
			<li>Tanggal Rilis :<?= $anm["rilis"]; ?></li>
			<li>Studio : <?= $anm["studio"]; ?></li>
			<li>Genre : <?= $anm["genre"]; ?></li>
		</ul>
	<?php endforeach; ?>

</body>
</html>