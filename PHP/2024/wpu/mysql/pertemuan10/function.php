<?php 
/*Ini adalah file untuk menaruh fungsi fungsi mysql di PHP

ini adalah penerapan dari konsep MVC alih alih menggunakan prosedural */

//koneksi ke database
//mysqli_connect(Hostname,username,password,database)
$conn = mysqli_connect("localhost","aria","root","phpdasar");

//ini dalah lemari 
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
//ambil data dari tabel mahasiswa /query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");     
if(!$result) {
    mysqli_error($conn);
}

function tambah($data){
    global $conn;

    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);
 
    $query = "INSERT INTO mahasiswa 
    VALUES 
    (default, '$nama', '$nrp', '$email', '$jurusan', '$gambar')"; //kirimkan ke SQL
 
    mysqli_query($conn, $query); //buat masukkin code SQL via PHP
    
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}
?>