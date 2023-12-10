<?php 

// Komentar
// Komentar adalah syntax pemograman yang tidak akan dieksekusi oleh compiler maupun interpreter
// Komentar pada PHP itu ada 2 yaitu

// Komentar (ctrl + /) ke 1

/*

Komentar ke 2

*/

// Syntax PHP

// Standar Output

// echo, print digunakan untuk mencetak tulisan, isi variable dsb
// print_r  digunakan untuk mencetak array biasanya digunakan untuk debugging
// var_dumb digunakan untuk melihat isi dari variable biasanya digunakan untuk debugging

// Penulisan Syntax PHP

?>
<!DOCTYPE html>
<html>
<body>

	<?php // 1. PHP di dalam HTML ?>
		<!-- <h2>Halo, Selamat Datang <?php // echo "Fitrah Ramdhani"; ?></h2> -->
		<!-- <p><?php // echo "Ini Adalah Palagraf"; ?></p> -->

	<?php // 2. HTML di dalam PHP ?>
		<?php // echo "<h2>Halo, Selamat Datang Fitrah</h2>"; ?>

</body>
</html>
<?php 

// Variable dan Type Data

// Variable
// Aturan Variable tidak boleh diawali dengan angka, tapi boleh mengandung angka

	// $nama = "Fitrah Ramdhani";
	
	// Interpolasi
	// Interpolasi adalah untuk mengecek apakah di dalam string ada Variable maka yang akan ditampilkan adalah isi Variable nya

	// Contoh Interpolasi

		// kalau pake " interpolasi akan berjalan
		// echo "Halo, Nama Saya $nama"; 
		// kalau pake ' interpolasi tidak berjalan
		// echo 'Halo, Nama Saya $nama'; 

// Operator

// Aritmatika + - * / %

	// echo 2 + 2;
	// echo 2 - 2;
	// echo 2 * 2;
	// echo 2 / 2;
	// echo 2 % 2;
	
	// $x = 2;
	// $y = 2;
	// 	echo $x + $y;
	// 	echo $x - $y;
	// 	echo $x * $y;
	// 	echo $x / $y;
	// 	echo $x % $y;

// Concatenation / concat (Penggabung String) . (titik)

	// $nama_depan = "Fitrah";
	// $nama_belakang = "Ramdhani";
	// 	echo $nama_depan . " " . $nama_belakang;

// Assignment (penugasan) =, +=, -=, *= , /=, %=, .=

	// $x = 4;
	// // $x += 2;
	// // $x -= 2;
	// // $x *= 2;
	// // $x /= 2;
	// // $x %= 2;
	// 	echo $x;

	// $nama = "Fitrah";
	// $nama .= " ";
	// $nama .= "Ramdhani";
	// 	echo $nama;

// Perbandingan <, >, <=, >=, ==, !=
// Operator Perbandingan ini tidak mengecek type datanya hanya mengecek nilai nya sama atau tidak

	// var_dump(1 < 5);
	// var_dump(1 > 5);
	// var_dump(1 == "1");

// Identitas ===, !==
// Operator Identitas ini bukan hanya mengecek nilainya saja tetapi dia juga mengecek type data nya sama atau tidak

	// var_dump(1 === "1");

// Logika &&, ||, !
	
	// $x = 10;

		// && Jika ada 2 Kondisi, hanya 1 kondisi yang Benar maka hasil yang akan keluar adalah false
		// var_dump($x < 20 && $x % 2 == 0);
		// var_dump($x < 4 && $x % 2 == 0);

		// || Jika ada 2 Kondisi, hanya 1 kondisi yang Benar maka hasil yang akan keluar adalah true
		// var_dump($x < 20 || $x % 2 == 0);

?>