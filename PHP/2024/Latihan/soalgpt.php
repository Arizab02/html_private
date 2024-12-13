<?php
// kita akan mengerjakan soal yang dibuat oleh chatgpt

/*
Soal 1: Pemrograman Berorientasi Objek (OOP)

Buatlah sebuah program PHP untuk mengelola data buku di sebuah perpustakaan. Program harus mencakup:

    Sebuah kelas Book dengan properti title, author, publisher, dan year.
    Metode dalam kelas tersebut untuk:
        Menampilkan informasi buku.
        Memperbarui informasi buku.
    Sebuah kelas Library untuk menyimpan daftar buku dan metode untuk:
        Menambahkan buku baru.
        Menghapus buku berdasarkan judul.
        Menampilkan semua buku di perpustakaan.
*/

class perpustakaan{
    public $title = [];
    public $author = [];
    public $publisher = [];
    public $year = [];

    function tampilkan_isi(){
        if(count($this->title) == 0){
            echo "Tidak ada buku di perpustakaan";
            return;
        }
        else{
            echo "Daftar nama buku\n";
            foreach($this->title as $nama){
                print_r("<pre>--> $nama <br></pre>\n");
            }
            echo "<pre>";
            print_r($this->title);
            echo "</pre>";
            return;
        }
    }

    function update_isi(){

    }
    function tambah_isi(...$isi){
        foreach($isi as $judul){
            $this->title[] = $judul;
        }
    }
    function atur_author(){
        $this->tampilkan_isi();
        echo "Yang mana yang akan kamu pilih?...";

    }

    function hapus_judul($nomor){
        array_splice($this->title,$nomor,1) ;
        $this->tampilkan_isi();
    }

    function timpa_judul($nomor,$judul_baru){
        array_splice($this->title,$nomor,1,$judul_baru);
    }
}

$buku = new perpustakaan();
// $buku->title = ["buku1","buku2","buku3"];
$buku->tambah_isi("halo halo bandung","dia adalah bapakku","aku punya kapal yang besar","matahari","bulan");
echo $buku->tampilkan_isi();
// echo $buku->atur_author();
echo $buku->hapus_judul(1);
$buku->timpa_judul(1,"Pemrograman Python")
?>