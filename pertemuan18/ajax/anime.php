<?php require '../functions.php'; ?>
<?php

$keyword = $_GET["keyword"];
$query = "SELECT * FROM anime 
                WHERE
            judul LIKE '%$keyword%' OR
            skor LIKE '%$keyword%' OR
            rilis LIKE '%$keyword%' OR
            studio LIKE '%$keyword%' OR
            genre LIKE '%$keyword%'
        ";
$anime = query($query);

// var_dump($anime);

?>

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
        <?php foreach ($anime as $anm) : ?>
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