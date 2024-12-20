<?php

// soal pertama
/*1. OOP dan Class/Object

Soal:
Buat sebuah kelas bernama Mobil yang memiliki properti:

    $merk (public)
    $warna (private)
    $tahun (protected)

Tambahkan metode:

    __construct untuk menginisialisasi nilai $merk, $warna, dan $tahun.
    tampilkanInfo() (public) untuk menampilkan informasi mobil dalam format:
    Mobil [merk] berwarna [warna], diproduksi pada tahun [tahun].

Tugas:

    Buat objek Mobil dengan data Toyota, Merah, 2020, lalu panggil metode tampilkanInfo().
*/

class Mobil{
    public $merk;
    private $warna;
    protected $tahun;

    public function __construct($merk,$warna,$tahun){
        $this->merk = $merk;
        $this->warna = $warna;
        $this->tahun = $tahun;
    }

    public function tampilkaninfo(){
        echo "Mobil $this->merk berwarna $this->warna, diproduksi pada tahun $this->tahun\n";
    }
}

$toyota= new Mobil("Toyota","merah",2020);
$toyota->tampilkaninfo();

/*2. Constructor dan Destructor

Soal:
Buat kelas bernama Laptop yang:

    Memiliki properti $merk dan $status (default "mati").
    Constructor:
        Menerima $merk sebagai parameter.
        Menampilkan pesan: Laptop [merk] dihidupkan.
    Destructor:
        Menampilkan pesan: Laptop [merk] dimatikan.

Tugas:

    Buat objek Laptop dengan merk "Asus". Setelah program selesai dijalankan, pastikan pesan dari destructor ditampilkan
*/

class Laptop{
    public $merk;
    public $status = "mati";

    function __construct($merk){
        $this->merk = $merk;
        echo "Status $this->merk = $this->status\n";
        $this->status = "hidup";
        echo "Laptop $this->merk dihidupkan\n";
    }
    
    function __destruct(){
        echo "Status $this->merk = $this->status\n";
        // $this->status = "mati";
        echo "Laptop $this->merk dimatikan\n";
    }
}

$laptop = new Laptop("Asus");

/*
3. Access Modifiers

Soal:
Buat kelas AkunBank dengan:

    Properti:
        $namaPemilik (public)
        $saldo (private)
    Metode:
        __construct($nama, $saldoAwal) untuk menginisialisasi properti.
        deposit($jumlah) (public): Menambahkan saldo.
        cekSaldo() (public): Menampilkan saldo.
        ambilSaldo($jumlah) (protected): Mengurangi saldo (hanya bisa dipanggil dari dalam kelas atau turunan).

Tugas:

    Buat turunan kelas bernama AkunTabungan.
    Tambahkan metode tarikTunai($jumlah) (public) yang memanggil ambilSaldo($jumlah).
    Uji akses ke saldo dengan mencoba memanggil properti $saldo langsung.
*/

class AkunBank{
    public $namaPemilik;
    private $saldo;

    function __construct($nama, $saldoAwal){
        $this->namaPemilik = $nama;
        $this->saldo = $saldoAwal;
    }

    function deposit($jumlah) {
        echo "Saldo anda ditambah sebanyak $jumlah\n";
        return $this->saldo += $jumlah."\n";
    }
    
    function cekSaldo(){
        echo "Saldo anda adalah : $this->saldo\n";
    }
    
    protected function ambilSaldo($jumlah) {
        // ambil saldo 
        return $this->saldo -= $jumlah."\n";
    }
    
    function __destruct() {
        echo "Terimakasih telah menggunakan layanan kami...\n";
    }
}

class AkunTabungan extends AkunBank{
    function tarikTunai($jumlah) {
        echo "Saldo anda dikurangi sebanyak $jumlah\n";
        return $this->ambilSaldo($jumlah);
    }
}

$Aria = new AkunTabungan("Aria Ballacca",20000000);
$Aria->cekSaldo();
$Aria->deposit(9000000);
$Aria->cekSaldo();

