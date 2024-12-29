<?php
require 'function.php'; 
$mahasiswa = query("SELECT * FROM mahasiswa"); //<-- bahasa sql
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href ="tambah.php">Tambah</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="5">
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Email</th>
            <th>Jurusan</th>
    </tr>
    <?php $i =1; ?>
    <?php foreach($mahasiswa as $row):?> 
    <tr>
        <td><?= $i;?> </td>
        <td><?= $row["id"] ?></td>
        <td><a href="#">Ubah</a>/<a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah kamu akan menghapus?');">Hapus</a></td>
        <td><img src="img/<?= $row["gambar"];?>" alt="Gambar" width="100" height="100"></td>
        <td><?= $row["nama"];?></td>
        <td><?= $row ["nrp"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>
</body>
</html>