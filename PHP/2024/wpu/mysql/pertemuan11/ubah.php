<?php 
require 'function.php';

//ambil data dari url
$id = $_GET["id"];
// query data mahasiswa berdasarkan id?
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0]; //id yang ditangkap sesuai dengan yang diambil dari url

if(isset($_POST["submit"])){
    // jika tombol ubah data diklik maka ambil data dari tiap elemen dalam form

    // cek apakah data berhasil diubah atau tidak?
    if(ubah($_POST) > 0){
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah');
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
    <title>ubah data mahasiswa</title>
</head>
<body>
    <h1>ubah data mahasiswa</h1>
    <form action="" method="post">  <!-- method post nyambungin ke PHP  -->
        <input type="hidden" name="id" value="<?=$mhs["id"]?>" required>
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" value="<?=$mhs["nama"]?>" required>
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" value="<?=$mhs["email"]?>" required>
            </li>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp" value="<?=$mhs["nrp"]?>" required>
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?=$mhs["jurusan"]?>" required>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" value="<?=$mhs["gambar"]?>" id="gambar">
                <!-- <input type="file" name="gambar" id="gambar"> -->
            </li>
            <li>
                <button type="submit" name="submit">ubah data</button>
            </li>
        </ul>
    </form>
</body>
</html>