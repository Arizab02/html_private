<?php 
require 'function.php';

if(isset($_POST["submit"])){
    // jika tombol tambah data diklik maka ambil data dari tiap elemen dalam form
    

    // cek apakah data berhasil ditambahkan atau tidak?
    if(tambah($_POST) > 0){
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>
    <form action="" method="post">  <!-- method post nyambungin ke PHP  -->
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" require>
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" require>
            </li>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp" require>
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" require>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar">
                <!-- <input type="file" name="gambar" id="gambar"> -->
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
        </ul>
    </form>
</body>
</html>