<?php 

// Pengulangan

// Didalam Syntax Pengulangan ada 3 bagian yaitu :

// 1. Inisialisasi (Menentukan variable awal untuk pengulangan)
// 2. Kondisi Terminasi (Memberhentikan pengulangan)
// 3. Increment dan Decrement (Supaya Pengulangan maju atau mundur)

// For

	// for($i = 0; $i < 5; $i++){
	// 	echo "Hello World <br>";
	// }

// While
// While itu adalah cek dulu kondisinya, ketika kondisinya bernilai true, maka jalankan blocknya
// While jika kondisinya bernilai false, maka block nya tidak akan pernah dijalankan

	// $i = 0; // Inisialisasi
		// Kondisi Terminasi
		// while($i < 5){
		// 	echo "Hello World <br>";
		
		// $i++; // Increment dan Decrement
		// }

// Do,. While
// Do,. While itu adalah jalankan dulu blocknya, lalu cek kondisinya
// Do,. While jika kondisinya bernilai false, maka block nya akan dijalankan satu kali
	
	
	// $i = 0; // Inisialisasi
	// 	do {
	// 		echo "Hello World <br>";
	// 	$i++; // Increment dan Decrement
	// 	} while ($i < 5); // Kondisi Terminasi


// Forwach (Khusus Array)

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan 1</title>
	<style>
		
			.warna-baris {
				background-color: red;
			}
	</style>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		
		<!-- Penulisan V1 -->
		<?php

			for ($baris = 1; $baris <= 5; $baris++) { 
				if ($baris % 2 == 1) {
					echo "<tr class='warna-baris'>";
				} else {
					echo "<tr>";
				}
				for ($kolom = 1; $kolom <= 5; $kolom++) { 
					echo "<td>$baris.$kolom</td>";
				}
				echo "</tr>";
			}

		?>

	</table>
	<br>
	<table border="1" cellpadding="10" cellspacing="0">
		
		<!-- Penulisan V2 -->
		<?php for ($baris = 1; $baris <= 5; $baris++) : ?>
			<?php if ($baris % 2 == 0) : ?>
				<tr class="warna-baris">
				<?php else : ?>
				<tr>
			<?php endif; ?>
				<?php for ($kolom = 1; $kolom <= 5; $kolom++) : ?>
					<td><?= "$baris.$kolom" ?></td>
				<?php endfor; ?>
				</tr>
		<?php endfor; ?>

	</table>
</body>
</html>