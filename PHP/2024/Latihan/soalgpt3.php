<?php
namespace Latihan\soalgpt3;
/*1. Overloading (Magic Methods)
Soal:
Buat kelas Product yang menggunakan magic methods __get dan __set untuk menangani properti yang tidak ada dalam objek. Tambahkan properti:

name
price
Tulis kode untuk:

Mengatur nilai name menjadi "Laptop" dan price menjadi 15000000.
Menambahkan properti dinamis discount (diskon).
Mencetak semua properti yang diatur, termasuk yang dinamis.*/
class Product {

    private $data = [];
    function __set($name,$value){ 
        if (isset($this->data[$name])){ //set tambahkan properti apabila tidak ada, apabila ada maka tampilkan
            return $this->data[$name];}
        $this->data[$name] = $value; //memasukkan nama properti ke assosiative array 
    }
    function __get($name){
        return $this->data[$name] ?? null; // Null coalescing ntuk mengecek apakah ekspresi sebelah kiri null? apabila null lempar ke ekspresi kanan.
    }
}
$data = new Product();
$data->name = "Raia";
$data->umur = 29;
$data->kelamin; //Error : properti tidak ada...

echo "Nama saya adalah ".$data->name."\n";
echo "Umur saya adalah ".$data->umur."\n";
print_r($data->name);
/*
2. Static Property dan Method
Soal:
Buat kelas Counter yang memiliki properti static count dengan nilai awal 0. Tambahkan metode:

increment() untuk menambah nilai count sebesar 1.
getCount() untuk mencetak nilai count.
Tulis kode untuk memanggil metode ini tanpa membuat objek dan tampilkan nilai akhirnya setelah 3 kali pemanggilan increment().
*/
class Counter{
    public static $count = 0;
    static function increment(){
        self::$count++;
    }
    static function getCount(){
        return self::$count;
    }
}

Counter::increment();
Counter::increment();
Counter::increment();
echo Counter::getCount();
/*
3. Dependency Injection
Soal:
Buat kelas Mailer dengan metode send($message) yang mencetak "Sending: [message]".
Buat kelas Notification yang menerima objek Mailer melalui konstruktor. Tambahkan metode notify($message) pada Notification untuk memanggil Mailer::send().

Tulis kode untuk membuat instance dari Mailer dan Notification, lalu gunakan metode notify() untuk mencetak pesan "Welcome to OOP in PHP!".
*/
class Mailer{
    static function send($message){
        return "Sending: $message";
    }
}
class Nontification{
    function __construct(){
        new Mailer;
    }
    function notify($message){
        return Mailer::send($message);
    }
}

$halo = new Mailer;
$notif= new Nontification();
echo $notif->notify("Welcome to OOP in PHP");
/*
4. Trait
Soal:
Buat trait Logger dengan metode log($message) yang mencetak "[LOG]: [message]".
Buat dua kelas FileHandler dan DatabaseHandler yang menggunakan trait Logger.

Pada FileHandler, tambahkan metode saveToFile($data) yang memanggil metode log() untuk mencetak pesan sebelum menyimpan data.
Pada DatabaseHandler, tambahkan metode insertToDb($data) yang memanggil metode log() untuk mencetak pesan sebelum memasukkan data.
Tulis kode untuk menguji kedua kelas dengan pesan log masing-masing.

5. Final Class dan Method
Soal:
Buat kelas final APIConnector dengan properti:

endpoint (URL API)
token (API token)
Tambahkan metode final connect() untuk mencetak "Connecting to [endpoint] with token [token]."

Buat kelas lain yang mencoba mewarisi APIConnector dan jelaskan mengapa kode tersebut gagal dijalankan.

6. Custom Exception Handling
Soal:
Buat custom exception bernama InvalidAgeException.
Buat kelas User dengan m
etode setAge($age). Jika nilai $age kurang dari 18, lemparkan InvalidAgeException dengan pesan "Age must be at least 18."

Tulis kode untuk:

Membuat objek User dan memanggil setAge() dengan nilai 15.
Tangani exception menggunakan blok try-catch untuk mencetak pesan error. */
?>