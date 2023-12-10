<?php

// Koneksi ke DB
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data)
{

	global $conn;

	$Judul = htmlspecialchars($data["judul"]);
	$Skor = htmlspecialchars($data["skor"]);
	$Rilis = htmlspecialchars($data["rilis"]);
	$Studio = htmlspecialchars($data["studio"]);
	$Genre = htmlspecialchars($data["genre"]);

	// Upload gambar
	$Gambar = upload();
	if (!$Gambar) {
		return false;
	}

	// Query insert data
	$query = "INSERT INTO anime
						VALUES
				('', '$Judul', '$Skor', '$Rilis', '$Studio', '$Genre', '$Gambar')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload()
{
	$nameFile = $_FILES['gambar']['name'];
	$sizeFile = $_FILES['gambar']['size'];
	$tmpName = $_FILES['gambar']['tmp_name'];
	$error = $_FILES['gambar']['error'];

	// Cek apakah tidak ada gambar yang di upload
	if ($error === 4) {
		echo "
						<script>
							alert('Pilih Gambar Terlebih Dahulu');
						</script>
					";
		return false;
	}

	// Cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $nameFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "
						<script>
							alert('Yang Anda Upload Bukan Gambar');
						</script>
					";
	}

	// Cek jika ukurannya terlalu besar
	if ($sizeFile > 1000000) {
		echo "
						<script>
							alert('Ukuran Gambar Telalu Besar');
						</script>
					";
	}

	// Jika lolos pengecekan, gambar siap diupload
	// Generate nama gambar baru
	$nameFileBaru = uniqid();
	$nameFileBaru .= '.';
	$nameFileBaru .= $ekstensiGambar;
	move_uploaded_file($tmpName, 'img/' . $nameFileBaru);
	return $nameFileBaru;
}

function hapus($id)
{

	global $conn;

	mysqli_query($conn, "DELETE FROM anime WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function edit($data)
{

	global $conn;

	$id = $data["id"];
	$Judul = htmlspecialchars($data["judul"]);
	$Skor = htmlspecialchars($data["skor"]);
	$Rilis = htmlspecialchars($data["rilis"]);
	$Studio = htmlspecialchars($data["studio"]);
	$Genre = htmlspecialchars($data["genre"]);
	$GambarLama = htmlspecialchars($data["gambarlama"]);

	// Cek apakah user pilih gambar baru atau tidak
	if ($_FILES['gambar']['error'] === 4) {
		$Gambar = $GambarLama;
	} else {
		$Gambar = upload();
	}

	// Query Update data
	$query = "UPDATE anime SET
				judul = '$Judul',
				skor = '$Skor',
				rilis = '$Rilis',
				studio = '$Studio',
				genre = '$Genre',
				gambar = '$Gambar'
			WHERE id = $id
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function cari($keyword)
{

	// Query Cari data
	$query = "SELECT * FROM anime 
						WHERE
					judul LIKE '%$keyword%' OR
					skor LIKE '%$keyword%' OR
					rilis LIKE '%$keyword%' OR
					studio LIKE '%$keyword%' OR
					genre LIKE '%$keyword%'
			";
	return query($query);
}

function registrasi($data)
{

	global $conn;

	$UserName = strtolower(stripslashes($data["username"]));
	$Password = mysqli_real_escape_string($conn, $data["password"]);
	$PasswordConfirm = mysqli_real_escape_string($conn, $data["passwordconfirm"]);

	// Cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM users WHERE 
							username = '$UserName'
						");
	if (mysqli_fetch_assoc($result)) {
		echo "
					<script>
						alert('Username Sudah Terdaftar');
					</script>
				";
		return false;
	}

	// Cek konfirmasi password
	if ($Password !== $PasswordConfirm) {
		echo "
					<script>
						alert('Konfirmasi Password Tidak Sesuai');
					</script>
				";
		return false;
	}

	// Enkripsi password
	$Password = password_hash($Password, PASSWORD_DEFAULT);

	// Tambahkan user baru ke DB
	mysqli_query($conn, "INSERT INTO users 
									VALUES
							('', '$UserName', '$Password')
						");
	return mysqli_affected_rows($conn);
}