$Rust = new AkunTabungan("Rusty Mad", 900000000);
$Rust->cekSaldo();
$Rust->deposit(4000000);
$Rust->cekSaldo();
$Rust->tarikTunai(60001);

/*4. Inheritance

Soal:
Buat kelas induk Hewan dengan properti:

    $nama (protected)
    $jenis (protected)

Metode:

    __construct($nama, $jenis) untuk menginisialisasi properti.
    deskripsi() untuk menampilkan: [nama] adalah seekor [jenis].

Buat kelas turunan Burung:

    Tambahkan properti $warnaBulu (private).
    Override metode deskripsi() untuk menambahkan informasi warna bulu.

Tugas:

    Buat objek Burung dengan nama "Elang", jenis "Karnivora", dan warna "Coklat", lalu panggil metode deskripsi().

*/

class Hewan{
    protected $nama;
    protected $jenis;

    function __construct($nama,$jenis){
        $this->nama=$nama;
        $this->jenis = $jenis;
    }

    function description(){
        echo "$this->nama adalah seekor $this->jenis\n";
    }
}

class anakBurung extends Hewan{
    private $warnaBulu;

    function __construct($nama, $jenis,$warnaBulu){
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->warnaBulu = $warnaBulu;
    }

    public function description(){
        echo "$this->nama adalah seekor $this->jenis, dan berwarna bulu $this->warnaBulu\n";
    }
}

$elang = new anakBurung("Elang","Karnivora","Coklat\n");
$elang->description();

/*
5. Traits

Soal:
Buat trait Manusia dengan metode:

    bicara() menampilkan: "Saya bisa bicara."

Buat kelas Dokter dan Guru yang menggunakan trait tersebut. Tambahkan metode unik pada masing-masing kelas:

    Dokter: menyembuhkan() menampilkan: "Saya bisa menyembuhkan penyakit."
    Guru: mengajar() menampilkan: "Saya bisa mengajar pelajaran."

Tugas:

    Buat objek dari masing-masing kelas dan panggil metode yang tersedia.
*/

trait Manusia{
    function bicara(){
        echo "Saya bisa bicara\n";
    }
}

class dokter{
    use Manusia;
    function menyembuhkan(){
        echo "Saya bisa menyembuhkan penyakit\n";
    }
}
class guru{
    use Manusia;
    function mengajar(){
        echo "Saya bisa mengajar\n";
    }
}

$r =new dokter;
$r->bicara();
$r->menyembuhkan();

$s = new guru;
$s->bicara();
$s->mengajar();

/*
7. Namespaces

Soal:
Buat dua file PHP terpisah:

    File Hewan.php: Buat namespace App\Hewan dan tambahkan kelas Kucing dengan metode bersuara() yang menampilkan "Meong!".
    File Main.php: Gunakan namespace App\Hewan, buat objek dari kelas Kucing, dan panggil metode bersuara().

Tugas:

    Jalankan program dari file Main.php.


8. Iterables (Latihan Awal)

Soal:
Buat fungsi bernama cetakIterable() yang menerima parameter bertipe iterable. Fungsi harus mencetak setiap elemen iterable dengan foreach.

Tugas:

    Panggil fungsi cetakIterable() menggunakan:
        Sebuah array [1, 2, 3].
        Generator sederhana yang menghasilkan angka 1 hingga 5.

Contoh Generator:

function angkaGenerator() {
    for ($i = 1; $i <= 5; $i++) {
        yield $i;
    }
}

*/
function angkaGenerator() {
    for ($i = 1; $i <= 5; $i++) {
        yield $i;
    }
}
foreach(angkaGenerator()as $isi){
    echo $isi."\n";
}

function cetakIterable($array){
    foreach ($array as $data){
        yield $data;
    }
}

$array = [2,1,4,4];
foreach(cetakIterable($array)as $isi){
    echo $isi."\n";
}
?>