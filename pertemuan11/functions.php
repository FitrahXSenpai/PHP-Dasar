<?php

	// Koneksi ke DB
		$conn = mysqli_connect("localhost", "root", "", "phpdasar");

		function query($query){
			global $conn;
			$result = mysqli_query($conn, $query);
			$rows = [];
			while($row = mysqli_fetch_assoc($result)){
				$rows[] = $row;
			}
			return $rows;
		}

		function tambah($data){
			
			global $conn;

			$Judul = htmlspecialchars($data["judul"]);
			$Skor = htmlspecialchars($data["skor"]);
			$Rilis = htmlspecialchars($data["rilis"]);
			$Studio = htmlspecialchars($data["studio"]);
			$Genre = htmlspecialchars($data["genre"]);
			$Gambar = htmlspecialchars($data["gambar"]);

			// Query insert data
			$query = "INSERT INTO anime
						VALUES
				('', '$Judul', '$Skor', '$Rilis', '$Studio', '$Genre', '$Gambar')
			";
			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
		}

		function hapus($id){

			global $conn;

			mysqli_query($conn, "DELETE FROM anime WHERE id = $id");

			return mysqli_affected_rows($conn);
		}

		function edit($data){
			
			global $conn;

			$id = $data["id"];
			$Judul = htmlspecialchars($data["judul"]);
			$Skor = htmlspecialchars($data["skor"]);
			$Rilis = htmlspecialchars($data["rilis"]);
			$Studio = htmlspecialchars($data["studio"]);
			$Genre = htmlspecialchars($data["genre"]);
			$Gambar = htmlspecialchars($data["gambar"]);

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

		function cari($keyword) {

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

?>