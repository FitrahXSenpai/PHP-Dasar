<?php

	// Cek apakah tombol submit sudah di tekan atau belum
	if (isset($_POST["submit"])) {
		// Cek username & password
		if ($_POST["username"] == "admin" && $_POST["password"] == "123" ) {
			// Jika benar, redirect ke halaman admin
			header("Location: admin.php");
			exit;
		} else {
			// Jika salah, tampilkan pesan kesalahan
			$error = true;
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
	<title>Login</title>
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
							<h1>Login Admin</h1><br>

							<?php if (isset($error)) : ?>
								<div class="alert alert-danger" role="alert"> <font style="color: red; font-style: italic; font-size: 20px;">Username / Password Salah</font> </div><br>
							<?php endif; ?>
							
							<form action="" method="post">
								<label for="user" style="font-size: 24px;">Username : </label><br>
								<input type="text" name="username" id="user" placeholder="Masukan Username"><br><br>
								<label for="pass" style="font-size: 24px;">Password : </label><br>
								<input type="password" name="password" id="pass" placeholder="Masukan Password"><br><br>
								<button type="submit" name="submit" class="btn btn-danger">Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</center>
</body>
</html>