<?php
    // Membuat array baru.
    echo "Cara membuat array di PHP <br><hr>";
    echo "1. Menggunakan function array() <br>
    2. Menggunakan kurung siku langsung <br>";
    echo "contoh : <br>";
    echo "a = array('isi','isi2','isi3') <br>";
    echo "b = ['isi','isi2','isi3'] <br>";
    echo "hasil ==>";
    $array1 = array('isi1','isi2','isi3');
    $array2 = ['isi','isi2','isi3'];

    echo "<pre>";
    print_r($array1);
    echo "</pre>";
    echo "<hr>";
    echo "ini array2";
    echo "<pre>";
    print_r($array1);
    echo "</pre>";

    echo "Cara menghapus nilai array";
    echo "<hr>";
    // Menghapus nilai dari suatu array 
    echo "Menghapus nilai aray dengan function unset($'nama_array[indeks]) <br>";
    echo "contoh: unset($'array1[1])<br>";
    // sebelum dihapus
    echo "sebelum dihapus";
    echo "<pre>";
    print_r($array1);
    echo "</pre>";
    unset($array1[1]);
    // sesudah dihapus
    echo "sesudah dihapus";
    echo "<pre>";
    print_r($array1);
    echo "</pre>";

    echo "Cara menambah nilai array";
    echo "<hr>";
    // Menambahkan nilai di array
    echo "Ada dua cara untuk menambahkan nilai ke array<br>";
    echo "1. Dengan cara menambahkan langsung ke nilai pada indeks tertentu<br>";
    echo "Contoh : $'array1[1] = 'halo'<br>";

    // sebelum ditambah
    echo "sebelum ditambah<br>";
    echo "<pre>";
    print_r($array1);
    echo "</pre>";

    // Menambah nilai di array
    $array1[1] ='haloo';
    
    // sesudah ditambah
    echo "sesudah ditambah<br>";
    echo "<pre>";
    print_r($array1);
    echo "</pre>";
    
    echo "2. Menambahkan ke akhir array<br>";
    echo "Contoh : $'array1[] = 'kita'<br>";

    // sebelum ditambah
    echo "sebelum ditambah<br>";
    echo "<pre>";
    print_r($array1);
    echo "</pre>";

    // Menambah nilai di array
    $array1[] ='kita';

    // sesudah ditambah
    echo "sesudah ditambah<br>";
    echo "<pre>";
    print_r($array1);
    echo "</pre>";

    // Array asosiatif
    echo "Array asosiatif adalah array yang indeksnya tidak menggunakan nomer atau angka. 
    <br>Indeks array asosiatif berbentuk kata kunci.<br>";
    echo "Contoh:<br>";
    echo "<br>";
    
    $buku = [
        "nama pengarang"=>"Huhu haha",
        "nama publisher"=>"Ini publishnya",
        "nomor induk"=>3127987934,
    ];

    foreach($buku as $data){
        echo "$data<br>";
    }
    echo "<br>";
    
    echo "Array asosiatif<br>";
    echo "<pre>";
    print_r($buku);
    echo "</pre>";

    // array multi dimensi 
    echo "Array multi dimensi adalah array yang memiliki dimensi lebih dari satu.<br> Biasanya digunakan untuk membuat matriks, graph, dan struktur data rumit lainnya.";
    echo "<br> contoh:";

    $matrik = [
        [2,3,4],
        [5,3,2],
        [6,4,2],   
    ];

    // cara mengakses isinya
    echo $matrik[1][0]; //-> output: 7

    $ariatikel = [
        [
            "judul" => "Belajar PHP & MySQL untuk Pemula",
            "penulis" => "petanikode"
        ],
        [
            "judul" => "Tutorial PHP dari Nol hingga Mahir",
            "penulis" => "petanikode"
        ],
        [
            "judul" => "Membuat Aplikasi Web dengan PHP",
            "penulis" => "petanikode"
        ]
    ];
    
    // menampilkan array
    foreach($ariatikel as $post){
        echo "<h4>".$post["judul"]."</h4>";
        echo "<p>".$post["penulis"]."<p>";
        echo "<hr>";
    }

    echo "Kode selesai...";
    
    ?>