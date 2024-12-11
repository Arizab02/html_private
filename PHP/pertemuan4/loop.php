<?php
    print"selamat pagi <br>";
    print"halo kawan <br>";
    echo "<hr>";
    print"Mau keluar? <br>";
    $jawaban = "ya";
    if($jawaban == "ya") {
        print"sampai jumpa <br>";
    }
    else{
        print"tidak jadi keluar <br>";
    };
    $level = 3;
    switch($level) {
        case 1:
            echo "<hr>";
            echo "main level satu <br>";
            break;
        case 2:
            echo "<hr>";
            echo "mainkan level dua <br>";
            break;
        case 3:
            echo "<hr>";
            echo "mainkan level tiga <br>";
            break;
        default:
            echo "Selamat";
    }
    echo "<hr>";
    echo "<br>";
    echo "Pengulangan menggunakan for loop";
    echo "<hr>";
    echo "<br>";
    $akhir = 20;
    for($i=0; $i<$akhir+1; $i++){
        echo "<p>Ini pengulangan ke $i dari $akhir</p>";
    }
    echo "<br>";
    echo "<hr>";
    echo "Pengulangan menggunakan while loop";
    echo "<hr>";
    while($akhir > 0){
        print "ini adalah pengulangan ke $akhir <br>";
        $akhir--;
    }
    echo "<br>";
    echo "<hr>";
    echo "pengulangan menggunakan foreach";
    echo "<hr>";
    $nama_universitas =[
        "Universitas Padjadjaran",
        "Universitas Tri Darma",
        "Universitas Indonesia",
        "Universitas AMIKOM",
        "Universitas Telkomsel",
    ];

    echo "<h1>Nama universitas</h1>";
    echo "<ul>";
    foreach($nama_universitas as $data){
        echo "<li>$data</li>";
    }
    echo "</ul>";
    echo "<br>";
    $akhir = 10;
    echo "<hr>";
    echo "Pengulangan bersarang menggunakan for loop";
    echo "<hr>";
    for($i=0; $i<$akhir+1; $i++){
        for($j=0; $j<$akhir+1; $j++){
            echo "<p>Ini pengulangan ke ($i,$j) dari $akhir</p>";
        }}
?>