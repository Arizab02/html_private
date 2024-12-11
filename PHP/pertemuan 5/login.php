<?php
    // untuk memulai sesi pada suatu browser sampai ditutup
    session_start();

    $_SESSION["username"] = "Aria";
    $_SESSION["password"] = "root";

    print_r($_SESSION);

    if ($_SESSION["username"] && $_SESSION["password"]){
        // untuk check ke database
        // apabila tidak sesuai balik ke belajar1.php
        header("Location: belajar1.php");
    }

    // Logout
    session_destroy();
?>
