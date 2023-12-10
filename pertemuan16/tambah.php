<?php 

	session_start(); 
	
	if(!isset($_SESSION["login"])){
		header("Location: login.php");
		exit;
	}

?>
<?php include 'functions.php'; ?>
<?php

	// Cek apakah tombol submit sudah ditekan atau belum
	if (isset($_POST["submit"])) {
		// Cek apakah data berhasil di tambahkan atau tidak
		if (tambah($_POST) > 0) {
			echo "
					<script>
						alert('Data Berhasil Ditambahkan');
						document.location.href = 'index.php';
					</script>
				";
		} else {
			echo "
					<script>
						alert('Data Gagal Ditambahkan');
						document.location.href = 'index.php';
					</script>
				";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/6e139221d0.js" crossorigin="anonymous"></script>
	<title>Tambah Data Anime Favorite</title>
	<style> 

		h1  { font-family: "Lucida Console", Monaco, monospace; margin-top: 20px; }
		input { width: 100%; padding: 10px; border: 1px solid black; color: black; font-size: 14px; text-align: center; resize: none; outline: none; } 
		.btn { width: 100%; font-size: 20px; padding: 10px 10px; position: relative; cursor: pointer; outline: none; } 
		input:focus { border-color: #34C5A1; -webkit-box-shadow: 0 0 6px #78DCC3; -moz-box-shadow: 0 0 6px #78DCC3; box-shadow: 0 0 6px #78DCC3; } 

	</style>
</head>
<body>
	<center>
		<div class="row">
        	<div class="col-xl-12 col-lg-12 col-12">
            	<div class="card">
                	<div class="card-content">
                    	<div class="px-3 py-3">
							<h1>Tambah Data Anime Favorite</h1><hr>
							<form action="" method="post" enctype="multipart/form-data">
								<div class="table-responsive">
									<table class="table" cellpadding="10" cellspacing="0">
										<thead>
											<tr>
												<th style="text-align: center;"><label for="judul" style="font-size: 20px;">Judul Anime</label></th>
												<th style="text-align: center;"><label for="skor" style="font-size: 20px;">Jumlah Skor Anime</label></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align: center;"><input type="text" name="judul" id="judul" placeholder="Masukan Judul" required></td>
												<td style="text-align: center;"><input type="text" name="skor" id="skor" placeholder="Masukan Skor" required></td>
											</tr>
										</tbody>
										<thead>
										    <tr>
										    	<th style="text-align: center;"><label for="rilis" style="font-size: 20px;">Tanggal Rilis Anime</label></th>
										    	<th style="text-align: center;"><label for="studio" style="font-size: 20px;">Studio Anime</label></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align: center;"><input type="text" name="rilis" id="rilis" placeholder="Masukan Tanggal Rilis" required></td>
												<td style="text-align: center;"><input type="text" name="studio" id="studio" placeholder="Masukan Studio" required></td>
											</tr>
										</tbody>
										<thead>
										    <tr>
										    	<th style="text-align: center;"><label for="genre" style="font-size: 20px;">Genre Anime</label></th>
										    	<th style="text-align: center;"><label for="gambar" style="font-size: 20px;">Gambar Anime</label></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align: center;"><input type="text" name="genre" id="genre" placeholder="Masukan Genre" required></td>
												<td style="text-align: center;"><input type="file" name="gambar" id="gambar" placeholder="Masukan Gambar"></td>
											</tr>
										</tbody>
									</table>
								</div>
								<button type="submit" name="submit" class="btn btn-danger">Create Data</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</center>
</body>
</html>