<?php

// Melakukan Pengulangan pada Array
	
	// for / foreach
		$angka1 = [3,2,1,15,10,99,88,77,99];
		$angka2 = 
				[
					[3,2,1],
					[15,10,99],
					[88,77,99]
				];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan 2</title>
	<style>
		
		.kotak {
			width: 80px;
			height: 80px;
			background-color: red;
			text-align: center;
			font-size: 25px;
			line-height: 80px;
			margin: 4px;
			float: left;
			cursor: pointer;
			transition: 1s;
		}

		.kotak:hover {
			transform: rotate(360deg);
			border-radius: 50%;
		}

		.clear { clear: both; }

	</style>
</head>
<body>

	<!-- Cara 1 -->
	<?php for($i = 0; $i < count($angka1); $i++) : ?>
		<div class="kotak"><?= $angka1[$i] ?></div>
	<?php endfor; ?>
	
	<div class="clear"></div>

	<!-- Cara 2 -->
	<?php foreach ($angka1 as $a) : ?>
		<div class="kotak"><?= $a; ?></div>
	<?php endforeach; ?>

	<div class="clear"></div>

	<?php foreach ($angka2 as $b) : ?> 
		<?php foreach ($b as $c) : ?>
			<div class="kotak"><?= $c; ?></div>
		<?php endforeach; ?>
		<div class="clear"></div>
	<?php endforeach; ?>

</body>
</html>