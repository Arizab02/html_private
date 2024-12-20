<?php
namespace latihan1;


// Belajar tentang objek

/* Caranya buat dulu kelasnya:
dengan kata kunci class nama_kelas(){}

Contoh:*/

class kelasku{

    // variabel apabila berada di dalam fungsi maka dimakan dengan properti

    public $properti;

    // dan apabila fungsi maka akan dimakan dengan Method...
    public function method(){
        $this->properti = "Halo ini adalah isi properti yang sudah diisi dengan key \$this\n";
        return $this->properti;
    }
}

// ini cara adalah cara kita membuat object.
$a = new kelasku(); //key "new" untuk memasukkan class ke dalam variabel
var_dump($a); //object object(kelasku)#1 (1) { ["properti"]=>  NULL }


echo $a->properti;
echo $a->method();

/*
Ada tiga jenis hak akses dalam object alias Access Modifier:
--> Public = Properti atau Method yang bisa diakses dimana saja dalam satu file kerja.
--> Protected = Properti atau Method yang bisa diakses oleh kelas yang menginisiasi dan turunan kelas tersebut.
--> Private = Properti atau Method yang HANYA bisa diakses didalam kelas yang menginisiasi.

Cara mewariskan kelas adalah dengan kata kunci "extends", maka apabila kita akan mewariskan kelas Kelasku() dengan kelas yang lain adalah begini...

Contoh:

class kelas_anak extends Kelasku{
/// Your code
}
*/

class kelas_anak extends Kelasku{
    // ini adalah kelas anak dari Kelasku yang sudah berhasi diinisiasi.
    private $privat;

    function set_privat($set){
        $this->privat = $set;
        return;
    }
    function get_privat(){
        return $this->privat;
    }
}

$anak = new kelas_anak();
echo $anak->set_privat("cara kita ubah nilainya hanya melalui kelas yang menginisiasi tersebut...\n");

echo $anak->get_privat();
echo "ini adalah baris terakhir di file latihan1.php\n";

echo "nama namepace ini adalah :".__NAMESPACE__."\n";