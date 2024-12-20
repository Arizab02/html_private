<?php
trait Trait1{
    public function msg(){
        echo "OOP is fun...\n";
    }
}
trait Trait2{
    public function msg2($name){
        echo "I've been leaning about $name much further\n";
    }
}

interface belajar{
    public function belajar():string;
}

abstract class Kamu{
    public $nama_bahasa = "PHP";
    public function Senang($nama_bahasa):string{
        return "$nama_bahasa";
    }

}
class My extends Kamu implements belajar{
    use Trait1;
    use Trait2;// atau bisa gini :>> use Traits1,Traits2;
    function __construct($name = "this",$nama_bahasa="PHP"){
        $this->panggil($name);
        $this->Senang($nama_bahasa);
    }
    public function panggil($name){
        $this->msg();
        $this->msg2($name);
    }

    public function belajar(): string{
        return "Aku senang belajar $this->nama_bahasa\n";
    }
    public function Senang($nama_bahasa = "PHP"): string{
        // $nama_bahasa = $this->nama_bahasa;
        return "Aku suka belajar dan memainkan bahasa $nama_bahasa\n";
    }

    static public $Hai = "Hai aku adalah pembelajar PHP sejati\n";
    static public function Bahagia(){
        echo "ini adalah properti static\n";
    }
}

$A = new My();
$A->msg();
$A->msg2("Java");
$A->msg2("Java Script");
$A->msg2("Python");
$A->msg2("PHP");
echo $A->Senang();
echo $A->Senang("Rust");
echo $A->Senang("C++");

$A->nama_bahasa = "R";
$A->belajar();

My::Bahagia();
echo My::$Hai;
echo My::class; //untuk menampilan nama kelas secara langsung
?>