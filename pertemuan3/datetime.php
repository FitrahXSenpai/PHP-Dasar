<?php

// Function Date / Time

// date()

	// parameter adalah nilai yang dimasukan kedalam () didalam kasus date(); minimal butuh 1 parameter
		// date();

	// Function date
		// https://www.php.net/manual/en/function.date

	// Untuk menampilkan tanggal dengan format tertentu
		// echo date("l, d-M-Y");
	

// time()

	// UNIX Timestamp / EPOCH time
		// echo time() // detik yang sudah berlalu sejak 1 Januari 1970
	
	// menggabungkan date() time() 

		// Menghitung Manual
			// echo date("d M Y", time()+172800); // menampilkan 2 hari yang akan datang rumus 60(detik)*60(menit)*24(hari)*2

		// Menghitung Otomatis
			// echo date("d M Y", time()+60*60*24*100); // menampilkan 100 hari yang akan datang

			// echo date("d M Y", time()-60*60*24*100); // menampilkan 100 hari yang berlalu


// mktime()
// memasukan angka nanti keluarnya detik
// membuat sendiri detik yang sudah berlalu, dari 1 Januari 1970 sampai detik yang kita inginkan
// mktime(0,0,0,0,0,0) parameter nya ada 6 yaitu : jam, menit, detik, bulan, tanggal, tahun

	// echo date("l", mktime(0,0,0,11,27,2002)); // menampilkan hari pada saat saya lahir

// strtotime()
// memasukan format tanggal (string) nanti keluarnya detik

	// echo strtotime("27 november 2002");

	// menggabungkan date() strtotime() 
		// echo date("l", strtotime("27 november 2002"));


?>