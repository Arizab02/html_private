<?php

// Belajar tentang objek

/* Caranya buat dulu kelasnya:
dengan kata kunci class nama_kelas(){}

Contoh:*/

class kelasku{

    // variabel apabila berada di dalam fungsi maka dimakan dengan properti

    public $properti;

    // dan apabila fungsi maka akan dimakan dengan Method...
    public function method(){
        $this->properti = "Halo ini adalah isi properti yang sudah diisi dengan key \$this";
        return $this->properti;
    }
}

// ini cara adalah cara kita membuat object.
$a = new kelasku(); //key "new" untuk memasukkan class ke dalam variabel
var_dump($a); //object object(kelasku)#1 (1) { ["properti"]=>  NULL }


echo $a->properti;
echo $a->method();

class matematika{
    
}
