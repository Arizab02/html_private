<?php
class pondokit{
    //Access Modifier
    Public $Asrama20 = "Asrama20";
    protected $Asrama19 = "Asrama19";
    private $Asrama18 = "Asrama18";

    function get_asrama18(){
        return $this->Asrama18;
    }
}

class pondokitpro extends pondokit{

    function get_asrama19(){
        return $this->Asrama19;
    }
}

// Ini adalah output
$pondok = new pondokit();
echo $pondok->Asrama20."\n";

$pondokit = new pondokitpro();
echo $pondokit->get_asrama19()."\n";
echo $pondok->get_asrama18()."\n";

// Abstrak class
// Ingat kelas abstrak tidak bisa diinisiasi menjadi objek
abstract class Car {
    public $name;

    function __constant($name){
        $this->name= $name;
    }

    abstract public function intro():string;
}

class Audi extends Car {
    public function intro():string{
        return "This is $this->name, and I love it";
    } // metode abstrak harus dibuat kalau di kelas parent juga dibuat.
}

class Volvo extends Car {
    public function intro():string{
        return "";
    }
    function __construct(){
        echo "This is Volvo $this->name";
    }
}

// $m = new Car();
$mobil = new Audi();

// interface
/* Interface diinisiasi dengan kata kunci "Interface", contoh :

interface InterfaceName{
    public function someMethod1();
    public function someMethod2($name, $color);
    public function someMethod3() : string; 
}

Terdapat beberapa aturan yang cukup kerar dalam interface:
=>  Interfaces cannot have properties, while abstract classes can.
=>  All interface methods must be public, while abstract class methods is public or protected.
=>  All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary.
=>  Classes can implement an interface while inheriting from another class at the same time.

*/

interface InterfaceName{
    public function method1();
    public function method2($param);
    public function method3($param1,$param2);
}

class ClassName implements InterfaceName{
    public function method1(){
        echo "I dont know what should I do...!\n";
    }
    public function method2($param){
        echo "$param I dont know what should I do...!\n";
    }
    public function method3($param1,$param2){
        echo "$param1 ,I dont know what should I do...!,$param2\n";
    }

}

$implementasi = new ClassName();
$implementasi->method1();
$implementasi->method2("Galia");
$implementasi->method3("Mbuh",321);
?>