<?php
namespace Hello;

echo "Hello world";
class Hello{
    public $nama;
    public static $input;

    public function set_nama($isi){
        $this->nama =$isi;
    }
    public static function get_nama($instance){
        echo $instance->nama;
    }
}

$halo = new Hello;
$halo->set_nama("Nama orang");
Hello::get_nama($halo);
?>