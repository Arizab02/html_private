<?php 
namespace Produk;
class Produk {
    public $judul,
    $penulis,
    $penerbit,
    $harga = 0,
    $jumlahHalaman,
    $jamMain;

    function __construct($judul, $penulis, $penerbit, $harga,$jumlahHalaman = 0, $jamMain = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getlabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class cetakProduk{
    function cetak(Produk $produk /*referensi ke kelas Produk yang sudah dibikin*/){
        $str = "{$produk->judul} | {$produk->getlabel()} , (Rp.{$produk->harga})\n";
        return $str;
    }
}
$produk1 = new Produk("Naruto","Clover","Masashi Kisimoto", 100000);
$produk2 = new Produk("Minecraft Java Edition","C, C++, Java","Mojang",20000);
// var_dump($produk2/);
// echo $produk2->getlabel();

$cetak = new cetakProduk;
echo $cetak->cetak($produk1);
echo $cetak->cetak($produk2);



//
//
//
//
class MyFriend{
    public  $hobby = ["gaming", "coding", "programming"],
            $language = ['PHP', 'Python', 'C', 'C++'],
            $food = ['nasi goreng', 'soto', 'bakso'],
            $myHobby,
            $myLanguage,
            $myFood;

    public function __construct(){
        $this->myHobby = $this->inputHobby();
        $this->myLanguage = $this->inputLanguage();
        $this->myFood = $this->inputFood();
    }

    private function inputHobby(){
        echo "Masukkan hobby (pisahkan dengan koma): ";
        $hobby = trim(fgets(STDIN));
        return explode(",", $hobby);
    }

    private function inputLanguage(){
        echo "Masukkan bahasa pemrograman (pisahkan dengan koma): ";
        $language = trim(fgets(STDIN));
        return explode(",", $language);
    }

    private function inputFood(){
        echo "Masukkan makanan favorit (pisahkan dengan koma): ";
        $food = trim(fgets(STDIN));
        return explode(",", $food);
    }
    /**
     * Mencari teman yan gcocok dengan hobi, bahasa, dan makanan favorit yang diberikan.
     * Apabila terdapat kesamaan antara hobi, bahasa dan makanan yang diberikan, maka akan menampilkan pesan "I've found my friend".
     * Apabila tidak terdapat kesamaan antara hobi, bahasa dan makanan yang diberikan, maka akan menampilkan pesan "I haven't found my friend".
     */
    public function searchMyFriend(){
        $hobbyMatch = array_uintersect($this->hobby,$this->myHobby,'strcasecmp');
        $languageMatch = array_uintersect($this->language,$this->myLanguage,'strcasecmp');
        $foodMatch = array_uintersect($this->food,$this->myFood,'strcasecmp');
        if(!empty($hobbyMatch) && !empty($languageMatch) || !empty($foodMatch)){
            echo "I've found my friend";
        }
        else{
            echo "I haven't found my friend";
        }
    }
}

$myFriend = new MyFriend();
$myFriend->searchMyFriend();
