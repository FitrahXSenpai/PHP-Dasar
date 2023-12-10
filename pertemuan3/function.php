<?php

	function salam($waktu = "Datang", $nama = "Admin" /* Parameter */ ) {
		return "Selamat $waktu, $nama"; // Mengembalikan nilai dan menampilkan ke layar
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan Function</title>
</head>
<body>
	<h2><?= salam("Malam", "Fitrah" /* Argument */ ); ?></h2>
</body>
</html>