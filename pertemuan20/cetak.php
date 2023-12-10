<?php

require_once __DIR__ . '/vendor/autoload.php';
include 'functions.php';

$anime = query("SELECT * FROM anime");
$mpdf = new \Mpdf\Mpdf();
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6e139221d0.js" crossorigin="anonymous"></script>
    <title>Daftar Anime</title>
</head>
<style>

	h1 {
		font-family: "Lucida Console", Monaco, monospace;
		margin-top: 20px;
        font-size: 45px;
        text-align: center;
	}

	img {
		border: 1px solid black;
		width: 80px;
		resize: none;
	}

	.td-fonts,
	.td-action {
		padding-top: 40px;
		padding-bottom: 40px;
		text-align: center;
	}

</style>
<body>
    <h1>Daftar Anime</h1><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" style="background-color: #F6F3F3; padding-top: 12px; padding-bottom: 12px; text-align: center;">No</th>
                <th scope="col" style="background-color: #F6F3F3; padding-top: 12px; padding-bottom: 12px; text-align: center;">Gambar</th>
                <th scope="col" style="background-color: #F6F3F3; padding-top: 12px; padding-bottom: 12px; text-align: center;">Judul</th>
                <th scope="col" style="background-color: #F6F3F3; padding-top: 12px; padding-bottom: 12px; text-align: center;">Genre</th>
                <th scope="col" style="background-color: #F6F3F3; padding-top: 12px; padding-bottom: 12px; text-align: center;">Studio</th>
                <th scope="col" style="background-color: #F6F3F3; padding-top: 12px; padding-bottom: 12px; text-align: center;">Rilis</th>
                <th scope="col" style="background-color: #F6F3F3; padding-top: 12px; padding-bottom: 12px; text-align: center;">Skor</th>
            </tr>
        </thead>
        <tbody>';

$i = 1;
foreach ($anime as $anm) {
    $html .=
        '<tr>
            <td scope="row">
                <div class="td-fonts">' . $i++ . '</div>
            </td>
            <td style="text-align: center;"><img src="img/' . $anm["gambar"] . '" width="60"></td>
            <td>
                 <div class="td-fonts">' . $anm["judul"] . '</div>
            </td>
            <td>
                <div class="td-fonts">' . $anm["genre"] . '</div>
            </td>
            <td>
                <div class="td-fonts">' . $anm["studio"] . '</div>
            </td>
            <td>
                <div class="td-fonts">' . $anm["rilis"] . '</div>
            </td>
            <td>
                <div class="td-fonts">' . $anm["skor"] . '</div>
            </td>
        </tr>';
}

$html .=
    '</tbody>
    </table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('Daftar-Anime.pdf', 'I');
