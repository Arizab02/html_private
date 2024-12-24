<?php

/* Apa itu data ?
Data = "Representasi dari FAKTA di dunia nyata"

Istilah istilah yang digunakan :

> Primary key = "sebuah data yang dapat merepresentasikan satu baris record secara unik (alias berbeda)
> Unique key = "sebuah data yang dapat merepresentasikan satu baris record secara unik (alias berbeda)
biasanya primary key diinput oleh sistem atau admin data...
Contoh : NIK, NRP, ID, ISBN dll.

> Field / Column = 
> Auto increment = Penambahan otomatis pada suatu data, biasanya di primary key.
> Foreign key = "sebuah data yang merepresentasikan data dari tabel lainnya "

*/

function countsheep($num){
    if ($num == 0){
        return "";
    }
    for ($i=1; $i <= $num; $i++){
        yield "$num sheep...\n";
    }
}

countsheep(0);
countsheep(1);
countsheep(2);
countsheep(3);