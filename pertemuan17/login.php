<?php session_start(); ?>
<?php include 'functions.php'; ?>
<?php
	// Cek cookie
	if (isset($_COOKIE["id"]) && isset($_COOKIE["key"])) {
		$ID = $_COOKIE["id"];
		$KEY = $_COOKIE["key"];

		// Ambil username berdasarkan id
		$result = mysqli_query($conn, "SELECT username FROM users WHERE 
								id = '$ID'
							");
		$row = mysqli_fetch_assoc($result);

		// Cek cookie dan username
		if ($key === hash('sha256', $row["username"])) {
			$_SESSION["login"] = true;
		}
	}

	if(isset($_SESSION["login"])){
		header("Location: index.php");
		exit;
	}

?>

<?php

	// Cek apakah tombol login sudah di tekan atau belum
	if (isset($_POST["login"])) {

		$UserName = $_POST["username"];
		$Password = $_POST["password"];

		$result = mysqli_query($conn, "SELECT * FROM users WHERE 
						username = '$UserName'
					");

		// Cek username
		if (mysqli_num_rows($result) === 1) {
			// Cek password
			$row = mysqli_fetch_assoc($result);
			if(password_verify($Password, $row["password"])) {
				// set session
				$_SESSION["login"] = true;

				// Cek remember me
				if (isset($_POST["remember"])) {
					// Buat cookie
					setcookie('id', $row["id"], time() + 60);
					setcookie('key',  hash('sha256', $row["username"]), time() + 60);
				}

				header("Location: index.php");
				exit;
			}
		}
		$error = true;
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

		html { user-select: none; }
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
							<h1>Halaman Login Admin</h1><br>

							<?php if (isset($error)) : ?>
								<div class="alert alert-danger" role="alert"> <font style="color: red; font-style: italic; font-size: 20px;">Username / Password Salah</font> </div><br>
							<?php endif; ?>
							
							<form action="" method="post">
								<label for="user" style="font-size: 24px;">Username</label><br>
								<input type="text" name="username" id="user" placeholder="Masukan Username"><br><br>
								<label for="pass" style="font-size: 24px;">Password</label><br>
								<input type="password" name="password" id="pass" placeholder="Masukan Password"><br><br>
								<input type="checkbox" name="remember" id="me" class="form-check-input"><label for="me" style="font-size: 18px; margin-left: 10px;">Remember Me</label><br><br>
								<button type="submit" name="login" class="btn btn-danger">Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</center>
</body>
</html>