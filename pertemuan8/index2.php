<?php

	// Koneksi ke database
		$conn = mysqli_connect("localhost", "root", "", "phpdasar");

	// Ambil data dari tabel anime / query data anime
		$result = mysqli_query($conn, "SELECT * FROM anime");
			// if (!$result) {
			// 	echo mysqli_error($conn);
			// }
	// Ambil data (fetch) anime dari object result
		// mysqli_fetch_row()
			// Mengembalikan array Numerik

			// $anm = mysqli_fetch_row($result);
			// 	var_dump($anm["5"]);

		// mysqli_fetch_assoc()
			// Mengembalikan array Associative

			// $anm = mysqli_fetch_assoc($result);
			// 	var_dump($anm["judul"]);

			// while($anm = mysqli_fetch_assoc($result)){
			// 	var_dump($anm);
			// }

		// mysqli_fetch_array()
			// Mengembalikan array Numerik & Associative
			// Kekurangannya data yang ditampilkan double

			// $anm = mysqli_fetch_array($result);
			// 	var_dump($anm);

		// mysqli_fetch_object()
			// Mengembalikan Object
			// $anm = mysqli_fetch_object($result);
			// 	var_dump($anm->judul);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<title>Halaman Admin</title>
	<style>

		h1  { font-family: "Lucida Console", Monaco, monospace; margin-top: 20px; }

	</style>
</head>
<body>
	<center>
		<div class="row">
        	<div class="col-xl-12 col-lg-12 col-12">
            	<div class="card">
                	<div class="card-content">
                    	<div class="px-3 py-3">
							<h1>Daftar Anime</h1><br>
							<table border="1" cellpadding="10" cellspacing="0" class="table table-bordered table-hover">
								<thead>
								     <tr>
								    	<th scope="col" style="text-align: center;">No</th>
								    	<th scope="col" style="text-align: center;">Aksi</th>
								    	<th scope="col" style="text-align: center;">Gambar</th>
								    	<th scope="col" style="text-align: center;">Judul</th>
								    	<th scope="col" style="text-align: center;">Genre</th>
								    	<th scope="col" style="text-align: center;">Studio</th>
								    	<th scope="col" style="text-align: center;">Rilis</th>
								    	<th scope="col" style="text-align: center;">Skor</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1; ?>
									<?php while($row = mysqli_fetch_assoc($result)) : ?>
									<tr>
										<td scope="row" style="text-align: center;"><?= $i ?></td>
										<td style="text-align: center;">
											<a href="">E</a>
											<a href="">D</a>
										</td>
										<td style="text-align: center;"><img src="img/<?= $row["gambar"]; ?>" width="60"></td>
										<td style="text-align: center;"><?= $row["judul"]; ?></td>
										<td style="text-align: center;"><?= $row["genre"]; ?></td>
										<td style="text-align: center;"><?= $row["studio"]; ?></td>
										<td style="text-align: center;"><?= $row["rilis"]; ?></td>
										<td style="text-align: center;"><?= $row["skor"]; ?></td>
									</tr>
									<?php $i++ ?>
									<?php endwhile; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</center>
</body>
</html>