<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>POST</title>
</head>
<body>

	<!-- <form action="latihan4.php" method="post">
		Masukan Nama : 
		<input type="text" name="nama"><br><br>
		<button type="submit" name="submit">Kirim</button>
	</form> -->

	<?php if (isset($_POST["submit"])) : ?>
		<h2>Halo, Selamat Datang <?= $_POST["nama"]; ?></h2>
	<?php endif; ?>

	<form action="" method="post">
		Masukan Nama : 
		<input type="text" name="nama"><br><br>
		<button type="submit" name="submit">Kirim</button>
	</form>

</body>
</html>