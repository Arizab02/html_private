<?php
//koneksi ke database
//mysqli_connect(Hostname,username,password,database)
$conn = mysqli_connect("localhost","aria","root","phpdasar");

//ambil data dari tabel mahasiswa /query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");     
if(!$result) {
    mysqli_error($conn);
}

// ambil data table mahasiswa (fetch) dari object result
// mysqli_fetch_row()
// $mhs = mysqli_fetch_array($result);// Mengembalikan array numerik
// var_dump($mhs[1]);

//mysqli_fetch_assoc
// $mhs = mysqli_fetch_assoc($result); //mengembalikan array assosiative
// var_dump($mhs["NRP"]);

//mysqli_fetch_array
// $mhs = mysqli_fetch_array($result); // mengembalikan array numerik dan assosiative
// var_dump($mhs[1]);

// mysqli_fetch_object
// $mhs = mysqli_fetch_object($result); // mengembalikan object
// var_dump($mhs->NRP);

//mengembalikan seluruh data
// while ($mhs = mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }
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
    <?php while ($row = mysqli_fetch_assoc($result)):?> 
    <tr>
        <td><?php $i=1; echo $i;$i++;;?> </td>
        <td><?= $row["id"] ?></td>
        <td><a href="#">Ubah</a>/<a href="#">Hapus</a></td>
        <td><img src="img/<?= $row["gambar"];?>" alt="Gambar" width="100" height="100"></td>
        <td><?= $row["nama"];?></td>
        <td><?= $row ["nrp"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>