<?php 

	session_start(); 
	
	if(!isset($_SESSION["login"])){
		header("Location: login.php");
		exit;
	}

?>
<?php include 'functions.php'; ?>
<?php 

	// Pagination
	// Konfigurasi
	$JumlahDataPerhalaman = 5;
	$JumlahData = count(query("SELECT * FROM anime"));
	// Rumus Mengetahui Jumlah Halaman = total data / data per halaman
	$JumlahHalaman = ceil($JumlahData / $JumlahDataPerhalaman);
	$HalamanAktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
	$AwalData = ($JumlahDataPerhalaman * $HalamanAktif) - $JumlahDataPerhalaman;

	$anime = query("SELECT * FROM anime LIMIT $AwalData, $JumlahDataPerhalaman");

	// Tombol cari ketika ditekan
	if (isset($_POST["cari"])) {
		$anime = cari($_POST["keyword"]);
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
	<title>Halaman Admin</title>
	<style>

		html { user-select: none; }
		h1  { font-family: "Lucida Console", Monaco, monospace; margin-top: 20px; }
		.inputz { width: 76%; padding: 10px; border: 1px solid black; color: black; font-size: 14px; text-align: center; resize: none; outline: none; } 
		img { border: 1px solid black; width: 80px; resize: none; }
		.btn { width: 45%; font-size: 20px; padding: 10px 10px; margin-left: 2px; position: relative; cursor: pointer; outline: none; } 
		.btn-primary { width: 14%; padding: 7px 10px; margin-left: 8px; position: relative; cursor: pointer; outline: none;} 
		#toTopBtn { position: fixed; bottom: 40px; right: 40px; width: 50px; height: 50px; background: #fff url(img/up.png); border-radius: 50%; background-size: 30px; background-position: center; background-repeat: no-repeat; cursor: pointer; z-index: 100000; visibility: hidden; opacity: 0; transition: 0.5s; }
  		#toTopBtn.active { visibility: visible; opacity: 1; }
		.inputz:focus { border-color: #34C5A1; -webkit-box-shadow: 0 0 6px #78DCC3; -moz-box-shadow: 0 0 6px #78DCC3; box-shadow: 0 0 6px #78DCC3; }

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

							<a href="tambah.php"><button type="button" class="btn btn-danger">Tambah Data</button></a>
							<a href="logout.php"><button type="button" class="btn btn-warning">Log Out</button></a><br><br>

							<form action="" method="post">
								<td><input type="text" name="keyword" class="inputz" placeholder="Masukkan Keyword Pencarian" autocomplete="off" autofocus><button type="submit" name="cari" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button></td>
							</form><br>

							<!-- Navigasi -->
							<ul class="pagination justify-content-center">
								<?php if($HalamanAktif > 1) : ?>
									<li class="page-item"><a class="page-link" href="?page=<?= $HalamanAktif - 1; ?>">&laquo;</a></li>
								<?php endif; ?>
								<?php for ($i = 1; $i <= $JumlahHalaman; $i++) : ?>
									<?php if ($i == $HalamanAktif) : ?>
										<li class="page-item"><a class="page-link" href="?page=<?= $i; ?>" style="font-weight: bold; color: black;"><?= $i; ?></a></li>
									<?php else : ?>
										<li class="page-item"><a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a></li>
									<?php endif; ?>
								<?php endfor;?>
							   	<?php if($HalamanAktif < $JumlahHalaman) : ?>
							   		<li class="page-item"><a class="page-link" href="?page=<?= $HalamanAktif + 1; ?>">&raquo;</a></li>
								<?php endif; ?>
							</ul><br>

							<div class="table-responsive">
								<table border="1" cellpadding="10" cellspacing="0" class="table table-bordered table-hover">
									<thead>
									    <tr>
									    	<th scope="col" style="text-align: center;">No</th>
									    	<th scope="col" style="text-align: center;">Gambar</th>
									    	<th scope="col" style="text-align: center;">Judul</th>
									    	<th scope="col" style="text-align: center;">Genre</th>
									    	<th scope="col" style="text-align: center;">Studio</th>
									    	<th scope="col" style="text-align: center;">Rilis</th>
									    	<th scope="col" style="text-align: center;">Skor</th>
									    	<th scope="col" style="text-align: center;">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; ?>
										<?php foreach($anime as $anm) : ?>
										<tr>
											<td scope="row" style="text-align: center;"><?= $i ?></td>
											<td style="text-align: center;"><img src="img/<?= $anm["gambar"]; ?>" width="60"></td>
											<td style="text-align: center;"><?= $anm["judul"]; ?></td>
											<td style="text-align: center;"><?= $anm["genre"]; ?></td>
											<td style="text-align: center;"><?= $anm["studio"]; ?></td>
											<td style="text-align: center;"><?= $anm["rilis"]; ?></td>
											<td style="text-align: center;"><?= $anm["skor"]; ?></td>
											<td style="text-align: center;">
												<a href="edit.php?id=<?= $anm["id"]; ?>"><i class="fa-regular fa-pen-to-square fa-lg"></i></a>
												<a href="hapus.php?id=<?= $anm["id"]; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');"><i class="fa-solid fa-trash fa-lg"></i></a>
											</td>
										</tr>
										<?php $i++ ?>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</center>
	<div id="toTopBtn" onclick="scrolltoTop();"></div>
</body>
<script>

    window.addEventListener('scroll', function(){
        var scroll = document.querySelector('#toTopBtn');
        scroll.classList.toggle("active" , window.scrollY > 350)
    })

    function scrolltoTop(){
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        })
    }

</script>
</html>