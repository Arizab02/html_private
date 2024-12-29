<?php

/*Kita harus mengoneksikan PHP ke ddatabase di MySql dengan :

$servername = "Localhost" <-- ini nama server 
$username = "root" <-- ini nama user yang terdaftar pada MySql
$password = 'password' <-- ini password user 

// create connection 
$conn = new mysql($servername,$username,$password);

//chechk connection 
if ($conn->connect_error ){ // Membuat objek bernama $conn untuk mengoneksikan ke database
    die("Connection failed">>$conn->connect_error); // ini untuk menghentikan koneksi apabila tidak bisa terkoneksi.
}
    echo "Connect Succesfully";
*/

$servername = "Localhost";
$username = "aria";
$password = "root";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
    die("Koneksi gagal".$conn->connect_error);
}
echo "Koneksi berhasil";

// echo $_SERVER['PHP_SELF'];
// ECHO "<BR>";
// ECHO $_SERVER['SERVER_NAME'];
// ECHO "<BR>";
// ECHO $_SERVER['HTTP_HOST'];
// ECHO "<BR>";
// ECHO $_SERVER['SERVER_SOFTWARE'];
?>

