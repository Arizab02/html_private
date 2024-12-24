<?php 
// ini adalah array 
// array adalah sebah variabel yang bisa memiliki banyak nilai sekaligus.
// elemen yang menyimpan pasangan antara key dan value 
// key = index yang dimulai dari nol
// value = nilai dari setiap index
// array adalah tipe data kompleks

/* Terdapat tiga jenis array dalam PHP:
    1. Index Array
    2. Assosiative Array
    3. Multidimensional Array
*/

// cara bikinnya gampang :
// tinggal pake : array();
// atau $array = [ini, isi, array, nya, dipisah, berdasarkan, koma,.] <-- disebut dengan element

$hari = array("Senin ", "Selasa", "Rabu", "Kamis","Jumat","Sabtu","Ahad");

// Elemen dalam array boleh memiliki tipe data yang berbeda
$array = [13,true, "string"];

// cara menampilkan array adalah :
// var_dump()
var_dump($array);
//print_r
print_r($hari);

//echo <-- apabila yang ditampilkan hanya satu index saja
echo $array[0];
echo $hari[3];

// untuk menambahkan nilai baru pada aray
$hari[] = "Ahad "; //ini untuk menambahkan elemen baru pada array 

//array assosiative
// urutannya itu adalah 'key' => 'value'
// maka urutan key berubah menjadi urutan value alih alih menggunakan nomor
//contoh:

$assosiative = [
    "nama"=> "value",
    "buah" => "pisang",
    "makanan" => "nasi",
];

// cara mengaksesnya adalah $variable["key"];
echo "\n";
echo $assosiative["nama"];
//atau menggunakan for atau foreach
echo "\n";
foreach($assosiative as $key => $value){
    echo "$key : $value";
    echo "\n";
    
    echo "Ini adalah kunci bernama $key";
    echo "\n";
    echo "Ini adalah value bernama $value";
    echo "\n";
}

//array multidimensional
//array yang diisi dengan array lagi 
// biasanya disebut dengan nest array 

//is_array() adalah built-in function yang berfungsi untuk mengecek apakah data yang dimasukkan angka?
echo is_array($assosiative);

