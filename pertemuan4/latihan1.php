<?php

// Array
	
	// Array adalah sebuah variable yang dapat menampung banyak nilai
	// Pasangan antara key dan value 
	// key nya adalah index, yang dimulai dari 0

// Ada 2 cara membuat Array
	
	// Cara lama
		
		// Nilai yang ada didalam Array disebut element
		// Element pada Array boleh memiliki type data yang berbeda
		// Gunakan "" ketika element nya ber type string
		// Kalau element nya ber type integer / angka tidak usah memakai ""
		
		$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");

	// Cara Baru

		$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember"];

		$arrberbeda = ["Senpai", "Baka", 1234, 567, false];

// Menampilkan Array
	
	// var_dump() / print_r()

		// var_dump($hari);

			// array(1) {
			//   [0 /* Index element pada Array */]=>
			//   /* Type Data */ string (5 /* Jumlah Karakter */) "Senin" /* Isi Value Nya Senin*/
			// }

		// echo "<br><br>";
		// print_r($bulan);

			// Array (
			//     [0 /* Index element pada Array */] => Januari /* Isi Value Nya Januari*/
			// )

		// echo "<br><br>";

// Menampilkan 1 element pada Array

		// echo $arrberbeda[2];
		// echo "<br><br>";
		// echo $bulan[10];
		// echo "<br><br>";

// Menambahkan element baru pada Array
		
		// var_dump($hari);
		// $hari[] = "Minggu";
		// echo "<br><br>";
		// var_dump($hari);

?>